<?php
//Start a session for new user, if session has already been started then this function is ignored.
session_start();
//Database Configuration:
$dbhost='127.0.0.1';
$dbname='thefactory';
$dbuser='root';
$dbpass='';
//Connect to server:
mysql_connect($dbhost,$dbuser,$dbpass) or die ("A MySQL Error has occurred: " . mysql_error());
//Connect to database:
mysql_select_db($dbname)or die ("A MySQL Error has occurred: " . mysql_error());


?>