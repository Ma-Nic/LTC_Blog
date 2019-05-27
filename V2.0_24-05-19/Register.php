<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V2.0
-->


<?php require("includes/header.php"); ?>
		
		
		<h2>Register New User Details</h2>

		<form method="POST" action="WriteUser">	
			<!-- Request new user details to be submitted -->
			<table class="regUser">
				 <tr>
				  <td class="regLabel"><label>Enter Your Full Name :</label></td>
				  <td><input type="text" class="regInput" name="Name" required autofocus> </td>
				 </tr>
				 <tr>
				  <td class="regLabel"><label>Enter A User Name :</label></td>
				  <td><input type="text" class="regInput" name="Username" required> </td>
				 </tr>
				 <tr>
				  <td class="regLabel"><label>Enter Your Email Address:</label></td>
				  <td><input type="text" class="regInput" name="Email" required> </td>
				 </tr>
				 <tr>
				  <td class="regLabel"><label>Create A Password:</label></td>
				  <td><input type="Password" class="regInput" id="createPassword" name="UserPassword" onchange="createPassword()" required> </td>
				 </tr>
				 <tr>
				  <td class="regLabel"><label>Confirm Password:</label></td>
				  <td><input type="Password" class="regInput" id="confirmCreatePwd" name="ConfirmPassword" onkeyup="createPassword()" required> </td>
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