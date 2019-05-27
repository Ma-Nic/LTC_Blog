<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
19/05/19
V1.2
-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Register New User</title>	
	</head>

	<body>
		
		<!-- NavBar -->
		<ul class=NavBar align=right>
			<li><a href="index">Home</a></li>
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
				echo '<h2>Sorry - Unable to complete the operation at present, please try again later</h2>';
			}
		
		
			// If user already exists
			else
				echo '<h2>Sorry, that user already exists. Please login below</h2>';
		?>
		
		
		<!-- Link back to Login -->
		<FORM METHOD="LINK" ACTION="index">
			<INPUT TYPE="submit" VALUE="Back to Login">
		</FORM>
			
			
		<!-- Footer Links -->
		<div class=Footer>
			</br></br>
			<a href="ContactUs">Contact Us</a>
			<a href="AboutUs">About Us</a>
		</div>		
			
	</body>
	
	<noscript>Sorry, your browser does not support JavaScript!</noscript>
	
</html>


