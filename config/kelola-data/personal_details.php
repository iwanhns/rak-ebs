<?php
	class personal_details {
		var $table	= "personal_details";
		var $dir	= "../../config/database.php";
	 
		function store ($nim, $nama, $tempat_lahir, $tanggal_lahir, $no_hp, $email, $alamat, $status_pernikahan, $prodi, $angkatan,$sosmed, $id_user) {
			include $this->dir;
			$data = mysqli_query($connection, "INSERT INTO " . $this->table . "(nim, nama, tempat_lahir, tanggal_lahir, no_hp,email, alamat, status_pernikahan, prodi, angkatan, sosmed, id_user) VALUES('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$no_hp', '$email', '$alamat', '$status_pernikahan', '$prodi', '$angkatan', '$sosmed', '$id_user')");
			session_start();
			if ($data) $_SESSION['message'] = "save-success";
			else $_SESSION['message'] = "save-failed";
		}

		function update ($id_personal_details, $nim, $nama, $tempat_lahir, $tanggal_lahir, $no_hp, $email, $alamat, $status_pernikahan, $prodi, $angkatan, $sosmed) {
			include $this->dir;
			$data = mysqli_query($connection, "UPDATE " . $this->table . " SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', no_hp='$no_hp', email='$email', alamat='$alamat', status_pernikahan='$status_pernikahan', prodi='$prodi', angkatan='$angkatan', sosmed='$sosmed' WHERE id_personal_details='$id_personal_details'");
			session_start();
			if ($data) $_SESSION['message'] = "edit-success";
			else $_SESSION['message'] = "edit-failed";
		}

		function delete ($id_personal_details) {
			include $this->dir;
			$data = mysqli_query($connection, "DELETE FROM " . $this->table . " WHERE id_personal_details='$id_personal_details'");
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

		function search_by_id ($id_personal_details) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE id_personal_details='$id_personal_details'");
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}
		
		function search_field_by_id ($id_personal_details, $field) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field' FROM " . $this->table . " WHERE id_personal_details='$id_personal_details'");
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