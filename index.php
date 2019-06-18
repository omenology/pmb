<?php
session_start();

$login = isset($_SESSION['login']) ? true : false;
$page = isset($_GET['page']) ? $_GET['page'] : false;

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PMB</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php">PMB</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=pendaftar">Pendaftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=about">About</a>
					</li>
				</ul>
			</div>
			<form action="" class="form-inline" action="GET">
				<input type="hidden" name="page" value="detail">
				<input name="id" class="form-control mr-sm-2" type="search" placeholder="ID Pendafar" aria-label="Search">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
			</form>
		</nav>
		<div class="container-fluid">
			<?php if ($page) {
				if(file_exists($page.'.php')) {
					include_once $page.'.php';
				}else{
					header("location: index.php");
				}
			}else{ ?>
			<div class="col-12">
				<div class="jumbotron mt-3">
					<h1 class="display-4">Hello, Selamat Datang di Website Kami</h1>
					<p class="lead">Website ini merupakan tempat pendaftaran Calon Mahasiwa dan Mahasiswi yang akan mendaftar di kampus kami. Untuk mendaftar silahkan klik tombol dibawah</p>
					<p>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#persyaratan" aria-expanded="false" aria-controls="collapseExample">
						Persyaratan
						</button>
						<a class="btn btn-primary" href="index.php?page=daftar">
							Daftar
						</a>
					</p>
					<div class="collapse" id="persyaratan">
						<div class="card card-body">
							<ul class="list-unstyled">
								<li class="font-weight-bold">Persyaratan Umum</li>
								<ul>
									<li>Lulusan SMA / SMK / MAN</li>
									<li>Lampiran izajah / surat keterangan lulus</li>
									<li>Lampiran Kartu Keluarga</li>
									<li>Lampiran Pas photo</li>
									<li>Khusus Mahasiswa Transfer(Pindahan) ditambah fotocopy Ijazah jenjang Diploma dan Transkrip Nilai yang dilegalisir dari Perguruan Tinggi Asal</li>
									<li>Untuk mahasiswa Transfer(Pindahan) yang belum selesai studi tingkat Diploma / Sarjana, wajib melampirkan Surat Keterangan Pindah dari Perguruan Tinggi Asal</li>
								</ul>
								<li class="font-weight-bold">Persyaratan Jalur Prestasi</li>
								<ul>
									<li>Bidang Akademik : Rangking 1-10(Lampirkan FotoCopy Rapor kelas X-XII)</li>
									<li>Non Akademik (Seni & Olahraga)  : Juara Tingkat kota, Provinsi atau Nasional</li>
								</ul>
							</ul>
						</div>
					</div>
					<hr class="my-4">
					<?php if ($login): ?>
					<p class="mt-4 text-info font-weight-lighter">Selamat Datang Admin, <a href="App/proses/logout_proses.php" class="">Logout disini</a</p>
					<?php else : ?>
					<p class="mt-4 text-info font-weight-lighter">*Jika anda sudah mendaftar, <a href="index.php?page=login" class="">Login disini</a></p>
					<?php endif; ?>
				</div>
			</div>
			<?php } ?>
		</div>
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>