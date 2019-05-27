<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V1.9
-->


<?php require("includes/header.php"); ?>


	<?php 
		// Add in the database connection details
		include("DbConnect.php");

		// Get the information from UserPage
		$newName		= $_POST['newName'];
		$newEmail	 	= $_POST['newEmail'];
		$newPassword  	= $_POST['newPassword'];

	
		// echo $UserID;
		// echo $newName;
		// echo $newEmail; 
		
		// Build query for new user details
		$Q_UpdateName = "UPDATE LTC_UserDB SET Name='$newName' WHERE UserID='$UserID'";
		 echo $Q_UpdateName;

		$Q_UpdateEmail = "UPDATE LTC_UserDB SET Email='$newEmail' WHERE UserID='$UserID'";
		 echo $Q_UpdateEmail;	

		$hash = password_hash($newPassword, PASSWORD_DEFAULT);
		$Q_UpdatePassword = "UPDATE LTC_UserDB SET Password='$hash' WHERE UserID='$UserID'";
		 echo $Q_UpdatePassword;
		
		
		if($newName!=NULL)
		{
			$Result = mysqli_query($DB,$Q_UpdateName); 
			$_SESSION["Name"]		= $newName;
		}
		
		if($newEmail!=NULL)
		{
			$Result = mysqli_query($DB,$Q_UpdateEmail);
			$_SESSION["Email"] 		= $newEmail;			
		}
		
		if($newPassword!=NULL)
		{
			$Result = mysqli_query($DB,$Q_UpdatePassword);			
		}
		
		if($Result)
		{
			header("Location:UserPage");
		}
	
	?>


<?php require("includes/footer.php"); ?>



















