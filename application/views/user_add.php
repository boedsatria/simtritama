<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Tambah User</h1>
    </div>
</div>
<!-- /.container-fluid -->

<div class="container-fluid bg-white py-3 mt-3">
    <div class="card-body px-0">
    <form class="form-horizontal" action="<?= base_url();?>tim/add_action" method="POST">
		<div class="card mb-4">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-md-4">Nama</label>
					<div class="col-md-8">
						<input class="form-control" name="nama_user" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4">NIP</label>
					<div class="col-md-8">
						<input class="form-control" name="nip_user">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4">No Telp</label>
					<div class="col-md-8">
						<input class="form-control" name="telepon_user">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4">Email</label>
					<div class="col-md-8">
						<input class="form-control" name="email_user" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-4">Role</label>
					<div class="col-md-3">
						<select class="form-control" name="role_user">
							<?php foreach ($role as $r) : ?>
								<option value="<?= $r['id_role']; ?>"><?= $r['nama_role'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-4">Password</label>
					<div class="col-md-8">
						<input class="form-control" id="pass" type="password" name="password_user" value="" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4">Konfirmasi Password</label>
					<div class="col-md-8">
						<input class="form-control" id="pass_c" type="password" name="password_user" value="" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="offset-md-4 col-md-8 message"></label>
				</div>

				

				<div class="form-group row">
					<div class="offset-md-4 col-md-8">
						<button id="btn-submit" type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</div>
    </form>
    </div>

</div>