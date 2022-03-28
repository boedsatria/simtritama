<!-- BEGIN: Responsive Table -->
<div class="intro-y box mt-5">
    <div class="p-5" id="responsive-table">
        <h2 class="font-medium text-base mr-auto">
            Tabel Patty Cash
        </h2></br>
        <div class="sm:flex items-center sm:mr-4">
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
        </div></br>
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>COA</th>
                            <th>Patty Cash</th>
                            <th>Masuk</th>
                            <th>Keluar</th>
                            <th>Saldo</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr class="border-b">
                            <td>1101</td>
                            <td>Pusat</td>
                            <td>xxxxxxxxxxx</td>
                            <td>xxxxxxxxxxx</td>
                            <td>xxxxxxxxxxx</td>
                            <td>
                                <a href="<?= base_url('finance/petty_cash') ?>" target="_blank" class="btn btn-sm btn-primary w-24 mr-2 mb-2">
                                    Detail </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td>1108</td>
                            <td>Jakarta</td>
                            <td>xxxxxxxxxxx</td>
                            <td>xxxxxxxxxxx</td>
                            <td>xxxxxxxxxxx</td>
                            <td>
                                <a href="<?= base_url('finance/petty_cash') ?>" class="btn btn-sm btn-primary w-24 mr-2 mb-2">
                                    Detail </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1109</td>
                            <td>Banten</td>
                            <td>xxxxxxxxxxx</td>
                            <td>xxxxxxxxxxx</td>
                            <td>xxxxxxxxxxx</td>
                            <td>
                                <a href="<?= base_url('finance/petty_cash') ?>" class="btn btn-sm btn-primary w-24 mr-2 mb-2">
                                    Detail </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- END: Responsive Table -->





<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">

            <!-- BEGIN: PROJECT TRACKING -->
            <div class="col-span-6 xl:col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        FINANCIAL TRACKING
                    </h2>
                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                        <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                        <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by COA">
                    </div>
                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                        <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                        <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by USER">
                    </div>
                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                        <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                        <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by DATE">
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5">
                    <div>List Transaksi berdasarkan COA , Pengguna anggaran , Tanggal Transaksi</div>
                    <div class="mt-5 bg-gray-200 rounded-md"></div>
                </div>
            </div>
            <!-- END: PROJECT TRACKING -->



            <!-- BEGIN: b/c -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        BENEFIT AND COST RATIO
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="folder-plus" class="report-box__icon text-theme-10"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project Berkontrak belum berjalan"> 20% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">2.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL BIAYA PRODUKSI</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="briefcase" class="report-box__icon text-theme-11"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project dalam proses pengerjaan"> 50% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">4.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL BIAYA PLACEMENT</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="archive" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project selesai sampai dengan pembayaran"> 30% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">10.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL PENDAPATAN</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="database" class="report-box__icon text-theme-9"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="(Biaya Produksi + Biaya Placement) / Pendapatan"> 100% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">1.667</div>
                                <div class="text-base text-gray-600 mt-1">B/C RASIO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: b/c -->

            

            <!-- BEGIN: r/c -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        REVENUE AND COST RATIO
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="folder-plus" class="report-box__icon text-theme-10"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Seluruh biaya tetap"> 20% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">2.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL BIAYA TETAP</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="briefcase" class="report-box__icon text-theme-11"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Seluruh biaya tidak tetap"> 50% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">4.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL BIAYA VARIABEL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="archive" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project selesai sampai dengan pembayaran"> 30% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">10.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL PENERIMAAN</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="database" class="report-box__icon text-theme-9"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Total Penerimaan/Biaya (tetap + Variabel)"> Critical Value = 1 <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">1.667</div>
                                <div class="text-base text-gray-600 mt-1">R/C RASIO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: r/c -->


            <!-- BEGIN: r/c -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        PROFITABILITY
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="folder-plus" class="report-box__icon text-theme-10"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Seluruh biaya tetap"> 20% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">2.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL HUTANG</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="briefcase" class="report-box__icon text-theme-11"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Seluruh biaya tidak tetap"> 50% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">4.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL PIUTANG</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="archive" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project selesai sampai dengan pembayaran"> 30% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">10.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL PENGELUARAN</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="archive" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project selesai sampai dengan pembayaran"> 30% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">10.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL PENERIMAAN</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="archive" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project selesai sampai dengan pembayaran"> 30% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">10.000.000</div>
                                <div class="text-base text-gray-600 mt-1">TOTAL PENDAPATAN</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="archive" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project selesai sampai dengan pembayaran"> 30% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">10.000.000</div>
                                <div class="text-base text-gray-600 mt-1">SALDO SAAT INI</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="archive" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Project selesai sampai dengan pembayaran"> 30% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">10.000.000</div>
                                <div class="text-base text-gray-600 mt-1">KEUNTUNGAN SAAT INI</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="database" class="report-box__icon text-theme-9"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="Total Penerimaan/Biaya (tetap + Variabel)"> Critical Value = 1 <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">1.667</div>
                                <div class="text-base text-gray-600 mt-1">KEUNTUNGAN ESTIMATE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: r/c -->
            
            

                        

        </div>
    </div>
    <div class="col-span-12 2xl:col-span-3">
        <div class="2xl:border-l border-theme-5 -mb-10 pb-10">
            <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                
            <!-- BEGIN: PAID PROJECT -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            PIUTANG TERBAYAR
                        </h2>
                    </div>
                    <div class="mt-5">
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Clients - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">Tanggal pembayaran</div>
                                    <div class="text-theme-9">Rp jumlah bayar</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Clients - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">24 June 2022</div>
                                    <div class="text-theme-6">Rp jumlah bayar</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Clients - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">21 November 2020</div>
                                    <div class="text-theme-6">Rp jumlah bayar</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Clients - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">26 September 2020</div>
                                    <div class="text-theme-6">Rp jumlah bayar</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Clients - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">9 March 2021</div>
                                    <div class="text-theme-6">Rp jumlah bayar</div>
                                </div>
                                
                            </div>
                        </div>
                        <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
                    </div>
                </div>
                <!-- END: PAID PROJECT -->

                <!-- BEGIN: PAID PROJECT -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            HUTANG TERBAYAR
                        </h2>
                    </div>
                    <div class="mt-5">
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Vendor/Media - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">Tanggal pembayaran</div>
                                    <div class="text-theme-9">Rp jumlah bayar</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Vendor/Media - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">24 June 2022</div>
                                    <div class="text-theme-6">Rp jumlah bayar</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Vendor/Media - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">21 November 2020</div>
                                    <div class="text-theme-6">Rp jumlah bayar</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Vendor/Media - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">26 September 2020</div>
                                    <div class="text-theme-6">Rp jumlah bayar</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Nama Vendor/Media - Nomer Ringkos</div>
                                    <div class="text-gray-600 text-xs mt-0.5">9 March 2021</div>
                                    <div class="text-theme-6">Rp jumlah bayar</div>
                                </div>
                                
                            </div>
                        </div>
                        <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
                    </div>
                </div>
                <!-- END: PAID PROJECT -->

                
                
            </div>
        </div>
    </div>
</div>
</div>
<!-- END: Content -->
