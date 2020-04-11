<?php 
	session_start();
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'dashboard':
				$_SESSION['page'] = "dashboard";
				header('location:index.php');
				break;
			case 'kelola-tenant':
				$_SESSION['page'] = "kelola-tenant";
				header('location:pages/kelola-data/tenant.php');
				break;
			case 'login':
				header('location:pages/public/login.php');
				break;					
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	} else {
		header('location:index.php');
		$_SESSION['page'] = "dashboard";
	}
?>