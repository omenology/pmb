<?php
include_once 'App/function/config.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM pendaftar JOIN lampiran ON pendaftar.id = lampiran.id WHERE pendaftar.id = '$id'");
$row = mysqli_fetch_assoc($query);