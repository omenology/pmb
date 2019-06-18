<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "PMB";
$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");

define('BASE_URL', 'http://localhost/PMB/');