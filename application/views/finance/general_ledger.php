<!-- BEGIN : JUDUL -->
<div class="flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        GENERAL LEDGER
        <!--JUDUL PAGE-->
    </h2>
</div> <br>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
    <form action="" class="xl:flex sm:mr-auto">
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <label class="">KATEGORI COA</label><br>
            <select id="kat_pm" onchange="kategori_pm()" name="cat" class="form-select" required>
                <option value="0" selected="">-PILIH KATEGORI-</option>
                <?php foreach($cat_coa as $cc): ?>
                <option value="<?= $cc['no_coa'] ?>"><?= $cc['no_coa'].' - '.$cc['nama_coa'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">AKUN COA</label><br>
            <select id="coa_pm" name="akun" class="form-select">
                <option value="0" selected="">Pilih Kategori COA</option>
            </select>
        </div><br>
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Periode</label><br>
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
            <input data-daterange="true" name="tgl_filter" value="<?= $mulai.' - '.$selesai; ?>" class="datepicker form-control w-56 block mx-auto">
        </div>
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <button type="submit" class="btn btn-sm btn-danger">Search</button>
        </div>
    </form>
</div>



<div class="grid grid-cols-4 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div>
        <?php if(isset($_GET['akun'])):?>
        <!-- BEGIN: BLOCK 5 -->
        <div class="box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto w-full">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">HARTA - PETTYCASH</label>
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">KODE AKUN 1101</label>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Tanggal</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Transaksi</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No Referensi/Bukti Transaksi</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $total_in = 0;
                            $total_out = 0;
                            foreach($gl as $v): 
                                $total_in += $v['masuk_bb'];
                                $total_out += $v['keluar_bb'];
                            ?>
                            <tr>
                                <td class="border"><?= tgl_indo($v['tanggal_bb']) ?></td>
                                <td class="border"><?= $v['nama_bb'] ?></td>
                                <td class="border"><?= $v['referensi_bb'] ?></td>
                                <td class="border text-right"><?= number_format($v['masuk_bb']) ?></td>
                                <td class="border text-right"><?= number_format($v['keluar_bb']) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="px-5 py-5 flex flex-col-reverse sm:flex-row">
                        <div class="text-center sm:text-right sm:ml-auto">
                            <div class="text-base text-gray-600">Total</div>
                            <div class="text-xl text-theme-1 dark:text-theme-10 font-medium mt-2"><?= number_format($total_in-$total_out); ?></div>
                        </div>
                    </div> 
                </div> 
            </div>

        </div>
        <?php else : ?>
        <div class="box p-5">Pilih Data</div>
        <?php endif; ?>

    </div> <br>
        <!-- END: BLOCK 5 -->
        <!-- BEGIN: MENU -->
        
        <div id="horizontal-form" class="p-2">
            <div class="preview">
                <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
            </div>
        </div>
        <!-- END: OPERATION -->
</div>    

<!-- END: Content -->