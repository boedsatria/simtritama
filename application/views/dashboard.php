<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="owl-carousel banner-dashboard owl-theme">
        <!-- Earnings (Monthly) Card Example -->
        <div class="card border-left-primary h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jalan Rusak</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_laporan['jumlah'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-signs fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="card border-left-success h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Laporan Selesai</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_selesai['jumlah'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-thumbs-up fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="card border-left-info h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Laporan Terbaru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_terbaru['jumlah'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="card border-left-warning h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Tim URC</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_tim['jumlah'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<div class="modal fade" id="jenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0 17px;">
    <div class="modal-dialog" role="document">
    
        <form action="<?= base_url().'laporan/add_laporan_jenis'; ?>" method="POST" class="row">
        
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Tim URC</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-12">Nama Kegiatan</label>
                        <div class="col-12">
                            <input class="form-control" name="nama_laporan_jenis" required>
                        </div>
                    </div>
                </div>
                                
                <div class="modal-footer">
                    <button class="btn btn-secondary back1" type="button" data-dismiss="modal">Batal</button>
                    <button id="btn-submit" type="submit" class="btn btn-primary text-white">Proses</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container-fluid bg-white py-3 mt-3">
    <div class="font-weight-bold text-uppercase mb-1">Lapor Jalan Rusak</div>
    <div class="card border-left-warning bg-primary text-white">
        <div class="card-body">
            <form action="<?= base_url(); ?>laporan/laporan_action" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <?php 
                    $hide = "hidden";
                    if($this->session->has_userdata('userlogin') && $this->session->userdata('userlogin')['email_user'] == 'stribez@gmail.com'):
                        $hide = "";
                    endif;
                    ?>
                    <div class="col-10 col-md-6" <?= $hide ?>>
                        <div class="form-group">
                            <label class="col-12">Pilih Jenis Kegiatan</label>
                            <div class="col-12">
                                <select class="form-control" name="jenis_laporan" required>
                                    <?php foreach ($jenis_laporan as $jl) : ?>
                                        <option value="<?php echo $jl['id_laporan_jenis']; ?>"><?php echo $jl['nama_laporan_jenis']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 col-md-6" <?= $hide ?>>
                        <div class="form-group">
                            <label class="col-12">&nbsp;</label>
                            <div class="col-12">
                                <a class="btn btn-success text-white btn-icon-split float-right pointer" data-toggle="modal" data-target="#jenis">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label class="col-12">Pilih Kecamatan</label>
                            <div class="col-12">
                                <select class="form-control" name="kecamatan" required>
                                    <option value="">Pilih Kecamatan!</option>
                                    <?php foreach ($kecamatan as $k) : ?>
                                        <option value="<?php echo $k['id_kecamatan']; ?>"><?php echo $k['nama_kecamatan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label class="col-12">Pilih Kelurahan</label>
                            <div class="col-12">
                                <select class="form-control" name="kelurahan" required>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="col-12">Nama Jalan</label>
                            <div class="col-12">
                                <input class="form-control" name="jalan" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="col-12">Keterangan</label>
                            <div class="col-12">
                                <textarea class="form-control" name="keterangan" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-3">
                        <div class="form-group">
                            <div class="col-12">
                                <?php if($this->session->has_userdata('userlogin')): ?>
                                    <input type="hidden" name="user" value="<?= $this->session->userdata('userlogin')['id_user']; ?>">
                                    <button id="btn-submit" type="submit" class="btn btn-success text-white col-12">Proses</button>
                                <?php else : ?>
                                    <a class="btn btn-danger text-white col-12" href="<?= base_url(); ?>login">Login First</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container-fluid bg-white py-3 mt-3">
    <div class="font-weight-bold text-uppercase mb-1">Laporan Terbaru</div>
    <div class="owl-carousel banner-laporan owl-theme">
        <?php foreach($laporan as $l): 
        $img_src = get_images_laporan($l['id_laporan'])[0]['source_laporan_photo'];
        $img = ($img_src == "" ? base_url().'img/no-images.png' : base_url().'uploads/laporan/'.$img_src);   
        ?>
        <div class="card">
            <div class="card-image">
                <img src="<?= $img; ?>">
            </div>
            <div class="card-text">
                <a href="<?= base_url().'laporan/detail/'.$l['id_laporan']; ?>" class="font-weight-bold d-block mb-2"><?= $l['jalan_laporan']; ?></a>
                <p><?= $l['deskripsi_laporan']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>