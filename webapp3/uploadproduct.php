<!-- File Upload code inspired by 
	https://www.w3schools.com/php/php_file_upload.asp
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
	<form action="uploader.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</form>
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
