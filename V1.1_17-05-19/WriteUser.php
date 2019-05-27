<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
17/05/19
V1.1
-->

<html>
<head>
</head>
<body>
	
	<!-- NavBar -->
	<ul id=NavBar align=right>
		<li><a href="index.html">Home</a></li>
		<li><a href="UserPage">Profile</a></li>
		<li><a href="Announcements">Announcements</a></li>
	</ul>
	
	<?php
	  include("DbConnect.php");              // Add in the database connection details

	  // Get the information from  Register.php
	  $Name			= $_POST['Name'];
	  $Username	 	= $_POST['Username'];
	  $Email	 	= $_POST['Email'];
	  $UserPassword = $_POST['UserPassword'];
	  
	
	  // Query database for new user details
	  $QueryUser = "SELECT * FROM LTC_UserDB WHERE Email = '$Email'";
		// echo $QueryUser;
		
	
	  $UserResult = mysqli_query($DB,$QueryUser); 
	  $NumResults = mysqli_num_rows($UserResult);
		// echo $UserResult;
	
	
	  // If new user details do not already exist
	  if($NumResults == 0)
	  {
			// echo $Name;
			// echo $Username;
			// echo $Email;
			// echo $UserPassword;

		  
		  // Hash users password and enter user details into LTC_UserDB
		  $hash = password_hash($UserPassword, PASSWORD_DEFAULT);

		  $Query = "INSERT into LTC_UserDB (Username,Email,Password,Name) values ('$Username','$Email','$hash','$Name')";
			// echo $Query;

		  $Result = mysqli_query($DB,$Query); 	 
			// echo $Result;

		  
		  // If details were submitted successfully
		  if ($Result)
			echo '<h2>User successfully registered</h2>';	

		  
		  // If details did not submit successfully
		  else
			echo '<h2>Sorry - unable to complete the operation at present, please try again later</h2>';
	  	}
	
	
		// If user already exists
		else
			echo '<h2>Sorry, that user already exists. Please login below</h2>';
	?>
	
	
	<!-- Link back to Login -->
	<FORM METHOD="LINK" ACTION="index.html">
		<INPUT TYPE="submit" VALUE="Back to Login">
	</FORM>
		
		
	<!-- Footer Links -->
	<div id=Footer>
		</br></br>
		<a href="new_page.php">Contact Us</a>
		<a href="new_page.php">About Us</a>
	</div>		
		
</body>
</html>


