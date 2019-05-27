<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
23/05/19
V1.5
-->
 
 
<?php require("includes/header.php"); ?>
 
	<div class="container">
	
	<!-- Display Welcome page with options to log in or register -->
		<h1>Welcome to your Local Theater Company!</h1>

		<form method="post" action="CheckUser">
			 <h2>Please Sign-In or Register</h2>


			 <label for="inputEmail">Email address</label>
				<input type="email" id="inputEmail" name="Email" placeholder="Email Address" required autofocus>


			 <label for="inputPassword">Password</label>
				<input type="password" id="inputPassword" name="UserPassword" placeholder="Password" required>

			 <br>
			 <button type="submit">Sign in</button>	
		 </form>
		 
		 
		 <form method="post" action="Register">
			<button type="submit">Register</button>
		 </form>
		 

	 </div> <!-- container -->

<?php require("includes/footer.php"); ?>
		



