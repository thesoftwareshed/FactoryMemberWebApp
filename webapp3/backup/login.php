<!-- 
Code based on tutorial @ https://code.tutsplus.com/tutorials/user-membership-with-php--net-1523
Check session is started or not: -->
<?php
	//Include mySQL config php file for connection:
	include "conn.php"; 
	include "header.php";
	include "sidebar.php"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
<title>Login</title>
</head>
<body>
<div id="main" style="margin-left:25%">>
<?php
//Is the user already logged in:
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	?>
	<h1>You are already logged in</h1>
	<?php
}
//If the user has already submitted there login details:
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	//Escape recognised mysql command to prevent injection, as well as apply MD5 encrytpion to 
	//the password for security. 
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5(mysql_real_escape_string($_POST['password']));
	
	//Check to see if the username and password match with a row in the table:
	$checklogin = mysql_query("SELECT * FROM members WHERE Username = '".$username."' AND Password = '".$password."'");
	
	//If the user exists (there is a row in the database):
	if(mysql_num_rows($checklogin)==1)
	{
		$row = mysql_fetch_array($checklogin);
		$email = $row['Email'];
		$credits = $row['Credit'];
		
		
		$_SESSION['Username']=$username;
		$_SESSION['EmailAddress']=$email;
		$_SESSION['Credits']=$credits;
		$_SESSION['LoggedIn']=1;
		
		echo "<h1>Success</h1>";
		
		header('Location: index.php');
		
 	}
	else
	{
		echo"<h1>Error</h1>";
		echo "<p>Account not found!<a href=\"login.php\"> Click here to try again</a>.</p>";
	}
}
else
{
	?>
	<h1>Member Login</h1>
	<p>Welcome to The Factory. Please login below, or <a href="register.php">register</a>.</p>
	<form method ="post" action="login.php" name="loginform" id="loginform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" id="username"/><br/>
		<label for="password">Password:</label><input type="password" name="password" id="password"/><br/>
		<input type="submit" name="login" id="login" value="Login"/>
	</fieldset>
	</form>
	<?php
}
?>
</div>
</body>
</html>
















