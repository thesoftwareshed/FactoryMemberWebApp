<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
	include_once "conn.php"; 

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Test JavaScript Function --> 
<script type="text/javascript">
function kill_session(){
	alert("hello world");
}
</script>

<!-- Test AJAX Function --> 
<script type="text/javascript">
function killSession (){
	$.ajax( { type: 'POST',
			  data: {},
			  url: 'conn'
</script>


<div class="w3-container w3-teal">
<h5>The Factory</h5>
<?php
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
	{
		echo "<h6><font color='black'>Logged in: </font>".$_SESSION['Username']."<font color='black'> Credit Amount: </font>".$_SESSION['Credits'];
		echo "<h6><a href=\"logout.php\">Logout</a></h6>";
	}
	else
	{
		echo "<h6><a href=\"login.php\">Login</a></h6>";
	}
 ?>
</div>