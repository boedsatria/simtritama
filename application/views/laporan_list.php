
<?php 
$get_request = json_encode($_GET); 
$get_request = str_replace("{", "", $get_request); 
$get_request = str_replace("}", "", $get_request); 
$get_request = str_replace(",", "&", $get_request); 
$get_request = str_replace(":", "=", $get_request); 
$get_request = str_replace('"', "", $get_request); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800 w-100">Daftar Laporan
            <?php if($this->session->has_userdata('userlogin') && $this->session->userdata('userlogin')['role_user'] <= 2): ?>
            <a target="_BLANK" class="btn btn-sm btn-success text-white btn-icon-split float-right" href="<?= base_url()."laporan/export?".$get_request; ?>">
                <span class="icon text-white-50">
                    <i class="fas fa-download"></i>
                </span>
                <span class="text">Download</span>
            </a>
            <?php endif; ?>
        </h1>
    </div>
</div>
<!-- /.container-fluid -->

<div class="container-fluid bg-white py-3 mt-3 text-sm">
    <form action="" method="GET">
        <div class="form-group mb-0">
            <div class="row">
                <div class="col-2 pl-0">
                    <select class="form-control form-control-sm p-0" name="limit">
                        <option value="5" <?= (isset($_GET['limit']) && $_GET['limit'] == 5 ? "selected" : ""); ?>>5</option>
                        <option value="10" <?= (isset($_GET['limit']) && $_GET['limit'] == 10 ? "selected" : ""); ?>>10</option>
                        <option value="50" <?= (isset($_GET['limit']) && $_GET['limit'] == 50 ? "selected" : ""); ?>>50</option>
                        <option value="100" <?= (isset($_GET['limit']) && $_GET['limit'] == 100 ? "selected" : ""); ?>>100</option>
                        <option value="All" <?= (isset($_GET['limit']) && $_GET['limit'] == "All" ? "selected" : ""); ?>>All</option>
                    </select>
                </div>
                <div class="col-5 pl-0">
                    <select class="form-control form-control-sm" name="bln">
                        <option value="0" <?= (isset($_GET['bln']) && $_GET['bln'] == "0" ? "selected" : ""); ?>>-Semua-</option>
                        <option value="1" <?= (isset($_GET['bln']) && $_GET['bln'] == "1" ? "selected" : ""); ?>>Januari</option>
                        <option value="2" <?= (isset($_GET['bln']) && $_GET['bln'] == "2" ? "selected" : ""); ?>>Februari</option>
                        <option value="3" <?= (isset($_GET['bln']) && $_GET['bln'] == "3" ? "selected" : ""); ?>>Maret</option>
                        <option value="4" <?= (isset($_GET['bln']) && $_GET['bln'] == "4" ? "selected" : ""); ?>>April</option>
                        <option value="5" <?= (isset($_GET['bln']) && $_GET['bln'] == "5" ? "selected" : ""); ?>>Mei</option>
                        <option value="6" <?= (isset($_GET['bln']) && $_GET['bln'] == "6" ? "selected" : ""); ?>>Juni</option>
                        <option value="7" <?= (isset($_GET['bln']) && $_GET['bln'] == "7" ? "selected" : ""); ?>>Juli</option>
                        <option value="8" <?= (isset($_GET['bln']) && $_GET['bln'] == "8" ? "selected" : ""); ?>>Agustus</option>
                        <option value="9" <?= (isset($_GET['bln']) && $_GET['bln'] == "9" ? "selected" : ""); ?>>September</option>
                        <option value="10" <?= (isset($_GET['bln']) && $_GET['bln'] == "10" ? "selected" : ""); ?>>Oktober</option>
                        <option value="11" <?= (isset($_GET['bln']) && $_GET['bln'] == "11" ? "selected" : ""); ?>>November</option>
                        <option value="12" <?= (isset($_GET['bln']) && $_GET['bln'] == "12" ? "selected" : ""); ?>>Desember</option>
                    </select>
                </div>

                <div class="col-3 pl-0">
                    <select class="form-control form-control-sm" name="thn">
                        <option value="2021" selected>2021</option>
                    </select>
                </div>

                <div class="col-2 pl-0">
                    <button type="submit" class="btn btn-block btn-primary btn-sm"><i class="fa fa-angle-double-right"></i></button>
                </div>

                <div class="col-12 pl-0 mt-2">
                    <?php
                        $checked = (!isset($_GET['dibuat']) && !isset($_GET['selesai']) && !isset($_GET['revisi']) ? "checked" : "");
                    ?>
                    <?php foreach($status as $s): ?>
                    <div class="custom-control custom-checkbox small d-inline-block mr-4">
                        <input type="checkbox" class="custom-control-input" id="<?= strtolower($s['nama_status'])?>" value="<?= $s['id_status']?>" name="<?= strtolower($s['nama_status'])?>" <?= (isset($_GET[strtolower($s['nama_status'])]) ? "checked": "") ?> <?= $checked; ?>>
                        <label class="custom-control-label <?= strtolower($s['nama_status']); ?>" for="<?= strtolower($s['nama_status'])?>" style="line-height: 25px;"><?= $s['nama_status']?></label>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="container-fluid bg-white py-3 mt-3">
    <div class="card-body px-0">
        
        <?php if(count($laporan) < 1): ?>
            <h5>No Data</h4>
        <?php endif; ?>

        <?php foreach($laporan as $l): 
        $img_src = get_images_laporan($l['id_laporan'])[0]['source_laporan_photo'];
        $img = ($img_src == "" ? base_url().'img/no-images.png' : base_url().'uploads/laporan/'.$img_src);       
        ?>
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <img class="avatar avatar-xxxl avatar-radius-4" src="<?= $img; ?>">
                <div class="ml-2">
                    <a class="font-weight-bold title-flex" href="<?= base_url().'laporan/detail/'.$l['id_laporan']; ?>"><?= $l['jalan_laporan']; ?></a>
                    <div class="text-xs text-muted"><?= $l['deskripsi_laporan']; ?></div>
                    <span class="badge <?= $l['warna_status']; ?> text-white text-xs"><?= $l['nama_status']; ?></span> | <span class="text-xs"><i class="fa fa-user"></i> <?= $l['nama_user']; ?></span>

                </div>
            </div>
            <div class="ml-2">
                <div class="text-muted text-xs text-center">
                <span style="font-weight: 800;font-size: 1.5rem;line-height: 20px;"><?= explode(" ",tgl_indo_short($l['dibuat_laporan']))[0]; ?></span><br>
                    <?= explode(" ",tgl_indo_short($l['dibuat_laporan']))[1]; ?>
                </div>
            </div>
        </div>
        <hr>
        <?php endforeach; ?>
    </div>

    <nav aria-label="page-laporan">
        <?php echo $page; ?>
    </nav>
</div>