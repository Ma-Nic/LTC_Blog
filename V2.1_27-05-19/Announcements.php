<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V2.0
-->


<?php require("includes/header.php"); ?>


		<h1>Announcements page</h1>


		<table class="announcements">
			<?php
				include("DbConnect.php");
				session_start();
				
				$UserID		= $_SESSION["UserID"];
				$Username 	= $_SESSION["Username"]; 
				$Admin		= $_SESSION["Admin"];
				
				
				$Query = "SELECT * FROM LTC_BlogDB LEFT JOIN LTC_UserDB ON LTC_BlogDB.UserID=LTC_UserDB.UserID ORDER BY BlogDate DESC";
			
				$Result = mysqli_query($DB,$Query);	
				
				$x = 0;
				while ($Row = mysqli_fetch_assoc($Result)) 
				{
					echo '<article class=blogPosts>';

					// Blog Name and Edit Blog button
					echo '<tr><th><h2>'.$Row['BlogName'].'</h2></th></tr>';					
					echo '<tr><td><button class=admin onclick="editBlog('.$x.')">Edit Post</button></td></tr>';
					
					// Blog and submission details
					echo '<tr id="blog-org" class="blog-left"><td>'.$Row['BlogEntry'].'</td></tr>';
					echo '<tr class="blog-left"><td>'.$Row['BlogDate'].'</td>';
					echo '<td><em>'.$Row['Username'].'</em></td></tr>';
					
					
					// Edit blog
					echo '</br><form id=blogPost method="POST" action="UpdateBlog">';
					$_SESSION['BlogID'] = $Row['BlogID'];
					echo '<div class="blog-edit">';
					echo '<tr><td><input type="text" id="blogTitle-edit" name="blogTitle-edit" autofocus required value='.$Row['BlogTitle'].'></br></td></tr>';
					echo '<tr><td><textarea id="blogBody-edit" name="blogBody-edit" required>'.$Row['BlogEntry'].'</textarea></br></td></tr>';
					echo '<tr><td><button type="submit" onclick="blogAlert()">Confirm</button></div></form></td></tr>';
					
					
					// Comment options
					echo '<tr class="blog-left"><td><button onclick="showComments('.$Row['BlogID'].')">Show Comments</button></td>';
					echo '<td><button class=standard onclick="leaveComment()">Leave Comment</button></td></tr>';
					
					echo '</article>';
					$x = $x +1;
				}		
			?>
		</table>
		
		
<?php require("includes/footer.php"); ?>




