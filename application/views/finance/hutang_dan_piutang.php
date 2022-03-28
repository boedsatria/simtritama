<!-- BEGIN : konten -->
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        HUTANG DAN PIUTANG
    </h2>
</div>
<!-- BEGIN: HTML Table Data -->
<!-- BEGIN: filter -->
<div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form action="" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Kategori</label>
                <select name="hp" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="1">HUTANG</option>
                    <option value="2">PIUTANG</option>
                    <option value="0">Tampilkan Semua Data</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Rentang Tanggal Transaksi</label>
                <input name="tgl_filter" data-daterange="true" class="datepicker form-control w-56 block mx-auto">
            </div>
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Clients</label>
                <select name="client" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="0">Semua</option>
                    <?php foreach($client as $c): ?>
                    <option value="<?= $c['id_client'] ?>"><?= $c['nama_client'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Media</label>
                <select name="media" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="0">Semua</option>
                    <?php foreach($media as $m): ?>
                    <option value="<?= $m['id_media'] ?>"><?= $m['nama_media'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Vendor</label>
                <select name="vendor" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="0">Semua</option>
                    <?php foreach($vendor as $p): ?>
                    <option value="<?= $p['id_vendor'] ?>"><?= $p['nama_vendor'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div id="horizontal-form" class="p-2">
                <div class="preview">
                    <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i> Search </button>
                </div>
            </div>

        </form>
    </div>
    <div class="box p-5 mt-5">
        <!-- BEGIN: Hoverable Table -->
        <div class="p-5">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="border border-b-2 dark:border-dark-5 w-1">No.</th>
                                <th class="border border-b-2 dark:border-dark-5">Keterangan</th>
                                <th class="border border-b-2 dark:border-dark-5">Hutang</th> <!--Judul Project + Jenis Pekerjaan ( produksi or placement) + Nama Transaksi : contoh : Advetorial Keselamatan Kerja + Placement + Media Trans TV-->
                                <th class="border border-b-2 dark:border-dark-5">Piutang</th> <!--Judul Project + Jenis Pekerjaan ( produksi or placement) + Nama Transaksi : contoh : Advetorial Keselamatan Kerja + Placement + Media Trans TV-->
                                <th class="border border-b-2 dark:border-dark-5">Tanggal Transaksi</th>
                                <th class="border border-b-2 dark:border-dark-5">Tanggal Pencairan</th>
                                <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(count($hp[0]) < 1): ?>
                            <tr>
                                <td colspan="6">No Data</td>
                            </tr>
                            <?php else: ?>
                            <?php foreach($hp as $kp => $vp): ?>
                            <tr>
                                <td class="border"><?= $kp+1 ?></td>
                                <td class="border"><?= $vp['nama_hp']." - ".$vp['detail_hp']['no_project'] ?></td>
                                <td class="border text-right"><?= number_format($vp['hutang_hp'], 0) ?></td>
                                <td class="border text-right"><?= number_format($vp['piutang_hp'], 0) ?></td>
                                <td class="border"><?= tgl_indo($vp['created_hp']) ?></td>
                                <td class="border"><?= ($vp['piutang_hp'] > 0 ? tgl_indo($vp['detail_hp']['tgl_pencairan_project']) : "") ?></td>
                                <td class="border text-center">
                                    <a href="<?= base_url('finance/detail_hutang_dan_piutang') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                        Detail </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END: Hoverable Table -->
    </div>
</div>
