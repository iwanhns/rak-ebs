<?php
	class tenant {
		var $table1	= "loker";
		var $table2 = "tenant";
		var $dir	= "../../config/database.php";

		function update ($finish_date, $id_tenant) {
			include $this->dir;
			$data = mysqli_query($connection, "UPDATE " . $this->table2 . " SET finish_date='$finish_date' WHERE id_tenant='$id_tenant'");
			session_start();
			if ($data) $_SESSION['message'] = "edit-success";
			else $_SESSION['message'] = "edit-failed";
		}

		function delete ($id_tenant, $id_loker, $status1, $status2) {
			include $this->dir;
			$data1 = mysqli_query($connection, "UPDATE " . $this->table1 . " SET status='$status1' WHERE id_loker='$id_loker'");
			$data2 = mysqli_query($connection, "UPDATE " . $this->table2 . " SET status='$status2' WHERE id_tenant='$id_tenant'");
			session_start();
			if ($data1 && $data2) $_SESSION['message'] = "delete-success";
			else $_SESSION['message'] = "delete-failed";
		}

		function show() {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table2 . " WHERE status='Active'");
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}
	}
?>