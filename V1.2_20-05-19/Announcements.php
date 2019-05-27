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
		<title>Announcements</title>
	</head>

	<body>

		<!-- NavBar -->
		<ul class=NavBar align=right>
			<li><a href="index">Home</a></li>
			<li><a href="UserPage">Profile</a></li>
			<li><a href="Announcements">Announcements</a></li>
		</ul>


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
					echo '<tr><th><h2>'.$Row['BlogName'].'</h2></th></tr>';
					echo '<tr><td><button onclick="editBlog()">Edit Blog</button></td></tr>';
					echo '<tr><td>'.$Row['BlogEntry'].'</td></tr>';
					echo '<tr><td>'.$Row['BlogDate'].'</td>';
					echo '<td><em>'.$Row['Username'].'</em></td></tr>';
					echo '<tr><td><button onclick="showComments()">Show Comments</button></td>';
					echo '<td><button class=standard onclick="leaveComment()">Leave Comment</button></td></tr>';
					echo '</article>';	
				}		
			?>
		</table>
		
		
		<!-- Footer Links -->
		<div class=Footer>
			</br></br>
			<a href="ContactUs">Contact Us</a>
			<a href="AboutUs">About Us</a>
		</div>		
		
		
	</body>
	
	<noscript>Sorry, your browser does not support JavaScript!</noscript>

</html>