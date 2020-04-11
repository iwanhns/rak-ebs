<?php
	class loker {
		var $table1	= "loker";
		var $table2 = "tenant";
		var $dir1	= "../../config/database.php";
		var $dir2	= "config/database.php";

		function store ($nim, $name, $email, $finish_date, $status1, $status2, $id_loker) {
			include $this->dir1;
			$data1 = mysqli_query($connection, "UPDATE " . $this->table1 . " SET status='$status1' WHERE id_loker='$id_loker'");
			$data2 = mysqli_query($connection, "INSERT INTO " . $this->table2 . "(nim, name, email, finish_date, status, id_loker) VALUES('$nim', '$name', '$email','$finish_date', '$status2', '$id_loker')");
			session_start();
			if ($data1 && $data2) $_SESSION['message'] = "save-success";
			else $_SESSION['message'] = "save-failed";
		}

		function show() {
			include $this->dir2;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table1);
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}
	}
?>