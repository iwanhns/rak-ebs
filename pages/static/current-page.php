<?php
	$url = $_SERVER['REQUEST_URI'];
    $current = substr($url, 9, 5);

	if ($current == 'index') {
		$_SESSION['page'] = "dashboard";
		$_SESSION['subpage'] = "";
	} else if ($current == 'pages') {
    	$subpage = substr($url, 15, 6);
		if ($subpage == 'kelola') {
			$_SESSION['page'] = "kelola-tenant";
		} else if ($subpage == 'public') {
			$_SESSION['page'] = "login";
		}
	} else {
		//echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
		$_SESSION['page'] = "dashboard";
		$_SESSION['subpage'] = "";
	}
?>