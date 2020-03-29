<?php 
	$host		= "localhost";
	$username	= "root";
	$pass 		= "";
	$database 	= "rak_library";
	$connection	= mysqli_connect($host, $username, $pass);
	mysqli_select_db($connection, $database);
?>