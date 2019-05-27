<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
17/05/19
V1.1
-->


<!DOCTYPE html>
<html lang - "en">
	<head>
		<title>Check user</title>
	</head>
	
	<body>
		<!-- NavBar -->
		<ul id=NavBar align=right>
			<li><a href="index.html">Home</a></li>
			<li><a href="UserPage">Profile</a></li>
			<li><a href="Announcements">Announcements</a></li>
		</ul>

		
		<?php
		 include("DbConnect.php");
		 session_start();

		 //Get the information from the sign in form
		 $Email		    =$_POST['Email'];
		 $UserPassword  =$_POST['UserPassword'];
		 // echo 'Email is :'.$Email.' and password is '.$UserPassword.'</br>';


		 // Build query to UserDB, check for entries of supplied email address	
		 $Query = "SELECT * FROM LTC_UserDB WHERE Email = '$Email'";
		 // echo $Query;


		 // Query database and check how many returned results there are
		 $Result 		= mysqli_query($DB,$Query);
		 $NumResults 	= mysqli_num_rows($Result);


		 // If user exists, feed user data into variables
		 if ($NumResults==1)
		 {
			$Result 	= mysqli_query($DB,$Query);
			$Row 		= mysqli_fetch_assoc($Result);
			$UserID 	= $Row['UserID'];
			$Username 	= $Row['Username'];
			$Email 		= $Row['Email'];
			$HashPW 	= $Row['Password'];
			$Name 		= $Row['Name'];
			$Admin		= $Row['UserRights'];
			$Suspended	= $Row['Suspended'];


				// Confirm hashed password is valid, if yes then start a session with user variables
				if(password_verify($UserPassword, $HashPW))
				{	
					 session_start(); 

					 $_SESSION["UserID"] 	= $UserID;
					 $_SESSION["Email"] 	= $Email;
					 $_SESSION["Username"] 	= $Username;
					 $_SESSION["Name"]		= $Name;
					 $_SESSION["Admin"]		= $Admin;
					 $_SESSION["Suspended"] = $Suspended; 

					 header("Location:UserPage");


		//				echo $UserID."</br>";
		//				echo $Email."</br>";
		//				echo $Username."</br>";
		//				echo $Admin."</br>";
		//				echo $Suspended;

				}

			// If password is incorrect, advise user to check details or register
			else
			{			
				echo '<h2>Sorry, the username or password are incorrect.</br>Please try again or register below.</h2>';
				echo '</br></br>';

				echo '<form method="post" action="index.php">';
				echo '<button type="submit">Login</button>';
				echo '</form>';

				echo '<form method="post" action="Register.php">';
				echo '<button type="submit">Register</button>';
				echo '</form>';

			}
		 }

			// If user is not found, advise user to check details or register
			else
			{			
				echo '<h2>Sorry, the username or password are incorrect.</br>Please try again or register below.</h2>';
				echo '</br></br>';

				echo '<form method="post" action="index.php">';
				echo '<button type="submit">Login</button>';
				echo '</form>';

				echo '<form method="post" action="Register.php">';
				echo '<button type="submit">Register</button>';
				echo '</form>';

			}

			?>
		
		<!-- Footer Links -->
		<div id=Footer>
			</br></br>
			<a href="new_page.php">Contact Us</a>
			<a href="new_page.php">About Us</a>
		</div>

	</body>
</html>

