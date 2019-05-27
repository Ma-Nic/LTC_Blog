<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
03/05/19
V1.0
-->


<!DOCTYPE html>
<html lang - "en">
	<head>

		<title>Check user</title>

	</head>
	
	<body>
	<?php

	 include("DbConnect.php");

	 session_start();

	 //Get the information from the sign in form

	 $Email		    =$_POST['Email'];
	 $UserPassword  =$_POST['UserPassword'];

	// echo 'Email is :'.$Email.' and password is '.$UserPassword.'</br>';
	
	// Query UserDB for entries of supplied email address
	
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

			// Confirm password is valid, if yes then start a session with user variables

			if(password_verify($UserPassword, $HashPW))
				{	
		
			 session_start(); 

			 $_SESSION["UserID"] 	= $UserID;
			 $_SESSION["Email"] 	= $Email;
			 $_SESSION["Username"] 	= $Username;
			 $_SESSION["Admin"]		= $Admin;
			 $_SESSION["Suspended"] = $Suspended; 

				echo "hello " .$Username. "</br></br>";

			//	include("angularpage.html");

			//	include("page1.html");
				
			}

	 	else
	 	{
			// If user is not found, advise user to check details or register
			
	 		echo '<h1>Sorry, that user was not found. Please check your entered details or register below.</h1>';
			echo '</br></br>';
			
			echo '<form method="post" action="index.php">';
			echo '<button type="submit">Login</button>';
			echo '</form>';
			
			echo '<form method="post" action="Register.php">';
			echo '<button type="submit">Register</button>';
			echo '</form>';

	 	}
	 }

?>

</body>
</html>

