<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        BUKU BESAR
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Periode Laporan</label>
            </div>
            <div class="preview">
                <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
            </div>
        </form>
    </div>



<div class="grid grid-cols-4 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div>
    <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Tanggal</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Akun</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Akun</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Deskripsi</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">1101</td>
                                <td class="border">Petty Cash Pusat</td>
                                <td class="border">Deskripsi 1</td>
                                <td class="border">10000</td>
                                <td class="border"> - </td>
                                <td class="border"> 10000 </td>
                            </tr>
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">1103</td>
                                <td class="border">Petty Cash Banten</td>
                                <td class="border">Deskripsi 2</td>
                                <td class="border"> - </td>
                                <td class="border">2000</td>
                                <td class="border"> 8000 </td>
                            </tr>
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">1109</td>
                                <td class="border">Petty Cash Surabaya</td>
                                <td class="border">Deskripsi 3</td>
                                <td class="border"> - </td>
                                <td class="border">2000</td>
                                <td class="border"> 6000 </td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>

            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                    <div class="sm:flex items-center sm:mr-4">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Total Pemasukan</label>
                        <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                    </div>

                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Total Pengeluaran</label>
                        <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                    </div>

                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Saldo Akhir</label>
                        <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                    </div>
                </form>
            </div>
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

<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        GENERAL LEDGER GENERATOR
        <!--JUDUL PAGE-->
    </h2>
</div> <br>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">GL</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Kementerian">Aktiva</option> <!--database COA parent (Golongan akun)-->
                    <option value="Direktorat">Kewajiban</option>
                    <option value="BUMN">Modal</option>
                    <option value="Lembaga">Pendapatan</option>
                </select>
            </div>

            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">No.Akun</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="DKI Jakarta" selected="">1101-Petty Cash</option>
                    <option value="Jawa Barat">1102-BRI</option>
                    <option value="Jawa Barat">1103-Piutang</option>
                </select>
            </div>

            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Peroide Laporan</label>
            </div>
            <div class="preview">
                <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
            </div>

        </form>
    </div>



<div class="grid grid-cols-4 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div>
    <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Tanggal</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Transaksi</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No Ref</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">Transaksi Petty Cash 1 xxxxxxxxxxxxxxxxxxxxx</td>
                                <td class="border">xxxxx</td>
                                <td class="border">1000xxxxxxxxxxxxxxx</td>
                                <td class="border"> - </td>
                                <td class="border"> 200xxxxxxxxxxxxxxxxx </td>
                            </tr>
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">Transaksi Petty Cash 2xxxxxxxxxxxxxxxxxxxxxxx</td>
                                <td class="border">xxxxx</td>
                                <td class="border"> - </td>
                                <td class="border">100xxxxxxxxxxxxxxxxx</td>
                                <td class="border"> 500xxxxxxxxxxxxxxxxxxx </td>
                            </tr>
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">Transaksi Petty Cash 3xxxxxxxxxxxxxxxxxxxx</td>
                                <td class="border">xxxxx</td>
                                <td class="border"> - </td>
                                <td class="border">200</td>
                                <td class="border"> 300xxxxxxxxxxxxxxxxxxxxx </td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>


            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                    <div class="sm:flex items-center sm:mr-4">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Total Pemasukan</label>
                        <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                    </div>

                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Total Pengeluaran</label>
                        <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                    </div>

                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Saldo Akhir</label>
                        <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                    </div>
                </form>
            </div>
        </div>
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

<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        NERACA
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Periode Laporan</label>
            </div>
            <div class="preview">
                <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
            </div>
        </form>
    </div>



<div class="grid grid-cols-4 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div>
    <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Akun</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Akun</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NS Masuk</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NS Keluar</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NSP Masuk</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NSP Keluar</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NSPP Masuk</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NSPP Keluar</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NERACA Masuk</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NERACA Keluar</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">L/R Masuk</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">L/R Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">xxxx</td>
                                <td class="border">xxxxxxxxxxxx</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                            </tr>
                            <tr>
                                <td class="border">xxxx</td>
                                <td class="border">xxxxxxxxxxxx</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                            </tr>
                            <tr>
                                <td class="border">xxxx</td>
                                <td class="border">xxxxxxxxxxxx</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                            </tr>
                            <tr>
                                <td class="border">xxxx</td>
                                <td class="border">xxxxxxxxxxxx</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                                <td class="border">1000</td>
                                <td class="border">900</td>
                            </tr>
                            <tr>
                                <td class="border"> </td>
                                <td class="border">Jumlah :</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                            </tr>
                            <tr>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border">LABA :</td>
                                <td class="border">Auto</td>
                                <td class="border">LABA :</td>
                                <td class="border">Auto</td>
                            </tr>
                            <tr>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border">BALANCE :</td>
                                <td class="border">Auto</td>
                                <td class="border">Auto</td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div> 
            </div>
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

<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        LAPORAN PIUTANG
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Periode Laporan</label>
            </div>
            <div class="preview">
                <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
            </div>
        </form>
    </div>



<div class="grid grid-cols-4 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div>
    <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No Ringkos</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Client</th> <!--database client (direktorat/kementrian dll-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Judul Kegiatan</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Perusahaan Penyelenggara</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">BAST</th> <!--Tanggal BAST quary inputan PIC-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">SP2D</th> <!--Tanggal SP2D-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nilai SP2D</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">PIC</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">PAID</th> 
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">UNPAID</th> <!--dari database nilai SP2D, increment, auto-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">ringkos 123456</td>
                                <td class="border">Direktorat Tenaga Kerja</td>
                                <td class="border">Advetorial Penanganan Kecelakaan Kerja Ringan</td>
                                <td class="border">Satria Media</td>
                                <td class="border">14 Feb 2021</td> 
                                <td class="border">21 Feb 2021</td>
                                <td class="border">1.000.000</td>
                                <td class="border">Antonio Banderas</td>
                                <td class="border">1.000.000</td>
                                <td class="border">0</td>
                            </tr>
                            <tr>
                                <td class="border">ringkos 123457</td>
                                <td class="border">Direktorat Agama</td>
                                <td class="border">Advetorial Kebersihan Lingkungan</td>
                                <td class="border">Satria Media</td>
                                <td class="border">15 Feb 2021</td> 
                                <td class="border">22 Feb 2021</td>
                                <td class="border">1.000.000</td>
                                <td class="border">Leonardo Dcaprio</td>
                                <td class="border">1.000.000</td>
                                <td class="border">0</td>
                            </tr>
                            <tr>
                                <td class="border">ringkos 123457</td>
                                <td class="border">Direktorat Kebudayaan</td>
                                <td class="border">Advetorial Wisata New Normal</td>
                                <td class="border">Satria Media</td>
                                <td class="border">16 Feb 2021</td> 
                                <td class="border">23 Feb 2021</td>
                                <td class="border">1.000.000</td>
                                <td class="border">Sarah O'Neil</td>
                                <td class="border">0</td>
                                <td class="border">1.000.000</td>
                            </tr>
                            
                            <tr>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border">Jumlah :</td>
                                <td class="border">3.000.000</td> <!--auto-->
                                <td class="border"> </td>
                                <td class="border">2.000.000</td> <!--auto-->
                                <td class="border">1.000.000</td> <!--auto-->
                            </tr>
                            
                        </tbody>
                    </table>
                </div> 
            </div>
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

<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        LAPORAN HUTANG
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Periode Laporan</label>
            </div>
            <div class="preview">
                <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
            </div>
        </form>
    </div>



<div class="grid grid-cols-4 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div>
    <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No Ringkos</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Tanggal Invoice</th> <!--dari inputan finance, tanggal di invoice-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Jatuh Tempo</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Perusahaan</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Client</th> <!--query ringkos nama client-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No.Invoice</th> <!--Tanggal SP2D-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No.MO</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No.RF</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Rekening Media</th> 
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Media</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Giro Sudah</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Giro Belum</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Ket</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">ringkos 1</td>
                                <td class="border">01 feb 2021</td>
                                <td class="border">14 feb 2021</td>
                                <td class="border">Satria Media</td>
                                <td class="border">Direktorat A</td> 
                                <td class="border">001 MNC</td>
                                <td class="border">110 MNC</td>
                                <td class="border">RF 01</td>
                                <td class="border">123456 BCA MNCTV</td>
                                <td class="border">i News</td>
                                <td class="border">2.000.000</td>
                                <td class="border">0</td>
                                <td class="border"> </td>
                            </tr>
                            <tr>
                                <td class="border">ringkos 2</td>
                                <td class="border">02 feb 2021</td>
                                <td class="border">15 feb 2021</td>
                                <td class="border">Kangfidio</td>
                                <td class="border">Direktorat B</td> 
                                <td class="border">003 MNC</td>
                                <td class="border">189 MNC</td>
                                <td class="border">RF 02</td>
                                <td class="border">123456 BCA MNCTV</td>
                                <td class="border">i News</td>
                                <td class="border">0</td>
                                <td class="border">2.000.000</td>
                                <td class="border"> </td>
                            </tr>

                            <tr>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td> 
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border">Jumlah :</td>
                                <td class="border">2.000.000</td>
                                <td class="border">2.000.000</td>
                                <td class="border"> </td>
                            </tr>
                            
                            

                            
                        </tbody>
                    </table>
                </div> 
            </div>
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

<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        JADWAL SP2D
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Periode Laporan</label>
            </div>
            <div class="preview">
                <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
            </div>
        </form>
    </div>



<div class="grid grid-cols-4 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div>
    <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Judul Kegiatan</th> 
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Perusahaan</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nilai Kontrak</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">DPP</th> <!--rumus pajak-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">PPN 10%</th> 
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">PPH 2%</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nilai SP2D</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Prof Sharing 2,5%</th> <!--2,5% dari SP2D-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Income</th> <!--SP2D yang sudah dicairkan/diterima finance-->
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Pay Prod</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Online 40%</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Luar Ruang 40%</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">TV Nas 20%</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">Advetorial 1</td>
                                <td class="border">Kangfidio</td>
                                <td class="border">1.000.000</td>
                                <td class="border"> nilai DPP </td> <!--auto-->
                                <td class="border"> nilai PPN </td> <!--auto-->
                                <td class="border"> nilai PPH </td> <!--auto-->
                                <td class="border">9.600.000</td>
                                <td class="border">0 </td> <!--2,5% dari SP2D-->
                                <td class="border">1.000.000 </td> <!--SP2D yang sudah dicairkan/diterima finance-->
                                <td class="border">400.000 </td>
                                <td class="border">0 </td>
                                <td class="border">0 </td>
                                <td class="border">0 </td>
                            </tr>

                            <tr>
                                <td class="border"> </td>
                                <td class="border">Jumlah :</td>
                                <td class="border">1.000.000</td>
                                <td class="border"> 0 </td> 
                                <td class="border"> 0 </td> 
                                <td class="border"> 0 </td> 
                                <td class="border">9.600.000</td>
                                <td class="border">0 </td>
                                <td class="border">1.000.000 </td> 
                                <td class="border">400.000 </td>
                                <td class="border">0 </td>
                                <td class="border">0 </td>
                                <td class="border">0 </td>
                            </tr>

                            <tr>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td> 
                                <td class="border"> </td> 
                                <td class="border"> </td> 
                                <td class="border"> </td>
                                <td class="border"> </td> 
                                <td class="border">Total Placement : </td> 
                                <td class="border">10</td>
                                <td class="border">40%</td>
                                <td class="border">30%</td>
                                <td class="border">30%</td>
                            </tr>
                            
                            

                            
                        </tbody>
                    </table>
                </div> 
            </div>
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