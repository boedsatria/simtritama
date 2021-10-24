<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Laporan <?= $v['nama_laporan_jenis']; ?></h1>
    </div>
</div>
<!-- /.container-fluid -->


<div class="container-fluid bg-white py-3 mt-3">
    <div class="timeline timeline-sm">

        <div class="timeline-item">
            <div class="timeline-item-marker">
                <div class="timeline-item-marker-text"><?= tgl_indo_short($v['dibuat_laporan']); ?></div>
                <div class="timeline-item-marker-indicator">
                    <a class="btn btn-sm bg-green btn-circle">
                        <i class="fas fa-check"></i>
                    </a>
                </div>
            </div>
            <div class="timeline-item-content">
                <div class="text-success font-weight-bold">Laporan Dibuat</div>
                <?= $v['deskripsi_laporan']; ?>
            </div>
        </div>

        <?php if($v['status_laporan'] == 2): ?>
        <div class="timeline-item">
            <div class="timeline-item-marker">
                <div class="timeline-item-marker-text"><?= tgl_indo_short($v['selesai_laporan']); ?></div>
                <div class="timeline-item-marker-indicator">
                    <a class="btn btn-sm btn-primary btn-circle">
                        <i class="fas fa-check"></i>
                    </a>
                </div>
            </div>
            <div class="timeline-item-content">
                <div class="text-primary font-weight-bold">Laporan Selesai</div>
                <?= $v['tindak_lanjut_laporan']; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if($v['status_laporan'] == 3): ?>
        <div class="timeline-item">
            <div class="timeline-item-marker">
                <div class="timeline-item-marker-text"><?= tgl_indo_short($v['selesai_laporan']); ?></div>
                <div class="timeline-item-marker-indicator">
                    <a class="btn btn-sm btn-danger btn-circle">
                        <i class="fas fa-check"></i>
                    </a>
                </div>
            </div>
            <div class="timeline-item-content">
                <div class="text-danger font-weight-bold">Revisi</div>
                <?= $v['tindak_lanjut_laporan']; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>

<div class="container-fluid bg-white py-3 mt-3">
    <div class="owl-carousel img-laporan owl-theme">
        <?php if (get_images_laporan($v['id_laporan'])[0]['source_laporan_photo'] != ""): ?>
            <?php foreach(get_images_laporan($v['id_laporan']) as $img): ?>
            <div class="owl-img">
                <img src="<?= base_url()."uploads/laporan/".$img['source_laporan_photo']; ?>">
                
                <?php if ($this->session->has_userdata('userlogin')): ?>
                    <?php if ($this->session->userdata('userlogin')['role_user'] < 3): ?>
                <br>
                <form method="POST" action="<?= base_url().'laporan/update_foto/'.$v['id_laporan']; ?>">
                    <div class="row">
                        <div class="col-6">
                            <select class="form-control" name="status_laporan_photo">
                                <option value="0"></option>
                                <option value="1" <?= ($img['status_laporan_photo'] == 1 ? "selected" : "") ?>>0%</option>
                                <option value="2" <?= ($img['status_laporan_photo'] == 2 ? "selected" : "") ?>>50%</option>
                                <option value="3" <?= ($img['status_laporan_photo'] == 3 ? "selected" : "") ?>>100%</option>
                            </select>
                        </div>
                        <div class="col-3 pl-0">
                            <button class="btn btn-primary btn-block" type="submit">Set</button>
                            <input type="hidden" name="id_photo_ai" value="<?= $img['id_photo_ai']; ?>">
                        </div>
                        <div class="col-3 pl-0">
                            <a class="btn btn-danger btn-block" href="<?= base_url().'laporan/delete_foto/'.$img['id_photo_ai'].'/'.$v['id_laporan']; ?>">Del</a>
                        </div>
                    </div>
                </form>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if ($this->session->has_userdata('userlogin')): ?>

            <?php if ($this->session->userdata('userlogin')['role_user'] < 3): ?>
                <form action="../upload_images/<?= $v['id_laporan'].'/'.$this->session->userdata('userlogin')['id_user']; ?>" class="dropzone mt-3" id="uploadFiles">
                    <div class="dz-message" data-dz-message><span class="fa fa-2x fa-camera"></span></div>
                </form>
            <?php endif; ?>

            <?php if ($this->session->userdata('userlogin')['role_user'] > 3): ?>
                <?php if ($v['user_laporan'] == $this->session->userdata('userlogin')['id_user'] && $v['status_laporan'] == 1): ?>
                <form action="../upload_images/<?= $v['id_laporan'].'/'.$this->session->userdata('userlogin')['id_user']; ?>" class="dropzone mt-3" id="uploadFiles">
                    <div class="dz-message" data-dz-message><span class="fa fa-2x fa-camera"></span></div>
                </form>
                <?php endif; ?>
            <?php endif; ?>

        <?php endif; ?>
    </div>

    <div class="mt-3">
        <h5 class="h5 text-gray-800 font-weight-bold">Detail Pekerjaan</h5>
        <span class="badge <?= $v['warna_status']; ?> mb-3"><?= $v['nama_status']; ?></span> | <span class="text-sm"><i class="fa fa-user"></i> <?= $v['nama_user']; ?></span>

        <div class="detail text-sm">
            <p class="mb-0 font-weight-bold"><?= $v['jalan_laporan']; ?></p>
            <p>Kecamatan <?= $v['nama_kecamatan']; ?> Kelurahan <?= $v['nama_kelurahan']; ?></p>

            <?php if($v['deskripsi_laporan'] != ""): ?>
                <p><strong>Deskripsi Laporan: </strong><br><?= $v['deskripsi_laporan']; ?></p>
            <?php endif; ?>

            <?php if($v['tindak_lanjut_laporan'] != ""): ?>
                <p><strong>Tindak Lanjut: </strong><br><?= $v['tindak_lanjut_laporan']; ?></p>
            <?php endif; ?>

            <?php if($v['keterangan_laporan'] != ""): ?>
                <p><strong>Keterangan : </strong><br><?= $v['keterangan_laporan']; ?></p>
            <?php endif; ?>
        </div>

    </div>
    
</div>


<?php if($this->session->has_userdata('userlogin')): ?>
    <?php if($this->session->userdata('userlogin')['role_user'] < 3): ?>

        <div class="container-fluid bg-white py-3 mt-3">
            
            <h5 class="h5 text-gray-800 font-weight-bold">
                Tim URC
                <a class="btn btn-sm btn-primary text-white btn-icon-split float-right pointer" data-toggle="modal" data-target="#tim">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Tim</span>
                </a>
            </h5>

            <div class="modal fade" id="tim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0 17px;">
                <div class="modal-dialog" role="document">
                
                    <form action="<?= base_url().'laporan/add_tim_action/'.$v['id_laporan']; ?>" method="POST" class="row">
                    
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Daftar Tim URC</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php if(count($teknis) == 0): ?>
                                    No Data
                                <?php else: ?>
                                    <h5>Kordinator</h5>
                                    <?php foreach($kordinator as $kk => $kv): ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="<?= $kv['id_user'] ?>" value="<?= $kv['id_user'] ?>" name="kor[<?= $kk ?>][user_laporan_tim]">
                                        <label class="custom-control-label" for="<?= $kv['id_user'] ?>" style="line-height: 25px;"><?= $kv['nama_user'] ?></label>
                                    </div>
                                    <?php endforeach; ?>
                                    <br><br>
                                    <h5>Tim URC</h5>
                                    <?php foreach($teknis as $tk => $tv): ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="<?= $tv['id_user'] ?>" value="<?= $tv['id_user'] ?>" name="tim[<?= $tk ?>][user_laporan_tim]">
                                        <label class="custom-control-label" for="<?= $tv['id_user'] ?>" style="line-height: 25px;"><?= $tv['nama_user'] ?></label>
                                    </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                                            
                            <div class="modal-footer">
                                <button class="btn btn-secondary back1" type="button" data-dismiss="modal">Batal</button>
                                <button id="btn-submit" type="submit" class="btn btn-primary text-white">Proses</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="table-responsive mt-4 text-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-gray-200" scope="col">Nama</th>
                            <th class="border-gray-200" scope="col">Telp</th>
                            <th class="border-gray-200" scope="col">Status</th>
                            <th class="border-gray-200" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count(get_tim_laporan($v['id_laporan'])) == 0): ?>
                            <tr>
                                <td colspan="3" align="center">No Data</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach(get_tim_laporan($v['id_laporan']) as $tl): ?>
                            <tr>
                                <td><?= $tl['nama_user']; ?></td>
                                <td><?= $tl['telepon_user']; ?></td>
                                <td><?= $tl['nama_role']; ?></td>
                                <td><a class="pointer btn-circle btn-sm btn-danger" href="<?= base_url().'laporan/del_tim_action/'.$tl['id_tim_ai'].'/'.$v['id_laporan']; ?>"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="container-fluid bg-white py-3 mt-3">
            
            <h5 class="h5 text-gray-800 font-weight-bold">Penggunaan Material</h5>
            <div class="row">
                <div class="col-6 border-bottom">
                    <label class="w-100 font-weight-bold">Material</label>
                </div>
                <div class="col-6 border-bottom">
                    <label class="w-100 font-weight-bold">Qty</label>
                </div>
    

                <?php if(count(get_material_laporan($v['id_laporan'])) == 0): ?>
                    <div class="col-12 border-bottom mt-1 mb-3">
                        <label class="w-100 text-center">No Data</label>
                    </div>
                <?php else: ?>
                    <?php foreach(get_material_laporan($v['id_laporan']) as $ml): ?>
                        <div class="col-6 border-bottom py-2">
                            <label class="w-100"><?= $ml['nama_material']; ?></label>
                        </div>
                        <div class="col-4 border-bottom py-2">
                            <label class="w-100"><?= $ml['volume_laporan_material']; ?></label>
                        </div>
                        <div class="col-2 border-bottom py-2">
                            <a class="pointer btn-circle btn-sm btn-danger" href="<?= base_url().'laporan/del_material_action/'.$ml['material_laporan_material'].'/'.$v['id_laporan']; ?>"><i class="fa fa-trash"></i></a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
                    
            <form method="POST" class="mt-3 row" action="<?= base_url().'laporan/add_material_action/'.$v['id_laporan']; ?>">
                <div class="col-6">
                    <div class="form-group">
                        <div class="w-100">
                            <select class="form-control" name="material_laporan_material" required>
                                <?php foreach($material as $m): ?>
                                <option value="<?= $m['id_material']; ?>"><?= $m['nama_material']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <div class="w-100">
                            <input class="form-control" name="volume_laporan_material" required>
                            <input type="hidden" name="id_laporan_material" value="<?= $v['id_laporan']; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <div class="w-100">
                            <button class="btn btn-success text-white btn-icon-split float-right pointer" type="submit">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="container-fluid bg-white py-3 mt-3">
            
            <h5 class="h5 text-gray-800 font-weight-bold">Eksekusi Pekerjaan</h5>
            <form method="POST" class="mt-3 row" action="<?= base_url(); ?>laporan/update">

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="w-100">Tindak Lanjut</label>
                        <div class="w-100">
                            <select class="form-control" name="status_laporan" required>
                                <option value="1" <?= ($v['status_laporan'] == 1 ? "selected" : ""); ?>>Dikerjakan</option>
                                <option value="2" <?= ($v['status_laporan'] == 2 ? "selected" : ""); ?>>Selesai URC</option>
                                <option value="3" <?= ($v['status_laporan'] == 3 ? "selected" : ""); ?>>Revisi</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-12" id="tl">
                    <div class="form-group">
                        <label class="w-100">Tindak Lanjut</label>
                        <div class="w-100">
                            <input type="hidden" name="id_laporan" value="<?= $v['id_laporan']; ?>">
                            <textarea class="form-control" name="tindak_lanjut"><?= $v['tindak_lanjut_laporan']; ?></textarea>
                        </div>
                    </div>
                </div>
                

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="w-100">Keterangan Pekerjaan</label>
                        <div class="w-100">
                            <select class="form-control" name="keterangan_laporan">
                                <?php 
                                $lain = "selected";
                                foreach($keterangan as $k): 
                                    $selected = "";
                                    if($v['keterangan_laporan'] == $k['nama_keterangan']) {
                                        $selected = "selected";
                                        $lain = "";
                                    }
                                    ?>
                                <option value="<?= $k['nama_keterangan']; ?>" <?= $selected; ?>><?= $k['nama_keterangan']; ?></option>
                                <?php endforeach; ?>
                                <option value="Lainnya" <?= $lain ?>>Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="kl">
                    <div class="form-group">
                        <label class="w-100">Sebutkan Lainnya</label>
                        <div class="w-100">
                            <textarea class="form-control" name="keterangan"><?= ($v['keterangan_laporan'] == "" ? "Pemeliharaan Jalan" : $v['keterangan_laporan']); ?></textarea>
                        </div>
                    </div>
                </div>


                <div class="mt-3 col-12">
                    <div class="row">
                        <div class="col-6">
                            <button id="submitFile" type="submit" class="btn btn-success text-white btn-block">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    <?php endif; ?>
<?php endif; ?>