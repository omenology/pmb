<?php
include_once 'App/data/pendaftar_data.php';
$i = 1;
?>
<div class="col-12 mt-3">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">ID</th>
				<th scope="col">Nama</th>
				<th scope="col">Jurusan</th>
				<th scope="col" class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pendaftar as $row ) :?>
			<tr>
				<th scope="row"><?= $i; ?></th>
				<td><?= $row['id']; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['jurusan']; ?></td>
				<td class="d-flex justify-content-center align-items-center">
					<a href="index.php?page=detail&id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
					<?php if($login): ?>
					<a href="App/proses/hapusPendaftar_proses.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm ml-1">Hapus</a>
					<?php endif; ?>
				</td>
			</tr>
			<?php $i++; endforeach; ?>
		</tbody>
	</table>
</div>