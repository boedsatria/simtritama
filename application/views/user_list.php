<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800 w-100">
            User
            <a class="btn btn-sm btn-primary text-white btn-icon-split float-right" href="<?= base_url(); ?>tim/add">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </h1>
    </div>
</div>
<!-- /.container-fluid -->

<div class="container-fluid bg-white py-3 mt-3">
    <div class="card-body px-0">
        <div class="row">
            <div class="col-12">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="40%">Nama Pegawai</th>
                                        <th width="40%">Jabatan</th>
                                        <th width="40%">No Telp</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($user as $k => $v) : ?>
                                    <tr>
                                        <td><?= $k+1; ?></td>
                                        <td><?= $v['nama_user']; ?></td>
                                        <td><?= $v['nama_role']; ?></td>
                                        <td><?= $v['telepon_user']; ?></td>
                                        <td>
                                            <a href="<?= base_url().'tim/detail/'.$v['id_user']; ?>" class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#userDel<?= $v['id_user']; ?>">
                                                <i class="fas fa-trash"></i>
                                            </a>
                            
                                            <!-- Delete Satuan Modal-->
                                            <div class="modal fade" id="userDel<?= $v['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="Label<?= $v['id_user']; ?>" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">Delete this data <strong><?= $v['nama_user']; ?></strong>?</div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="button" data-dismiss="modal">No</button>
                                                            <a href="<?= base_url().'tim/hapus/'.$v['id_user']; ?>" class="btn btn-danger text-white modal-del">Yes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

</div>