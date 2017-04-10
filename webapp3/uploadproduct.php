<!-- File Upload code inspired by 
	http://www.tizag.com/phpT/fileupload.php?MAX_FILE_SIZE=100000&uploadedfile=
-->
<?php
	include_once "conn.php"; 
	include "header.php";
	include "sidebar.php"
?>
<body>
<div id="main" style="margin-left:25%">
<h1>SHOP</h1>

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
	if ($_SESSION['FMember']==0){
	echo"YOU ARE NOT A FACTORY MEMBER!<p>Contact an administrator to request permission.</p>";}
	else{ ?>
	<form enctype="multipart/form-data" action="uploader.php" method="POST">
	<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	Choose a file to upload: <input name="uploadedfile" type="file" /><br />
	<input type="submit" value="Upload File" />
	<?php
	}
}
else
{
	echo "Please login to continue!";
}
	?>

</form>
</div>
</body>
