<?php 
include_once '../function/config.php';
include_once '../data/detail_data.php';

unlink("../dir/izajah/".$row['izajah']);
unlink("../dir/KK/".$row['kartu_keluarga']);
unlink("../dir/PP/".$row['pas_phot']);

mysqli_query($koneksi,"DELETE FROM lampiran WHERE id = '$id'");
mysqli_query($koneksi,"DELETE FROM pendaftar WHERE id = '$id'");

header("location: http://localhost/PMB/index.php?page=pendaftar");