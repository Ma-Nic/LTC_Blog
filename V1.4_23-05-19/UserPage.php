<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
22/05/19
V1.4
-->


<!DOCTYPE html>
<html>
	
	<head>
		<script src="js/ltc_js.js" type="text/javascript"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset = "UTF-8">

		<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/ltc_css.css">

		<title>Profile</title>
	</head>
	
	<body onload="checkUserPrivilege(<?php echo $Admin; ?>)">

		<!--
		<div ng-app="myApp" ng-controller="myCtrl">

		Full Name: <input type="text" ng-model="fullName"><br>

		<br>
		Full Name: {{fullName}}

		echo "Welcome ".$Name."</br></br>";


		</div>
		-->
		
		<!-- NavBar -->
		<div class="navbar">
		  <a href="index"><img src="images/long-film-strip.png" alt="Film Strip" class="navimg"></a>
		  <div class="navbar-right">
			<a href="index">Home</a>
			<a href="UserPage">Profile</a>
			<a href="Announcements">Announcements</a>
		  </div>
		</div> 


		<?php 
			include("DbConnect.php");
			session_start();

			// Set up session variables
			$UserID		= $_SESSION["UserID"];
			$Email 		= $_SESSION["Email"];
			$Username	= $_SESSION["Username"];
			$Name		= $_SESSION["Name"];
			$Admin		= $_SESSION["Admin"];		

			echo $UseID;
			echo $Username;
			echo $Admin;
		?>
		
		
		<div class="guest">
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


		<div class="standard">
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


		<div class="admin">
			<?php
				echo '</br></br><h2>Admin Controls</h2>';
						
				echo '</br><form method="post" action="UpdateUser">';
				echo '<button type="submit">Promote / Demote User</button></form>';
				
				echo '</br><form method="post" action="UpdateUser">';
				echo '<button type="submit">Activate / Suspend User</button></form>';
		
			?>
		</div>

		<!-- <button onclick="checkUserPrivilege(<?php echo $Admin; ?>)" id="testbtn">Testing Functions..</button>   -->


		<!-- Footer Links -->
		<div class="Footer">
			</br></br>
			<p>
				<a href="ContactUs">Contact Us  |</a>
				<a href="AboutUs">|  About Us</a>
			</p>
		</div>	



		<!--
		<script>
		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope) {
			$scope.fullName = ;

		});
		</script>
		-->

	</body>
	
	<noscript>Sorry, your browser does not support JavaScript!</noscript>
	
</html>
