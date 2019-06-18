<?php
include_once 'App/data/detail_data.php';
$login = isset($_SESSION['login']) ? true : false;
$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
$iduser = isset($_SESSION['id']) ? $_SESSION['id'] : false;
?>
<div class="col-10  mt-3 ml-auto mr-auto card">
	<?php if($query->num_rows>0): ?>
	<div class="row">
		<div class="col">
			<h2>Detail</h2>
			<?php if($login AND ($id == $iduser OR $user =='admin') ): ?>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
			Edit
			</button>
			<?php endif; ?>
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
				<?php if($login AND $user == 'admin'): ?>
				<form action="app/proses/ubahStatus_proses.php?id=<?=$id ?>" method="POST">
					<select class="form-control" name="status" style="display: inline-block;width: 50%;">
						<option value="Diproses">Diproses</option>
						<option value="Lulus">Lulus</option>
						<option value="Tidak Lulus">Tidak Lulus</option>
					</select>
					<input class="btn btn-primary" type="submit" name="update">
				</form>
				<?php else: ?>
				<li class="text-warning font-weight-bold"><?=$row['status']; ?></li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="col-3">
			<img src="http://localhost/PMB/App/dir/PP/<?=$row['pas_phot']; ?>" alt="profile" style="width: 100%;">
		</div>
	</div>
	<hr>
	<?php if($login AND ($id == $iduser OR $user =='admin') ): ?>
	<div class="row">
		<div class="col-6">
			<img src="http://localhost/PMB/App/dir/izajah/<?=$row['izajah']; ?>" alt="izajah" style="width: 100%;">
		</div>
		<div class="col-6">
			<img src="http://localhost/PMB/App/dir/KK/<?=$row['kartu_keluarga']; ?>" alt="KK" style="width: 100%;">
		</div>
		<?php endif; ?>
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
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalScrollableTitle">Ubah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="app/proses/ubahData_proses.php?id=<?=$id ?>" method="POST">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" value="<?=$row['nama']; ?>">
					</div>
					<div class="form-group">
						<label>Tempat Tangal lahir</label>
						<input type="date" class="form-control" name="tanggal" value="<?=$row['tgl_lahir']; ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?=$row['alamat']; ?>">
					</div>
					<div class="form-group">
						<label>Jurusan</label>
						<select class="form-control" name="jurusan">
							<option value="informatika">Informatika</option>
							<option value="sipil">Sipil</option>
							<option value="industri">Industri</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>