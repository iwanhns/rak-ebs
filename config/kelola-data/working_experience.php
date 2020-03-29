<?php
	class working_experience {
		var $table	= "working_experience";
		var $dir	= "../../config/database.php";
	 
		function store ($nama_working_experience, $posisi, $tahun_masuk, $tahun_berakhir, $upload_file, $deskripsi, $id_user) {
			include $this->dir;
			$data = mysqli_query($connection, "INSERT INTO " . $this->table . "(nama_working_experience, posisi, tahun_masuk, tahun_berakhir, upload_file, deskripsi, id_user) VALUES('$nama_working_experience', '$posisi', '$tahun_masuk', '$tahun_berakhir', '$upload_file', '$deskripsi', '$id_user')");
			session_start();
			if ($data) $_SESSION['message'] = "save-success";
			else $_SESSION['message'] = "save-failed";
		}

		function update ($id_working_experience, $nama_working_experience, $posisi, $tahun_masuk, $tahun_berakhir, $upload_file, $deskripsi) {
			include $this->dir;
			$data = mysqli_query($connection, "UPDATE " . $this->table . " SET nama_working_experience='$nama_working_experience', posisi='$posisi', tahun_masuk='$tahun_masuk', tahun_berakhir='$tahun_berakhir', upload_file='$upload_file', deskripsi='$deskripsi' WHERE id_working_experience='$id_working_experience'");
			session_start();
			if ($data) $_SESSION['message'] = "edit-success";
			else $_SESSION['message'] = "edit-failed";
		}

		function delete ($id_working_experience) {
			include $this->dir;
			$data = mysqli_query($connection, "DELETE FROM " . $this->table . " WHERE id_working_experience='$id_working_experience'");
			session_start();
			if ($data) $_SESSION['message'] = "delete-success";
			else $_SESSION['message'] = "delete-failed";
		}

		function show() {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table);
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}

		function search_by_id ($id_working_experience) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE id_working_experience='$id_working_experience'");
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}
		
		function search_field_by_id ($id_working_experience, $field) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field' FROM " . $this->table . " WHERE id_working_experience='$id_working_experience'");
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}

		function search_by_field ($field, $param) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE $field='$param'");
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}

		function search_field_by_field ($field1, $field2, $param) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field1' FROM " . $this->table . " WHERE $field2='$param'");
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}
	}
?>