<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V2.0
-->


<?php require("includes/header.php"); ?>

			<?php 
				include("DbConnect.php");
				session_start();

				// Set up session variables
				$UserID		= $_SESSION["UserID"];
				$Email 		= $_SESSION["Email"];
				$Username	= $_SESSION["Username"];
				$Name		= $_SESSION["Name"];
				$Admin		= $_SESSION["Admin"];	

				$Query 		= "SELECT UserID, Username, Email, Name, UserRights, Suspended FROM LTC_UserDB";
				$Result 	= $Result = mysqli_query($DB,$Query);	
			?>
			
			<!-- Guest User area -->
			<div class="guest" id="guest-user">
				<?php
					echo '<h2>Welcome, Guest!</h2>';
					
					echo '<p>To see your details, please login or register below</p>';
					
					// Login
					echo '<form method="post" action="index">';
					echo '<button type="submit">Login</button>';
					echo '</form>';

					// Register
					echo '<form method="post" action="Register">';
					echo '<button type="submit">Register</button>';
					echo '</br></form>';
				?>
			</div>

			<!-- Standard User area -->
			<div class="standard" id="standard-user">
				<?php	
					echo '<h2>Welcome, '.$Username.'</h2>';

					// Display and update name
					echo '<h3 class="userDetails">Name</h3>';
					echo '</br>'.$Name;
					echo '</br><button onclick="changeName()">Change Name</button>';
					echo '<form method="post" action="UpdateUser">';
					echo '<div class="updateName"><input type="text" name="newName" placeholder="Enter Name">';
					echo '<button type="submit">Confirm</button></div></form></br>';
				
				
					// Display and update email
					echo '<h3 class="userDetails">Email</h3>';
					echo '</br>'.$Email;
					echo '</br><button onclick="changeEmail()">Change Email</button>';
					echo '<form method="post" action="UpdateUser">';
					echo '<div class="updateEmail"><input type="email" name="newEmail" placeholder="Enter Email">';
					echo '<button type="submit">Confirm</button></div></form></br>';
				
					
					// Update Password
					echo '<label class="userDetails">Update Password</label>';
					echo '</br><button onclick="changePassword()">Change Password</button>';
					echo '<form method="post" action="UpdateUser">';
					echo '<div class="updatePassword"><input type="password" id="updatePassword" name="newPassword" 
							placeholder="Enter Password" onchange="validatePassword()" required></br>';
					echo '<input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" onkeyup="validatePassword()" required></br>';					
					echo '<button type="submit">Confirm</button></div></form></br>';
				?>
			</div>

			<!-- Admin User area -->
			<div class="admin" id="admin-user">
				<?php
					echo '<hr>';
					echo '</br><h2>Admin Controls</h2>';
					
					
					// Update user privilege
					echo '</br><button id="privBtn">Promote / Demote User</button>';					
					echo '<div id="privModal" class="modal">';
					echo '<div class="modal-content">';
					echo '<span> class="close">&times;</span>';
					
				//	echo '</br><form method="post" action="UpdateUser">';
					echo '<table>';
					echo '<tr><th>UserID</th><th>Username</th><th>Email</th><th>Name</th><th>User Rights</th></tr>';
					
					while ($Row = mysqli_fetch_assoc($Result)) 
					{					
						echo '<tr>';
						echo '<td>'.$Row['UserID'].'</td>';
						echo '<td>'.$Row['Username'].'</td>';
						echo '<td>'.$Row['Email'].'</td>';
						echo '<td>'.$Row['Name'].'</td>';
						echo '<td>'.$Row['UserRights'].'</td>';
					}
					
					echo '</table>';
				//	echo '<button type="submit">Promote / Demote User</button></form>';
					echo '</div>';
					echo '</div>';

					
					
					// Toggle user account activation
					echo '</br><form method="post" action="UpdateUser">';
					echo '<button type="submit">Activate / Suspend User</button></form></br>';
					
					
					// Create and post new blogs
					echo '<h3>Create New Announcement</h3>';
					echo '<button onclick="createBlog()">Create Blog Post</button>';
					echo '</br><form id=blogPost method="POST" action="UpdateBlog">';
					echo '<div class="newBlog"><label>Title</label></br>';
					echo '<input type="text" id="blogTitle" name="blogTitle" placeholder="Title" autofocus required></br>';
					echo '<label>Body</label></br>';
					echo '<textarea id="blogBody" name="blogBody" placeholder="Write your announcement" required></textarea></br>';
					echo '<button type="submit">Post Announcement</button></div></form></br>';
			
				?>
			</div>
				
<?php require("includes/footer.php"); ?>



