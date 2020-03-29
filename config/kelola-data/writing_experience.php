<?php
	class writing_experience {
		var $table	= "writing_experience";
		var $dir	= "../../config/database.php";

		function store ($judul_karya, $nama_dosen, $nama_jurnal, $tahun, $volume, $halaman, $link, $upload_file, $kategori, $id_user) {
			include $this->dir;
			$data = mysqli_query($connection, "INSERT INTO " . $this->table . "(judul_karya, nama_dosen, nama_jurnal, tahun, volume, halaman, link, upload_file, kategori, id_user) VALUES('$judul_karya', '$nama_dosen','$nama_jurnal', '$tahun', '$volume', '$halaman', '$link', '$upload_file', '$kategori', '$id_user')");
			session_start();
			if ($data) $_SESSION['message'] = "save-success";
			else $_SESSION['message'] = "save-failed";
		}

		function update ($id_writing_experience, $judul_karya, $nama_dosen, $nama_jurnal, $tahun, $volume, $halaman, $link, $upload_file, $kategori) {
			include $this->dir;
			$data = mysqli_query($connection, "UPDATE " . $this->table . " SET judul_karya='$judul_karya', nama_dosen='$nama_dosen', nama_jurnal='$nama_jurnal', tahun='$tahun', volume='$volume', halaman='$halaman', link='$link', upload_file='$upload_file', kategori='$kategori' WHERE id_writing_experience='$id_writing_experience'");
			session_start();
			if ($data) $_SESSION['message'] = "edit-success";
			else $_SESSION['message'] = "edit-failed";
		}

		function delete ($id_writing_experience) {
			include $this->dir;
			$data = mysqli_query($connection, "DELETE FROM " . $this->table . " WHERE id_writing_experience='$id_writing_experience'");
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

		function search_by_id ($id_writing_experience) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE id_writing_experience='$id_writing_experience'");
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}
		
		function search_field_by_id ($id_writing_experience, $field) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field' FROM " . $this->table . " WHERE id_writing_experience='$id_writing_experience'");
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