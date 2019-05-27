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

					//	echo $UserID."</br>";
					//	echo $Email."</br>";
					//	echo $Username."</br>";
					//	echo $Admin."</br>";
					//	echo $Suspended;

					// Check if user is suspended
					if($Suspended!=1)
					{
						
					/* 	if($Admin!=2)
						{
							
						}
					 */	
					 
						header("Location:UserPage");
					}
					else
					{
						echo '<h2>Sorry, your account has been suspended.</br>Please contact the admins for further details.</h2>';
						echo '</br></br>';	
					}
					
				}

				// If password is incorrect, advise user to check details or register
				else
				{			
					echo '<h2>Sorry, the username or password are incorrect.</br>Please try again or register below.</h2>';
					echo '</br></br>';
				}
			}

			// If user is not found, advise user to check details or register
			else
			{			
				echo '<h2>Sorry, the username or password are incorrect.</br>Please try again or register below.</h2>';
				echo '</br></br>';
			}

			echo '<form method="post" action="index">';
			echo '<button type="submit">Login</button>';
			echo '</form>';

			echo '<form method="post" action="Register">';
			echo '<button type="submit">Register</button>';
			echo '</form>';

		?>
		
<?php require("includes/footer.php"); ?>

