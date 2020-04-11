<?php 
	$page	= $_GET['page'];
	$action = $_GET['action'];
	$dir = "../../config/kelola-data/";

	if ($page == "dashboard") {
	 	include $dir . 'loker.php';
		$do = new loker();
	 	$do->store($_POST['nim'], $_POST['name'], $_POST['email'], $_POST['finish_date'], $_POST['status1'], $_POST['status2'], $_POST['id_loker']);
	 	header("location:../../index.php");
	}
	else if ($page == "tenant") {
	 	include $dir . 'tenant.php';
		$do = new tenant();

	 	if ($action == "update") {
	 		$do->update($_POST['finish_date'], $_POST['id_tenant']);
	 		header("location:tenant.php");
	 	} elseif ($action == "delete") {
	 		$do->delete($_POST['id_tenant'], $_POST['id_loker'], $_POST['status1'], $_POST['status2']);
			header("location:tenant.php");
	 	}
	}
?>