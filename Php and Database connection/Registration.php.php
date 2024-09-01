<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Registration form </title>
	<link href="Styling.css" rel="stylesheet" type="text/css">
</head>	
<body>
	<?php    
if (isset($_POST['submit']))
	{
		
		include "Connection.php";
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$password = $_POST['password'];
	    $confirmpassword = $_POST['confirmpassword'];
	
	$sql = "INSERT INTO Registration (Name,Email,Password,confirmpassword)
	VALUES ('$Name','$Email','$Password','$confirmpassword')";
	
		$results = mysqli_query($conn,$sql);
	if(!$results){ 
		die (	'Could not enter data : '.mysqli_error($conn));
	}
	else{
		echo "Enterd data successfully";
	}
		}
	?>
<form action ="" method="post" enctype=	"multipart/form-data" name = "form1" id = "form1">
	<table width="200" border="1">
	<h1> Registration </h1>
  <tbody>
    <tr>
      <th>Username </th> 
      <td><label for="Uname2"></label><input type="text" name="Uname" id = "Uname2"></td></tr>
    <tr>
      <th>Email </th>
      <td><label for ="Email"></label><input name = "Email" id="Email" ></td>
    </tr>
	  <tr>
      <th>Password</th>
	  <td><label for = "Password"></label><input type = "Password" name="pass" id = "Pass" placeholder="Password">
      </td>
    </tr>
	    </tr>
	  <tr>
      <th>Confirm Password</th>
	  <td><label for = "Password"></label><input type = "Password" name="pass" id = "Pass" placeholder="Password">
      </td>
    </tr>
      <th><input type="submit" name="submit" id="submit" value="submit"> </th>
	  <th><input type="button" value="Reset"> </th>
	  <a href="Loginform(html).php">Have a Account </a>
    </tr>
  </tbody>
</table>
</form>
	
</body>
</html>