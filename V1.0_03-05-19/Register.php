<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
03/05/19
V1.0
-->


<html>
<head>
<title>Create New User</title>
</head>
<body>
<h2>Register User details</h2>

<form method="POST" action="WriteUser.php">

<table>
 <tr>
  <td>Enter Your Full Name :</td>
  <td><input type="text" name="Name" size="60"> </td>
 </tr>
 <tr>
  <td>Choose A User Name :</td>
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

 
 <tr>
 <td colspan="2"><input type="submit" value="Add User"/></td>
 </tr>
<tr>
  <td colspan="2"><input type="reset" value="Clear"/></td>
 </tr>
</table>
</form>

</body>
</html>