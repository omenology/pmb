<?php 
include_once '../function/config.php';

$nama = $_POST['nama'];
$tgl = $_POST['tgl-lahir'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$password = $_POST['password'];

$file = uploaded();

	if($file){
		mysqli_query($koneksi,"INSERT INTO pendaftar (nama, tgl_lahir, alamat, jurusan, email, password) VALUES ('$nama','$tgl','$alamat','$jurusan','$email','$password')");

		$query = mysqli_query($koneksi,"SELECT * FROM pendaftar ORDER BY id DESC");
		$query = mysqli_fetch_assoc($query);

		mysqli_query($koneksi,"INSERT INTO lampiran (id, izajah, kartu_keluarga, pas_phot) VALUES ('$query[id]','$file[izajah]','$file[kk]','$file[pp]')");
		
		header("location: http://localhost/PMB/index.php?page=pendaftar");
	}

	function uploaded(){
		$fileName['izajah'] = $_FILES['izajah']['name'];
		$fileName['kk'] = $_FILES['kk']['name'];
		$fileName['pp'] = $_FILES['pp']['name'];
		$error[] = $_FILES['izajah']['error'];
		$error[] = $_FILES['kk']['error'];
		$tmpName['izajah'] = $_FILES['izajah']['tmp_name'];
		$tmpName['kk'] = $_FILES['kk']['tmp_name'];
		$tmpName['pp'] = $_FILES['pp']['tmp_name'];

		if($error[0] == 4 OR $error[1] == 4){
			return false;
		}

		$ekstensiFile = explode(".", $fileName['izajah']);
		$ekstensiFile = strtolower(end($ekstensiFile));
		$namaFileBaru['izajah'] = uniqid().".".$ekstensiFile;
		move_uploaded_file($tmpName['izajah'], "../dir/izajah/".$namaFileBaru['izajah']);

		$ekstensiFile = explode(".", $fileName['kk']);
		$ekstensiFile = strtolower(end($ekstensiFile));
		$namaFileBaru['kk'] = uniqid().".".$ekstensiFile;
		move_uploaded_file($tmpName['kk'], "../dir/KK/".$namaFileBaru['kk']);

		$ekstensiFile = explode(".", $fileName['pp']);
		$ekstensiFile = strtolower(end($ekstensiFile));
		$namaFileBaru['pp'] = uniqid().".".$ekstensiFile;
		move_uploaded_file($tmpName['pp'], "../dir/PP/".$namaFileBaru['pp']);

		return $namaFileBaru;
	}