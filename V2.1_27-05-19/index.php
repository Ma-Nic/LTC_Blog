<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V2.0
-->
 
 
<?php require("includes/header.php"); ?>
 
 
	<div class="container">
	
	<!-- Display Welcome page with options to log in or register -->
		<h1>Welcome to your Local Theater Company!</h1>
	
		<div class="guest" id="guest-home">
			<h2>Please Sign-In or Register</h2>

			<table class ="indexUser">
				<form method="post" action="CheckUser">
					
					<!-- Existing User Login -->
					<tr>
					 <td class="indexLabel"><label for="inputEmail">Email Address:</label></td>
					 <td><input type="email" class="indexInput" id="inputEmail" name="Email" placeholder="Email Address" required autofocus></td>
					</tr>
					
					
					<tr>
					 <td class="indexLabel"><label for="inputPassword">Password:</label></td>
					 <td><input type="password" class="indexInput" id="inputPassword" name="UserPassword" placeholder="Password" required></td>
					</tr>

					<!-- Sign In button -->
					<tr>
					 <td colspan="2"><button type="submit">Sign in</button></td>	
					</tr>
				</form>
			 
				<!-- Register button -->
				<form method="post" action="Register">
					<tr>
						<td colspan="2"><button type="submit">Register</button></td>
					</tr>
				</form>
			</table>
		</div>
	 
		
		<!-- Logged in user display -->
		<div class="standard"  id="user-home">
			</br></br>
			<h2>Hi, <?php echo $Username ?>!</h2>
		</div>

	 </div> 

<?php require("includes/footer.php"); ?>
		



