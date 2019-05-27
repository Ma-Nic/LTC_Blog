<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
19/05/19
V1.2
-->

<!DOCTYPE html>
<html>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	
	<head>
		<meta charset = "UTF-8">
		<title>Profile</title>
	</head>
	
	<body>

		<!--
		<div ng-app="myApp" ng-controller="myCtrl">

		Full Name: <input type="text" ng-model="fullName"><br>

		<br>
		Full Name: {{fullName}}

		echo "Welcome ".$Name."</br></br>";


		</div>
		-->
		
		<!-- NavBar -->
		<ul class=NavBar align=right>
			<li><a href="index">Home</a></li>
			<li><a href="UserPage">Profile</a></li>
			<li><a href="Announcements">Announcements</a></li>
		</ul>


		<?php 
			include("DbConnect.php");
			session_start();

			// Set up session variables
			$UserID		= $_SESSION["UserID"];
			$Email 		= $_SESSION["Email"];
			$Username	= $_SESSION["Username"];
			$Name		= $_SESSION["Name"];
			$Admin		= $_SESSION["Admin"];
		?>

		<div class=guest>
			<?php
			echo '<h2>Welcome, Guest!</h2>';
			
			echo '<p>To see your details, please login or register below</p>';
			
			echo '<form method="post" action="index">';
			echo '<button type="submit">Login</button>';
			echo '</form>';

			echo '<form method="post" action="Register">';
			echo '<button type="submit">Register</button>';
			echo '</form>';
		
		
			?>
		</div>


		<div class=standard>
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

		<div class=admin>
			<?php
		
				echo '</br></br><h2>Admin Controls</h2>';
						
				echo '</br><form method="post" action="UpdateUser">';
				echo '<button type="submit">Promote / Demote User</button></form>';
				
				echo '</br><form method="post" action="UpdateUser">';
				echo '<button type="submit">Activate / Suspend User</button></form>';
		
			?>
		</div>



		<!-- Footer Links -->
		<div class=Footer>
			</br></br>
			<a href="ContactUs">Contact Us</a>
			<a href="AboutUs">About Us</a>
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
