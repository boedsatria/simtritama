<div class="flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        PETTY CASH
    </h2>
</div>
<form action="">
    <div class="sm:flex items-center sm:mr-4">
        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
        <select class="form-select w-56 mt-2" name="wilayah_filter">
            <?php foreach($area as $a): 
                $selected = "";
                if($_GET['wilayah_filter'] == $a['no_coa']) $selected = 'selected';
            ?>
            <option value="<?= $a['no_coa'] ?>" <?= $selected ?>><?= $a['no_coa']." - ".$a['nama_coa']; ?></option>
            <?php endforeach; ?>
        </select>
        
        <label class="w-12 flex-none xl:w-auto xl:flex-initial ml-2 mr-2">Tanggal Transaksi</label>
        <div class="relative w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                <i data-feather="calendar" class="w-4 h-4"></i>
            </div>
            <?php
            if(isset($_GET['tgl_filter'])){
                $date_range = explode("-", $_GET['tgl_filter']);
                $mulai  = date('Y-m-d', strtotime($date_range[0]));
                $selesai  = date('Y-m-d', strtotime($date_range[1]));
            }else{
                $mulai  = date('Y-m-d');
                $selesai  = date('Y-m-d');
            }         
            ?>
            <input name="tgl_filter" data-daterange="true" class="datepicker form-control pl-12" value="<?= $mulai.' - '.$selesai; ?>">
        </div>
                                        
        <div class="w-12 ml-5 mr-5"> <button type="submit" class="btn btn-sm btn-danger">Search</button> </div>
        <div class="w-24 mr-2"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="btn btn-sm btn-primary">Tambah Data</a> </div>
    </div>
</form>
<!--begin modal-->
<div id="button-modal" class="p-5">
    <div class="preview">
        <!-- BEGIN: Modal Toggle -->
        <!-- END: Modal Toggle -->
        <!-- BEGIN: Modal Content -->
        <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                    <div class="modal-body p-0">
                        <form action="<?= base_url(); ?>finance/petty_cash_action" method="POST" enctype="multipart/form-data">
                            <div class="p-5 text-left">
                                <div>
                                    <div class="sm:flex items-center sm:mr-4">
                                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Jenis Transaksi</label>
                                        <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto" name="jenis">
                                            <option value="masuk"> Masuk</option>
                                            <option value="keluar"> Keluar</option>

                                        </select> &ensp;
                                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">COA</label>
                                        <select id="tabulator-html-filter-field" class="form-select w-full mt-2" name="coa">
                                            <?php foreach($coa as $c): ?>
                                            <option value="<?= $c['no_coa'] ?>"><?= $c['no_coa']." - ".$c['nama_coa']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div></br>

                                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
                                    <select id="tabulator-html-filter-field" class="form-select w-full mt-2" name="wilayah">
                                        <?php foreach($area as $a): ?>
                                        <option value="<?= $a['no_coa'] ?>"><?= $a['no_coa']." - ".$a['nama_coa']; ?></option>
                                        <?php endforeach; ?>
                                    </select>                                    
                                    <label for="nama_media" class="form-label mt-2">Nama Transaksi</label>
                                    <input id="nama_media" type="text" class="form-control w-full" placeholder="Input text" name="nama">
                                    <label for="email_media" class="form-label mt-2">Jumlah Transaksi</label>
                                    <input id="nilai_project" type="text" class="form-control w-full" placeholder="" name="transaksi">
                                    <label for="phone_media" class="form-label mt-2">Nama Pengguna Anggaran</label>
                                    <select id="tabulator-html-filter-field" class="form-select w-full mt-2 form-control" name="pa">
                                        <?php foreach($user as $u): ?>
                                        <option value="<?= $u['id_user'] ?>"><?= $u['nip_user']." - ".$u['nama_user'] ?></option>
                                        <?php endforeach; ?>
                                    </select><br><br>

                                    <div class="col-span-6 sm:col-span-12">
                                        <label class="form-label">Tanggal Transaksi</label>
                                        <div class="relative ">
                                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                <i data-feather="calendar" class="w-4 h-4"></i>
                                            </div>
                                            <input type="text" class="datepicker form-control pl-12" name="tgl_trans" data-single-mode="true">
                                        </div>
                                    </div>

                                    <label for="alamat_media" class="form-label mt-2">Upload Bukti</label>
                                    <input id="alamat_media" type="file" class="form-control w-full" placeholder="Input text" name="file">

                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="submit" class="btn btn-primary w-24">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal konten-->
    </div>
</div>
<!--end modal-->

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 lg:col-span-12">
        <!-- BEGIN: Hoverable Table -->
        <div class="box mt-5">
            <div class="p-5">
                
                <div class="preview">
                    <div class="overflow-x-auto">
                        <?php if(isset($_GET['wilayah_filter'])): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No.</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Transaksi</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Tanggal</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(isset($_GET['tgl_filter'])){
                                        $date_range = explode("-", $_GET['tgl_filter']);
                                        $mulai  = date('Y-m-d', strtotime($date_range[0]));
                                        $selesai  = date('Y-m-d', strtotime('-1 day', strtotime($date_range[1])));
                                    }else{
                                        $mulai  = date('Y-m-d');
                                        $selesai  = date('Y-m-d', strtotime('-1 day', date('Y-m-d')));
                                    }
                                ?>
                                <tr style="background-color: #1C2130;color:#FFF;" hidden>
                                    <td class=""></td>
                                    <td class="">Saldo Awal</td>
                                    <td class=""></td>
                                    <td class=" text-right"></td>
                                    <td class=" text-right"></td>
                                    <td class=" text-right"><?= (count($petty) > 0 ? number_format($petty[0]['saldo_pc']-$petty[0]['masuk_pc']+$petty[0]['keluar_pc'], 0) : 0); ?></td>
                                </tr>
                                <?php 
                                $x = 1;
                                foreach($petty as $v): ?>
                                <tr>
                                    <td class="border"><?= $x; ?></td>
                                    <td class="border"><?= $v['nama_pc'] ?></td>
                                    <td class="border"><?= tgl_indo($v['tanggal_pc']) ?></td>
                                    <td class="border text-right"><?= number_format($v['masuk_pc'], 0) ?></td>
                                    <td class="border text-right"><?= number_format($v['keluar_pc'], 0) ?></td>
                                    <td class="border text-right"><?= number_format($v['saldo_pc'], 0) ?></td>
                                </tr>
                                <?php 
                                $x++;
                                endforeach; ?>
                                
                                <tr style="background-color: #1C2130;color:#FFF;">
                                    <td class=""></td>
                                    <td class="">Saldo</td>
                                    <td class=""></td>
                                    <td class=" text-right"></td>
                                    <td class=" text-right"></td>
                                    <td class=" text-right"><?= number_format(saldo_akhir($_GET['wilayah_filter']), 0); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php else: ?>
                            <h4>Pilih Wilayah</h4>
                        <?php endif; ?>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- END: Hoverable Table -->
        
    </div>
</div>