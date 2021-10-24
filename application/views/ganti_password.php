<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Ganti Password</h1>
    </div>
</div>
<!-- /.container-fluid -->

<div class="container-fluid bg-white py-3 mt-3">
    <div class="card-body px-0">
		<form class="form-horizontal" action="<?php echo base_url();?>tim/update_action" method="POST">
			<div class="card mb-4">
				<div class="card-body">

					<input name="email_user" type="hidden" value="<?php echo $v['email_user']; ?>">
						
					<div class="form-group row">
						<label class="col-md-4">Password</label>
						<div class="col-md-8">
							<input class="form-control" id="pass" type="password" name="password_user" value="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Konfirmasi Password</label>
						<div class="col-md-8">
							<input class="form-control" id="pass_c" type="password" name="password_user" value="">
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