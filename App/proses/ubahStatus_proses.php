<?php 
include_once '../function/config.php';
$id = $_GET['id'];
$status = $_POST['status'];
mysqli_query($koneksi,"UPDATE pendaftar SET status = '$status' WHERE id = '$id'");
header("location: http://localhost/PMB/index.php?page=pendaftar");
?>