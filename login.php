<?php 
$error = isset($_GET['error']) ? true : false;
if ($login) {
	header("location: http://localhost/PMB/index.php?page=pendaftar");
}
?>
<div class="col-6 pos">
	<form action="App/proses/login_proses.php" method="POST">
		<label class="col-form-label font-weight-bolder">Login</label>
		<hr class="my-4">
		<?php if($error): ?>
		<p class="alert-danger">username atau password salah !!!</p>
		<?php endif; ?>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
		</div>
		<div class="form-group row d-flex justify-content-center">
			<button type="submite" class="btn btn-primary">Login</button>
		</div>
	</form>
</div>