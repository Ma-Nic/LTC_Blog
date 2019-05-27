<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
23/05/19
V1.5
-->


<!DOCTYPE html>
<html lang - "en">
	<head>
		<script src="js/ltc_js.js" type="text/javascript"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset = "UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/ltc_css.css">

	<title>The Local Theater Company</title>

	</head>
	
	<body>
	
		<?php 
		include("DbConnect.php");
		session_start();

		// Set up session variables
		$Admin		= $_SESSION["Admin"];		

		?>

		<section class="container">
			<header>
				<!-- NavBar -->
				<div class="navbar">
				  <nav>
					  <a href="index"><img src="images/long-film-strip.png" alt="Film Strip" class="navimg" onload="checkUserPrivilege(<?php echo $Admin ?>)"></a>
					  <div class="navbar-right">
						<a href="index">Home</a>
						<a href="UserPage">Profile</a>
						<a href="Announcements">Announcements</a>
						<a href="LogOut" class="standard">Log Out</a>
					  </div>
					</nav>
				</div> 
			</header>
			
			<div class="clr"></div>
			
		</section>
