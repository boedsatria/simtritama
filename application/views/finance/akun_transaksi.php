<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        DAFTAR AKUN TRANSAKSI
        <!--JUDUL PAGE-->
    </h2>
    
</div>
<!-- END JUDUL-->
<div class="overflow-x-auto">
    <table class="table">
        <thead>
            <tr>
                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">KATEGORI</th>
                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">KODE AKUN</th>
                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">JENIS TRANSAKSI</th>
                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">DESKRIPSI</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-theme-1 text-white">
                <td class="border-b dark:border-dark-5">HARTA (1000 sd 1999)</td>
                <td class="border-b dark:border-dark-5">1101</td>
                <td class="border-b dark:border-dark-5">Kas Petty Cash</td>
                <td class="border-b dark:border-dark-5">Catatan anggaran harian dan operasional</td>
            </tr>
            <tr class="bg-theme-6 text-white">
                <td class="border-b dark:border-dark-5">KEWAJIBAN (2000 sd 2999)</td>
                <td class="border-b dark:border-dark-5">2101</td>
                <td class="border-b dark:border-dark-5">Utang Usaha</td>
                <td class="border-b dark:border-dark-5">deskripsi utang usaha</td>
            </tr>
            <tr class="bg-theme-11 text-white">
                <td class="border-b dark:border-dark-5">MODAL (3000 sd 3999)</td>
                <td class="border-b dark:border-dark-5">3101</td>
                <td class="border-b dark:border-dark-5">Modal</td>
                <td class="border-b dark:border-dark-5">Deskripsi Modal</td>
            </tr>
            <tr class="bg-theme-1 text-white">
                <td class="border-b dark:border-dark-5">PENDAPATAN (4000 sd 4999)</td>
                <td class="border-b dark:border-dark-5">4101</td>
                <td class="border-b dark:border-dark-5">Pendapatan</td>
                <td class="border-b dark:border-dark-5">Revenue Pembayaran atau hasil SP2D</td>
            </tr>
            <tr class="bg-theme-6 text-white">
                <td class="border-b dark:border-dark-5">BEBAN USAHA (6000 sd 6999)</td>
                <td class="border-b dark:border-dark-5">6101</td>
                <td class="border-b dark:border-dark-5">Gaji Owner</td>
                <td class="border-b dark:border-dark-5">deskripsi</td>
            </tr>
            <tr class="bg-theme-11 text-white">
                <td class="border-b dark:border-dark-5">ENTERTAINMENT (7000 sd 7999)</td>
                <td class="border-b dark:border-dark-5">7777</td>
                <td class="border-b dark:border-dark-5">Karangan Bunga</td>
                <td class="border-b dark:border-dark-5">Pengadaan Karangan Bunga sebagai ucapan untuk Client/Mitra Kerja</td>
            </tr>
            <tr class="bg-theme-1 text-white">
                <td class="border-b dark:border-dark-5">PROFIT SHARING (8000 sd 8999)</td>
                <td class="border-b dark:border-dark-5">8888</td>
                <td class="border-b dark:border-dark-5">Profit Sharing</td>
                <td class="border-b dark:border-dark-5">Deskripsi bagi hasil</td>
            </tr>
            <tr class="bg-theme-6 text-white">
                <td class="border-b dark:border-dark-5">REWARD KARYAWAN (9000 sd 9999)</td>
                <td class="border-b dark:border-dark-5">9999</td>
                <td class="border-b dark:border-dark-5">Bonus Tim Produksi</td>
                <td class="border-b dark:border-dark-5">Bonus prestasi tim produksi</td>
            </tr>
        </tbody>
    </table>
</div> 

 <!--begin modal-->
<div id="button-modal" class="p-5" style="float: right;">
    <div class="preview">
        <!-- BEGIN: Modal Toggle -->
        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="btn btn-primary">Tambah Data</a>
        </div>
        <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                            <div class="modal-body p-0">
                                <div class="p-5 text-left">
                                    <i data-feather="folder-plus" class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
                                        <div>
                                            <div> <label>KATEGORI</label>
                                                <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                                        <option value="1">1000 HARTA</option>
                                                        <option value="2">2000 KEWAJIBAN</option>
                                                        <option value="3">3000 MODAL</option>
                                                        <option value="4">4000 PENDAPATAN</option>
                                                        <option value="5">6000 BEBAN USAHA</option>
                                                    </select> </div>
                                            </div>
                                            <label for="kode_transaksi" class="form-label">NOMOR KODE TRANSAKSI</label>
                                            <input id="kode_transaksi" type="text" class="form-control w-full" placeholder="Input text">
                                            <label for="nama_transaksi" class="form-label">NAMA TRANSAKSI</label>
                                            <input id="nama_transaksi" type="text" class="form-control w-full" placeholder="Input text">
                                            <label for="deskripsi_transaksi" class="form-label">DESKRIPSI</label>
                                            <input id="deskripsi_transaksi" type="text" class="form-control w-full" placeholder="Input text">
                                        </div>
                                </div>
                            <div class="px-5 pb-8 text-center">
                        <button type="button" data-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                    </div>
                </div>
            </div>
        <!--end modal konten-->  
    </div>
</div>
<!--end modal-->
<!-- END: Content -->