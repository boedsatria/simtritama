<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Detail Stock <?= $data['nama_stock'] ?>
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->
<div class="grid grid-cols-2 gap-2 mt-5">
    <!-- KOLOM BESAR-->
    <div class="intro-y col-span-2 lg:col-span-4">
        <!-- KOLOM KIRI-->
        <!-- BEGIN: BLOCK 1 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">

                <!-- KONTEN BLOCK 1 DISINI-->

                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                <th class="whitespace-nowrap">Tanggal</th>
                                <th class="whitespace-nowrap">Pengguna</th>
                                <th class="whitespace-nowrap">Divisi</th>
                                <th class="whitespace-nowrap">Masuk</th>
                                <th class="whitespace-nowrap">Keluar</th>
                                <th class="whitespace-nowrap">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $qty_in = 0;
                            $qty_out = 0;
                            $qty = 0;
                            foreach($detail as $v): 
                            $qty_in += $v['in_ds'];
                            $qty_out += $v['out_ds'];
                            $qty = $qty_in - $qty_out;
                            ?>
                            <tr>
                                <td class="border-b dark:border-dark-5"><?= tgl_indo($v['date_ds']) ?></td>
                                <td class="border-b dark:border-dark-5"><?= $v['nama_user'] ?></td>
                                <td class="border-b dark:border-dark-5"><?= $v['nama_role'] ?></td>
                                <td class="border-b dark:border-dark-5"><?= $v['in_ds'] ?></td>
                                <td class="border-b dark:border-dark-5"><?= $v['out_ds'] ?></td>
                                <td class="border-b dark:border-dark-5"><?= $qty ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <br>
                    <a class="btn btn-danger w-48 mr-2 mb-2" href="<?= base_url(); ?>finance/aset_dan_penyusutan"> <i data-feather="skip-back" class="w-4 h-4 mr-2"></i> Back </a>
                    <button class="btn btn-primary w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                    <a href="javascript:;" data-toggle="modal" data-target="#tambah-data" class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="plus" class="w-4 h-4 mr-2"></i> Catat Pengeluaran </a>
                    <div id="tambah-data" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                <form action="<?= base_url().'finance/tambah_stock_action/'.$data['id_stock']; ?>" method="POST">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-left">
                                            <div>
                                                <label class="form-label">Nama Pengguna Barang</label>
                                                <select class="tom-select" name="user_ds">
                                                    <?php foreach($user as $u): ?>
                                                    <option value="<?= $u['id_user'] ?>"><?= $u['nama_user'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <label for="regular-form-3" class="form-label">Tanggal</label>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <div class="relative w-72 mx-auto">
                                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                            <i data-feather="calendar" class="w-4 h-4"></i>
                                                        </div>
                                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true" name="date_ds">
                                                    </div>
                                                </div></br>
                                                </br>
                                                <input type="hidden" name="item_ds" value="<?= $data['id_stock'] ?>">
                                                <label for="qty" class="form-label">Qty</label>
                                                <input id="qty" type="text" name="out_ds" class="form-control w-full" placeholder="Quantity">
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="submit" data-dismiss="modal" class="btn btn-primary w-24">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <a href="javascript:;" data-toggle="modal" data-target="#tambah-stock" class="btn btn-warning w-48 mr-2 mb-2"> <i data-feather="plus" class="w-4 h-4 mr-2"></i> Tambah Stock </a>
                    <div id="tambah-stock" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                <form action="<?= base_url().'finance/tambah_stock_action/'.$data['id_stock']; ?>" method="POST">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-left">
                                            <div>
                                                <input type="hidden" name="item_ds" value="<?= $data['id_stock'] ?>">
                                                <input type="hidden" name="user_ds" value="<?= $this->session->userdata('userlogin')['id_user'] ?>">
                                                <label for="regular-form-3" class="form-label">Tanggal</label>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <div class="relative w-72 mx-auto">
                                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                            <i data-feather="calendar" class="w-4 h-4"></i>
                                                        </div>
                                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true" name="date_ds">
                                                    </div>
                                                </div></br>
                                                <label for="qty" class="form-label">Qty</label>
                                                <input id="qty" type="text" name="in_ds" class="form-control w-full" placeholder="Quantity">
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="submit" data-dismiss="modal" class="btn btn-primary w-24">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: BLOCK 1 -->
    </div>
</div>