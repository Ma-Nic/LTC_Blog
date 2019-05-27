<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
17/05/19
V1.1
-->

<!DOCTYPE html>
<html>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	
	<head>
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
		<ul id=NavBar align=right>
			<li><a href="index.html">Home</a></li>
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
			$Suspended	= $_SESSION["Suspended"]; 
		?>

		<div>	
			<?php	
				echo '<h2>Welcome, '.$Username.'</h2>';

				echo '</br></br>'.$Name;
				echo '<form method="post" action="Update.php">';
				echo '<button type="submit">Change Name</button></form>';
			
			
				echo '</br></br>'.$Email;
				echo '<form method="post" action="Update.php">';
				echo '<button type="submit">Change Email</button></form>';
			
				echo '<form method="post" action="Update.php">';
				echo '<button type="submit">Change Password</button></form>';
			?>
		</div>


		<!-- Footer Links -->
		<div id=Footer>
			</br></br>
			<a href="new_page.php">Contact Us</a>
			<a href="new_page.php">About Us</a>
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
</html>
