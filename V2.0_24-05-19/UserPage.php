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
					echo '<label class="userDetails">Name</label>';
					echo '</br>'.$Name;
					echo '</br><button onclick="changeName()">Change Name</button>';
					echo '<form method="post" action="UpdateUser">';
					echo '<div class="updateName"><input type="text" name="newName" placeholder="Enter Name">';
					echo '<button type="submit">Confirm</button></div></form></br>';
				
				
					// Display and update email
					echo '<label class="userDetails">Email</label>';
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
					echo '</br><h2>Admin Controls</h2>';
					
					
					// Update user privilege
					echo '</br><form method="post" action="UpdateUser">';
					echo '<button type="submit">Promote / Demote User</button></form>';
					
					
					// Toggle user account activation
					echo '</br><form method="post" action="UpdateUser">';
					echo '<button type="submit">Activate / Suspend User</button></form></br>';
					
					
					// Create and post new blogs
					echo '<h3>Create New Announcement</h3>';
					echo '<button onclick="createBlog()">Create Blog Post</button>';
					echo '</br><form id=blogPost method="POST" action="UpdateBlog">';
					echo '<div class="newBlog"><label>Title</label></br>';
					echo '<input type="text" id="blogTitle" name="blogTitle" placeholder="Title"></br>';
					echo '<label>Body</label></br>';
					echo '<textarea id="blogBody" name="blogBody" placeholder="Write your announcement"></textarea></br>';
					echo '<button type="submit">Post Announcement</button></div></form></br>';
			
				?>
			</div>
				
<?php require("includes/footer.php"); ?>



