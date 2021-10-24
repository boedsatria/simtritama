<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Tambah Material</h1>
    </div>
</div>
<!-- /.container-fluid -->

<div class="container-fluid bg-white py-3 mt-3">
    <div class="card-body px-0">
    <form class="form-horizontal" action="<?= base_url();?>material/add_action" method="POST">
		<div class="card mb-4">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-md-4">Nama Material</label>
					<div class="col-md-8">
						<input class="form-control" name="nama_material" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4">Satuan</label>
					<div class="col-md-8">
						<input class="form-control" name="satuan_material">
					</div>
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