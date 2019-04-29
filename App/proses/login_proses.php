<?php 

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin") {
	session_start();
	$_SESSION['login'] = true;
	header("location: http://localhost/PMB/index.php?page=pendaftar");
}else{
	header("location: http://localhost/PMB/index.php?page=login&error=true");
}
