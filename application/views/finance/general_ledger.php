<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        INPUT DATA GENERAL LEDGER
        <!--JUDUL PAGE-->
    </h2>
</div> <br>
<!-- END JUDUL-->

<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
    <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Tipe General</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="DKI Jakarta" selected="">Aktiva</option>
                    <option value="Jawa Barat">Kewajiban</option>
                    <option value="Jawa Barat">Modal</option>
                    <option value="Jawa Barat">Pendapatan</option>
                    <option value="Jawa Barat">Beban</option>
                </select>
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
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Tanggal</label>
                            <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Nama Transaksi</label>
                            <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">No.Ref</label>
                            <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Masuk</label>
                            <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Keluar</label>
                            <input id="regular-form-1" type="text" class="form-control w-56 block mx-auto" placeholder="RUMUS">
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> input</button>
                        </div>
                    </form>
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