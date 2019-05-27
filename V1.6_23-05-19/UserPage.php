<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
23/05/19
V1.5
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

				echo $UserID;
				echo $Username;
				echo $Admin;
			?>
			

			<div class="guest" id="guest">
				<?php
					echo '<h2>Welcome, Guest!</h2>';
					
					echo '<p>To see your details, please login or register below</p>';
					
					echo '<form method="post" action="index">';
					echo '<button type="submit">Login</button>';
					echo '</form>';

					echo '<form method="post" action="Register">';
					echo '<button type="submit">Register</button>';
					echo '</br></form>';
				?>
			</div>


			<div class="standard" id="standard">
				<?php	
					echo '<h2>Welcome, '.$Username.'</h2>';

					echo '</br></br>'.$Name;
					echo '<form method="post" action="UpdateUser">';
					echo '<button type="submit">Change Name</button></form>';
				
				
					echo '</br></br>'.$Email;
					echo '<form method="post" action="UpdateUser">';
					echo '<button type="submit">Change Email</button></form>';
				
				
					echo '</br><form method="post" action="UpdateUser">';
					echo '<button type="submit">Change Password</button></form>';
				?>
			</div>


			<div class="admin" id="admin">
				<?php
					echo '</br></br><h2>Admin Controls</h2>';
							
					echo '</br><form method="post" action="UpdateUser">';
					echo '<button type="submit">Promote / Demote User</button></form>';
					
					echo '</br><form method="post" action="UpdateUser">';
					echo '<button type="submit">Activate / Suspend User</button></form>';

					
					echo '</br><form id=blogPost method="post" action="UpdateBlog">';
					echo '<textarea name="blog" placeholder="Write your message"></textarea>';
					echo '<button type="submit">Post Announcement</button></form>';
			
				?>
			</div>



		<button onclick="checkUserPrivilege(<?php echo $Admin ?>)">Testing Functions..</button>
		
		<button onclick="myFunction()">Try it</button>

		<script>
			function myFunction() 
			{
			  alert("Hello! I am an alert box!");
			}

		</script>
				


<?php require("includes/footer.php"); ?>



