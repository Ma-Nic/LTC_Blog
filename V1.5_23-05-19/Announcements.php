<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
23/05/19
V1.5
-->


<!DOCTYPE html>
<html>

	<head>
		<script src="js/ltc_js.js" type="text/javascript"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset = "UTF-8">

		<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/ltc_css.css">

		<title>Announcements</title>
	</head>

	<body>

		<!-- NavBar -->
		<div class="navbar">
		  <a href="index"><img src="images/long-film-strip.png" alt="Film Strip" class="navimg"></a>
		  <div class="navbar-right">
			<a href="index">Home</a>
			<a href="UserPage">Profile</a>
			<a href="Announcements">Announcements</a>
			<a href="LogOut" class="standard">Log Out</a>
		  </div>
		</div> 


		<h1>Announcements page</h1>


		<table>
			<?php
				include("DbConnect.php");
				session_start();
				
				$UserID		= $_SESSION["UserID"];
				$Username 	= $_SESSION["Username"]; 
				$Admin		= $_SESSION["Admin"];
				
				
				$Query = "SELECT * FROM LTC_BlogDB LEFT JOIN LTC_UserDB ON LTC_BlogDB.UserID=LTC_UserDB.UserID";
			
				$Result = mysqli_query($DB,$Query);	
				
				

				while ($Row = mysqli_fetch_assoc($Result)) 
				{
					echo '<article>';
					echo '<article class=blogPosts>';
					echo '<tr><th><h2>'.$Row['BlogName'].'</h2></th></tr>';
					echo '<tr><td><button class=admin onclick="editBlog('.$Row['BlogID'].')">Edit Blog</button></td></tr>';
					echo '<tr><td>'.$Row['BlogEntry'].'</td></tr>';
					echo '<tr><td>'.$Row['BlogDate'].'</td>';
					echo '<td><em>'.$Row['Username'].'</em></td></tr>';
					echo '<tr><td><button onclick="showComments('.$Row['BlogID'].')">Show Comments</button></td>';
					echo '<td><button class=standard onclick="leaveComment()">Leave Comment</button></td></tr>';
					echo '</article>';
					echo '</article>';
				}		
			?>
		</table>
		
		
		<!-- Footer Links -->
		<div class=Footer>
			</br></br>
			<p>
				<a href="ContactUs">Contact Us  |</a>
				<a href="AboutUs">|  About Us</a>
			</p>
		</div>		
		
		
	</body>
	
	<noscript>Sorry, your browser does not support JavaScript!</noscript>

</html>