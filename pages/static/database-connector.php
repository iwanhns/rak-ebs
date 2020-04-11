<?php
	$dir1 = "../../config/kelola-data/";
	$dir2 = "config/kelola-data/";
    if($_SESSION['page'] == "kelola-tenant") {
	    include $dir1 . 'tenant.php';
		$db 	= new tenant();
		$table	= 'tenant';
	} else {
	   	include $dir2 . 'loker.php';
		$db 	= new loker();
		$table	= 'loker';
	}
?>