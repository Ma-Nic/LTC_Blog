<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V2.0
-->


<?php require("includes/header.php"); ?>


	<?php
		// Add in the database connection details
		include("DbConnect.php");

		// Get the information from  UserPage.php
		$newBlogTitle		= $_POST['blogTitle'];
		$newBlogBody	 	= $_POST['blogBody'];
		$editBlogTitle		= $_POST['blogTitle-edit'];
		$editBlogBody	 	= $_POST['blogBody-edit'];
		$BlogID				= $_SESSION['BlogID'];

	
		// echo $UserID;
		// echo $newBlogTitle;
		// echo $newBlogBody;

		
		// Build query for blog creation
		$Q_NewBlog = "INSERT INTO `LTC_BlogDB` (`UserID`,`BlogName`,`BlogEntry`,`BlogDate`) 
						VALUES ('$UserID','$newBlogTitle','$newBlogBody',CURDATE())";
		// echo $Q_NewBlog;
		
		
		// Build query for editing blog
		$Q_EditBlog = "UPDATE `LTC_BlogDB` SET 'UserID'='$UserID','BlogName'='$editBlogTitle','BlogEntry'='$editBlogBody','BlogDate'='$CURDATE()'
						WHERE 'BlogID'='$BlogID';	
		// echo $Q_NewBlog;
		
		
		
		if($newBlogTitle!= NULL)
		{
			$Result = mysqli_query($DB,$Q_NewBlog); 
			
		}
		
		if($editBlogTitle!= NULL)
		{
			$Result = mysqli_query($DB,$Q_EditBlog); 
			
		}
		
		
		if($Result)
		{
			header("Location:Announcements");
		}
	
	?>


<?php require("includes/footer.php"); ?>
