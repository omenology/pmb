<?php 

include_once '../function/config.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM `pendaftar` WHERE email = '$email' AND password = '$password'");
;

if ($email == "admin" && $password == "admin") {
	$_SESSION['login'] = true;
	$_SESSION['user'] = 'admin';
	header("location: http://localhost/PMB/index.php?page=pendaftar");
}elseif (mysqli_num_rows($query)>0) {
	$_SESSION['login'] = true;
	$_SESSION['user'] = 'user';
	$row = mysqli_fetch_assoc($query);
	$_SESSION['id'] = $row['id'];
	header("location: http://localhost/PMB/index.php?page=detail&id=$row[id]");
}else{
	header("location: http://localhost/PMB/index.php?page=login&error=true");
}
