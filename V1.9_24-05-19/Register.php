<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V1.9
-->


<?php require("includes/header.php"); ?>
		
		
		<h2>Register New User Details</h2>

		<form method="POST" action="WriteUser">	
			<!-- Request new user details to be submitted -->
			<table>
				 <tr>
				  <td>Enter Your Full Name :</td>
				  <td><input type="text" name="Name" size="60"> </td>
				 </tr>
				 <tr>
				  <td>Enter A User Name :</td>
				  <td><input type="text" name="Username" size="50"> </td>
				 </tr>
				 <tr>
				  <td>Enter Your Email Address:</td>
				  <td><input type="text" name="Email" size="70" > </td>
				 </tr>
				 <tr>
				  <td>Create A  Password:</td>
				  <td><input type="Password" name="UserPassword" size="40" > </td>
				 </tr>

				 <!-- Submit new user details -->
				 <tr>
				 <td colspan="2"><input type="submit" value="Add User"/></td>
				 </tr>
				<tr>
				  <td colspan="2"><input type="reset" value="Clear"/></td>
				 </tr>
			</table>
		</form>


<?php require("includes/footer.php"); ?>