<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        PATTY CASH
    </h2>
</div>
<div class="sm:flex items-center sm:mr-4">
    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
        <option value="">1101 - Pusat</option>
        <option value="">1108 - DKI Jakarta</option>
        <option value="">1109 - Banten</option>
    </select> &ensp;
    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Tahun</label>
    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
        <?php for ($x = 2021; $x <= 2070; $x++) : ?>
            <option value="<?= $x; ?>"><?= $x; ?></option>
        <?php endfor; ?>
    </select> &ensp;
    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Bulan</label>
    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
        <?php for ($x = 1; $x <= 12; $x++) : ?>
            <option value="<?= $x; ?>"><?= monthOnly_indo('2021-' . $x . '-01') ?></option>
        <?php endfor; ?>
    </select> &ensp;
    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Tanggal</label>
    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
        <?php for ($x = 1; $x <= 31; $x++) : ?>
            <option value="<?= $x; ?>"><?= $x; ?></option>
        <?php endfor; ?>
    </select>
    <!--begin modal-->
    <div id="button-modal" class="p-5">
        <div class="preview">
            <!-- BEGIN: Modal Toggle -->
            <div class="text-right"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="btn btn-sm btn-primary w-72">Tambah Data</a> </div>
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
                                            <select id="tabulator-html-filter-field" class="form-select w-full mt-2" name="wilayah">
                                                <?php foreach($area as $a): ?>
                                                <option value="<?= $a['no_coa'] ?>"><?= $a['no_coa']." - ".$a['nama_coa'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div></br>

                                        <label for="nama_media" class="form-label mt-2">Nama Transaksi</label>
                                        <input id="nama_media" type="text" class="form-control w-full" placeholder="Input text" name="nama">
                                        <label for="email_media" class="form-label mt-2">Jumlah Transaksi</label>
                                        <input id="email_media" type="text" class="form-control w-full" placeholder="Input text" name="transaksi">
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
</div>

<div class="grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Hoverable Table -->
        <div class="intro-y box mt-5">
            <div class="p-5" id="hoverable-table">
                <div class="preview">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No.</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Transaksi</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($petty as $v): ?>
                                <tr class="hover:bg-gray-200">
                                    <td class="border">1</td>
                                    <td class="border"><?= $v['nama_pc'] ?></td>
                                    <td class="border text-right"><?= number_format($v['keluar_pc'], 0) ?></td>
                                    <td class="border text-right"><?= number_format($v['masuk_pc'], 0) ?></td>
                                    <td class="border"><?= '0' // $v['nama_pc'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- END: Hoverable Table -->
        <!-- BEGIN: Pagination -->
        <div class="p-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                    </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                    </li>
                </ul>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
            <!-- END: Pagination -->
        </div>
    </div>
</div>