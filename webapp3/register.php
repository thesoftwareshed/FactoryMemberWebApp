<?php

	include_once "header.php";
	include "sidebar.php"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
<title>Register</title>
</head>
<body>
<div id="main" style="margin-left:25%">

<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$fName = mysql_real_escape_string($_POST['fName']);
	$lName = mysql_real_escape_string($_POST['lName']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$password = md5(mysql_real_escape_string($_POST['password']));
	
	//SQL query to check if username exists:
	$checkusername = mysql_query("SELECT * FROM members WHERE Username ='".$username."'");
	//If username exists: 
	if(mysql_num_rows($checkusername)==1)
	{
		echo "<h1>Error</h1>";
		echo "<p>Username taken, please try a new one</p>";
	}
	else
	{
		//Execute Query:
		$registerquery=mysql_query("INSERT INTO members (`Username`, `FName`, `LName`, `Email`, `PhoneNo`, `Password`) VALUES ('".$username."', '".$fName."', '".$lName."', '".$email."', '".$phone."', '".$password."')");
		//If query successful:
		if($registerquery)
		{
			echo "<h1>Your Account has been created</h1>";
			echo "<p>Your account was successfully created. Please <a href=\"login.php\">click here to login</a>.</p>";
		}
		//Otherwise:
		else
		{
			echo "<h1>Registration Failed</h1>";
			echo "<p>Please try again</p>";
		}
	}
}
else
{
	?>
<!--
Begin HTML:
-->
	<h1>Register</h1>
	<p>Please enter your details below to register.</p>
	<form method="post" action="register.php" name="registerform" id="registerform">
	<fieldset>
		<label for = "username">Username:</label><input type="text" name="username" id="username"/><br/>
		<label for = "fName">First Name:</label><input type="text" name="fName" id="fName"/><br/>
		<label for = "lName">Last Name:</label><input type="text" name="lName" id="lName"/><br/>
		<label for = "email">Email:</label><input type="text" name="email" id="email"/><br/>
		<label for = "phone">Phone:</label><input type="text" name="phone" id="phone"/><br/>
		<label for = "password">Password:</label><input type="password" name="password" id="password"/>
		<input type="submit" name="register" id="register" value="Register" />
	</fieldset>
	</form>
<?php
}
?>
</div>
</body>
</html>
		