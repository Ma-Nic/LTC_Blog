<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V1.9
-->


<?php require("includes/header.php"); ?>


	<?php
		// Add in the database connection details
		include("DbConnect.php");

		// Get the information from  UserPage.php
		$newBlogTitle		= $_POST['blogTitle'];
		$newBlogBody	 	= $_POST['blogBody'];
	
		echo $UserID;
		echo $newBlogTitle;
		echo $newBlogBody;

		
		// Build query for blog creation
		$Q_NewBlog = "INSERT INTO `LTC_BlogDB` (`UserID`,`BlogName`,`BlogEntry`,`BlogDate`) 
			VALUES ('$UserID','$newBlogTitle','$newBlogBody',CURDATE())";
		 echo $Q_NewBlog;
		
		
		if($newBlogTitle!= NULL)
		{
			$Result = mysqli_query($DB,$Q_NewBlog); 
			
		}
		
/* 		if($newEmail!=NULL)
		{
			$Result = mysqli_query($DB,$Q_UpdateEmail);
			$_SESSION["Email"] 		= $newEmail;			
		}
		
		if($newPassword!=NULL)
		{
			$Result = mysqli_query($DB,$Q_UpdatePassword);			
		} */
		
		if($Result)
		{
			header("Location:Announcements");
		}
	
	?>


<?php require("includes/footer.php"); ?>
