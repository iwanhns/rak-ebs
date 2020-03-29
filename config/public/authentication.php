<?php
 	session_start(); 
	class authentication {
		var $table	= "user";
		var $dir	= "../../config/database.php";

		function login($email, $password) {
			session_start();
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE email='$email' AND password='$password'");
			$check = mysqli_num_rows($data);

			if($check > 0) {
				$d = mysqli_fetch_array($data);
				$_SESSION['user']  = $d['id_user'];
				$_SESSION['email'] = $d['email'];
				$_SESSION['nama']  = $d['nama'];
				$_SESSION['message'] = "login-success";
				header("location:../../index.php");
			} else {
				header("location:../../pages/public/login.php");
				$_SESSION['message'] = "login-failed";
			}
		}

		function logout() {
			include $this->dir;
			session_destroy();
 			session_start(); 
			$_SESSION['message'] = "logout-success";
			header("location:../../index.php");
		}
	}
?>