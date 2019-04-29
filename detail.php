<?php 
include_once 'App/data/detail_data.php';
?>
<div class="col-10  mt-3 ml-auto mr-auto card">
	<?php if($query->num_rows>0): ?>
	<div class="row">
		<div class="col">
			<h2>Detail</h2>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-3">
			<ul class="list-unstyled">
				<li>Nama Lengkap</li>
				<li>Tanggal Lahir</li>
				<li>Temapt Tinggal</li>
				<li>Jurusan</li>
				<li>Status</li>
			</ul>
		</div>
		<div class="col-1">
			<ul class="list-unstyled">
				<li>:</li>
				<li>:</li>
				<li>:</li>
				<li>:</li>
				<li>:</li>
			</ul>
		</div>
		<div class="col-5">
			<ul class="list-unstyled">
				<li><?=$row['nama']; ?></li>
				<li><?=$row['tgl_lahir']; ?></li>
				<li><?=$row['alamat']; ?></li>
				<li><?=$row['jurusan']; ?></li>
				<li class="text-warning font-weight-bold"><?=$row['status']; ?></li>
			</ul>
		</div>
		<div class="col-3">
			<img src="http://localhost/PMB/App/dir/PP/<?=$row['pas_phot']; ?>" alt="profile" style="width: 100%;">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-6">
			<img src="http://localhost/PMB/App/dir/izajah/<?=$row['izajah']; ?>" alt="izajah" style="width: 100%;">
		</div>
		<div class="col-6">
			<img src="http://localhost/PMB/App/dir/KK/<?=$row['kartu_keluarga']; ?>" alt="KK" style="width: 100%;">
		</div>
	</div>
	<?php else : ?>
	<div class="row mt-5">
		<div class="col">
			<h3>Maaf Id tidak ditemukan, mungkin anda belum mendaftar.</h2>
			<hr>
		</div>
	</div>
	<?php endif; ?>
</div>