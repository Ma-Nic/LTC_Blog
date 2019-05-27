<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
03/05/19
V1.0
-->


<!DOCTYPE html>
<html lang - "en">
	<head>

	<title>The Local Theater Company</title>

	</head>
	
	<body>



		<div clas="container">
		
		<!-- Display Welcome page with options to log in or register -->
		
			<h1>Welcome to your Local Theater Company!</h1>

			<form method="post" action="CheckUser.php">
				 <h2>Please sign in or register</h2>


				 <label for="inputEmail">Email address</label>
				 	<input type="email" id="inputEmail" name="Email" placeholder="Email Address" required autofocus>


				 <label for="inputPassword">Password</label>
				 	<input type="password" id="inputPassword" name="UserPassword" placeholder="Password" required>

				 <br>
				 <button type="submit">Sign in</button>
			
			 </form>
			 
			 
			 <form method="post" action="Register.php">
			 
				<button type="submit">Register</button>
			 
			 </form>
			 

		 </div><!--/container -->


	</body>
</html>


