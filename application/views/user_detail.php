<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Detail User</h1>
    </div>
</div>
<!-- /.container-fluid -->

<div class="container-fluid bg-white py-3 mt-3">
    <div class="card-body px-0">
    <form class="form-horizontal" action="<?= base_url();?>tim/update_action" method="POST">
		<div class="card mb-4">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-md-4">Nama</label>
					<div class="col-md-8">
						<input class="form-control" name="nama_user" value="<?= $v['nama_user']; ?>">
						<input name="id_user" type="hidden" value="<?= $v['id_user'] ?>">
						<input name="email_user" type="hidden" value="<?= $v['email_user'] ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4">NIP</label>
					<div class="col-md-8">
						<input class="form-control" name="nip_user" value="<?= $v['nip_user'] ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4">No Telp</label>
					<div class="col-md-8">
						<input class="form-control" name="telepon_user" value="<?= $v['nip_user'] ?>">
					</div>
				</div>

				<?php if($this->session->userdata('userlogin')['role_user'] < 3): ?>
				<div class="form-group row">
					<label class="col-md-4">Role</label>
					<div class="col-md-3">
						<select class="form-control" name="role_user">
							<?php 
							foreach ($role as $r) : 
							$selected = '';
								if($v['role_user'] == $r['id_role']) $selected = 'selected';
							?>
								<option <?= 'value="'.$r['id_role'].'" '.$selected; ?>><?= $r['nama_role'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<?php endif; ?>

				<div class="form-group row">
					<div class="offset-md-4 col-md-8">
						<button id="btn-submit" type="submit" class="btn btn-primary">Simpan</button>
						<a href="<?= base_url().'tim/ganti_password/'.$v['id_user'] ?>" class="btn btn-warning">Ganti Password</a>
					</div>
				</div>
			</div>
		</div>
    </form>
    </div>

</div>