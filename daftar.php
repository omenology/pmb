<?php 

$login = isset($_SESSION['login']) ? true : false;
if ($login) header("location: http://localhost/PMB/index.php?page=pendaftar");

?>
<div class="col-12 mt-5 d-flex justify-content-center">
    <div class="card mb-3" style="width: 90%;">
        <div class="row no-gutters">
            <div class="col-md-3 overflow-hidden">
                <img src="App/dir/img/startup_office_desk-wallpaper-480x800.jpg" class="card-img" style="height: 100%;width: 125%;" alt="...">
            </div>
            <div class="col-md-9">
                <div class="card-body overflow-hidden">
                    <h5 class="card-title">Form Pendaftaran</h5>
                    <form action="app/proses/daftar_proses.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jurusan</label>
                                <select class="form-control" name="jurusan">
                                    <option value="informatika">informatika</option>
                                    <option value="industri">industri</option>
                                    <option value="sipil">sipil</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="Date" class="form-control" name="tgl-lahir">
                        </div>
                        <div class="form-group">
                            <label>Tempat Tinggal</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="alamat">
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label class="font-weight-bold">Lampiran File</label>
                            </div>
                            <div class="col-4 overflow-hidden">
                                <label>Izajah / Keterangan Lulus</label>
                                <input type="file" name="izajah">
                            </div>
                            <div class="col-4 overflow-hidden">
                                <label>Kartu Keluarga</label>
                                <input type="file" name="kk">
                            </div>
                            <div class="col-4 overflow-hidden">
                                <label>Pas photo</label>
                                <input type="file" name="pp">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="Email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>