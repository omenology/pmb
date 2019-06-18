<?php 
include_once '../function/config.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$tgl = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi,"UPDATE pendaftar SET nama = '$nama', tgl_lahir = '$tgl', jurusan = '$jurusan', alamat = '$alamat' WHERE id = '$id'");
header("location: http://localhost/PMB/index.php?page=detail&id=$id");
var_dump($id);