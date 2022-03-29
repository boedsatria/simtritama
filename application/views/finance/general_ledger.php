<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        GENERAL LEDGER
        <!--JUDUL PAGE-->
    </h2>
</div> <br>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
    <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">KATEGORI COA</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="DKI Jakarta" selected="">1000 HARTA</option>
                    <option value="Jawa Barat">2000 KEWAJIBAN</option>
                    <option value="Jawa Barat">3000 MODAL</option>
                    <option value="Jawa Barat">4000 PENDAPATAN</option>
                    <option value="Jawa Barat">6000 BEBAN USAHA</option>
                    <option value="Jawa Barat">7000 ENTERTAINMENT</option>
                    <option value="Jawa Barat">8000 PROFIT SHARING</option>
                    <option value="Jawa Barat">9000 REWARD KARYAWAN</option>
                </select>
        </div>
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">AKUN COA</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="DKI Jakarta" selected="">1101 Kas (Petty cash)</option>
                    <option value="Jawa Barat">1102	BRI</option>
                    <option value="Jawa Barat">1103	Piutang Usaha</option>
                    <option value="Jawa Barat">1104	Piutang Karyawan</option>
                    <option value="Jawa Barat">1105	BCA</option>
                    <option value="Jawa Barat">1106	Inventaris</option>
                    <option value="Jawa Barat">1107	Penyusutan Inventaris</option>
                    <option value="Jawa Barat">Tampilkan Semua akun dalam kategori Harta</option>
                </select>
        </div>
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Periode GL</label>
            </div>
            <div class="preview">
                <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
            </div>
        </form>
    </form>
</div>



<div class="grid grid-cols-4 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div>
    <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto">
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
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">Top Up Pettycash bulan nganu</td>
                                <td class="border">dgz002</td>
                                <td class="border">20.000.000</td>
                                <td class="border"> - </td>
                            </tr>
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">Transaksi Pettycash 2 belanja nganu</td>
                                <td class="border">dgz0021</td>
                                <td class="border"> </td>
                                <td class="border">10.000.000</td>
                            </tr>
                            <tr>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border">Total</td>
                                <td class="border">20.000.000 </td>
                                <td class="border">10.000.000</td>
                            </tr>
                            <tr>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border">Saldo Akhir</td>
                                <td class="border">10.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>

            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="overflow-x-auto">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">HARTA - BRI</label>
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">KODE AKUN 1102</label>
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
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">Transaksi transfer om Boss</td>
                                <td class="border">dgz002</td>
                                <td class="border">20.000.000</td>
                                <td class="border"> - </td>
                            </tr>
                            <tr>
                                <td class="border">dd/mm/yyyy</td>
                                <td class="border">Transaksi transfer ke om Boss yang itu</td>
                                <td class="border">dgz0021</td>
                                <td class="border"> </td>
                                <td class="border">10.000.000</td>
                            </tr>
                            <tr>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border">Total</td>
                                <td class="border">20.000.000 </td>
                                <td class="border">10.000.000</td>
                            </tr>
                            <tr>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border"> </td>
                                <td class="border">Saldo Akhir</td>
                                <td class="border">10.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
            
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