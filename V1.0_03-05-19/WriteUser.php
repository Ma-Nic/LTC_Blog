<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
03/05/19
V1.0
-->

<html>
<head>
</head>
<body>
	<?php
	  include("DbConnect.php");              // Add in the database connection details

	  // Get the information from  Register.php

	  $Name			= $_POST['Name'];
	  $Username	 	= $_POST['Username'];
	  $Email	 	= $_POST['Email'];
	  $UserPassword = $_POST['UserPassword'];

	  
		// echo $Name;
		// echo $Username;
		// echo $Email;
		// echo $UserPassword;

		// Hash users password and enter details into LTC_UserID
		
	  $hash = password_hash($UserPassword, PASSWORD_DEFAULT);
		
	  $Query = "insert into LTC_UserDB (Username,Email,Password,Name) values ('$Username','$Email','$hash','$Name')";
		// echo $Query;
		
	  $Result = mysqli_query($DB,$Query); 	 
		// echo $Result;

	  if ($Result)
		echo 'User login details inserted';	
	
	  else
		echo 'Sorry - unable to complete the operation at present';

	?>

	<FORM METHOD="LINK" ACTION="index.php">

		<INPUT TYPE="submit" VALUE="Back to Login">

	</FORM>

</body>
</html>


