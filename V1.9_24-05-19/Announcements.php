<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V1.9
-->


<?php require("includes/header.php"); ?>


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
					echo '<td><button class=admin onclick="editBlog()">Edit Announcement</button></td></tr>';
					echo '</article>';
					echo '</article>';
				}		
			?>
		</table>
		
		
<?php require("includes/footer.php"); ?>