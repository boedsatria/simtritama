<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Input Data Buku Besar
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div class="intro-y col-span-6 lg:col-span-6">
        <!-- KOLOM KIRI-->
        <!-- BEGIN: BLOCK 1 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Pilih Kategori Akun
                    <!-- JUDUL BLOK KIRI-->
                </h2>
            </div>
            <div class="mt-2">
                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                    <option value="1">1000 Harta</option> <!-- drop down dari database COA parent-->
                    <option value="2">2000 Kewajiban</option>
                    <option value="3">3000 Modal</option>
                    <option value="4">4000 Pendapatan</option>
                    <option value="5">6000 Beban Usaha</option>
                </select> </div>
        </div>
        <!-- END: BLOCK 1 -->
        <br>
        <!-- BEGIN: BLOCK 2 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Pilih Akun Transaksi
                    <!-- JUDUL BLOK KIRI-->
                </h2>
                <!-- KONTEN BLOCK 2 DISINI-->
            </div>
            <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
             <option value="1">1102 BRI</option> <!-- drop down dari database COA child-->
             <option value="2">1103 Piutang Usaha</option>
             <option value="3">1104 Piutang Karyawan</option>
             <option value="4">1105 BCA</option>
             <option value="5">1106 Inventaris</option>
         </select> </div>
        </div>
        <!-- END: BLOCK 2 -->
        <br>
        <!-- BEGIN: BLOCK 3 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Tanggal Transaksi
                    <!-- JUDUL BLOK KIRI-->
                </h2>
                <!-- KONTEN BLOCK 3 DISINI-->
            </div>
                <div class="relative w-56 mx-auto">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                    </div> <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                </div> 
        </div>
        <!-- END: BLOCK 3 -->
        <br>
    </div>
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- KOLOM KANAN-->
        <!-- BEGIN: BLOCK 4 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Pilih Tipe Transaksi
                    <!-- JUDUL BLOK 4-->
                </h2>
            </div>
                    <div  class="intro-y col-span-12 lg:col-span-6">
                        <div class="flex flex-col sm:flex-row mt-1"><br>
                            <div class="form-check mr-7"> <input id="checkbox-switch-4" class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="checkbox-switch-4">PEMASUKAN</label>
                            </div><br>
                            <div class="form-check mr-2 mt-2 sm:mt-0"> <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="checkbox-switch-5">PENGELUARAN</label>
                            </div>
                    </div>
            </div>
        </div>
        <!-- END: BLOCK 4 -->
        <br>
        <!-- BEGIN: BLOCK 4 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Deskripsi
                    <!-- JUDUL BLOK 4-->
                </h2>
            </div>
            <div><input id="regular-form-1" type="text" class="form-control" placeholder="Input text"> </div>
        </div>
        <!-- END: BLOCK 4 -->
        <br>
        <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Input Jumlah Transaksi
                    <!-- JUDUL BLOK 5-->
                </h2>
            </div>
            <div><input id="regular-form-1" type="text" class="form-control" placeholder="Input text"> </div>
        </div>
        <!-- END: BLOCK 5 -->
        <br>
        <!-- BEGIN: MENU -->
        <div class="intro-y box mt-5">
            <div id="horizontal-form" class="p-5">
                <div class="preview">
                    <button class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Simpan </button>
                    <button class="btn btn-danger w-32 mr-2 mb-2"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Batal </button>
                    <button class="btn btn-warning w-32 mr-2 mb-2"> <i data-feather="book" class="w-4 h-4 mr-2"></i> Laporan </button>
                    <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                </div>
            </div>
        </div>
        <!-- END: menu -->
    </div>
</div>
</div>
<!-- END: Content -->