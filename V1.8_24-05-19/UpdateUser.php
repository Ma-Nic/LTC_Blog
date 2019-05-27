<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
-->


<?php require("includes/header.php"); ?>


	<?php 
	  // Add in the database connection details
	  include("DbConnect.php");

	  // Get the information from  UserPage.php
	  $newName		= $_POST['newname'];
	  $newEmail	 	= $_POST['newemail'];
	  $newPassword  = $_POST['newpassword'];
	  
	
	  // Query database for new user details
	  $Q_UpdateName = 'UPDATE LTC_UserDB SET Name=$newName WHERE Username=$Username';
		// echo $Q_UpdateName;

	  $Q_UpdateEmail = 'UPDATE LTC_UserDB SET Email=$newEmail WHERE Username=$Username';
		// echo $Q_UpdateEmail;	

	  $hash = password_hash($newPassword, PASSWORD_DEFAULT);
	  $Q_UpdatePassword = 'UPDATE LTC_UserDB SET Password=$hash WHERE Username=$Username';
		// echo $Q_UpdatePassword;
	
	?>


<?php require("includes/footer.php"); ?>
