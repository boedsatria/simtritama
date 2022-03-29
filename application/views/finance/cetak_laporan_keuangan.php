                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        NERACA KEUANGAN
                    </h2>
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial ml-2 mr-2">Periode Neraca</label>
        <div class="relative w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                <i data-feather="calendar" class="w-4 h-4"></i>
            </div>
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
            <input name="tgl_filter" data-daterange="true" class="datepicker form-control pl-12" value="<?= $mulai.' - '.$selesai; ?>">
        </div>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-4">
                        <!-- BEGIN: NERACA SALDO -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    NERACA SALDO
                                </h2>
                            </div>
                            <div class="p-5" id="bordered-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                    <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">COA</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border">1101 Pattycash</td>
                                                    <td class="border"> </td>
                                                    <td class="border">1.000.000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">2101 Hutang Usaha</td>
                                                    <td class="border"> </td>
                                                    <td class="border">9.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">3101 Modal</td>
                                                    <td class="border">10.000.000 </td>
                                                    <td class="border"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Masuk</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Keluar</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: NERACA SALDO -->
                        </div>
                    <div class="intro-y col-span-12 lg:col-span-4">
                        <!-- BEGIN: NERACA PENYESUAIAN -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    NERACA PENYESUAIAN
                                </h2>
                            
                            <!--begin modal add-->
                            <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="btn btn-primary">Input</a> </div>

<div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- BEGIN: Modal Header -->
                                                <div class="modal-header">
                                                    <h2 class="font-medium text-base mr-auto">
                                                        Neraca Penyesuaian
                                                    </h2>
                                                </div>
                                                <!-- END: Modal Header -->
                                                <!-- BEGIN: Modal Body -->
                                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                                <div class="col-span-12 sm:col-span-6">
                                                        <label for="modal-form-6" class="form-label">COA</label>
                                                        <select id="modal-form-6" class="form-select">
                                                            <option>1101 Pettycash</option>
                                                            <option>2101 Pendapatan</option>
                                                            <option>3101 Modal</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label for="modal-form-6" class="form-label">Type Transaksi</label>
                                                        <select id="modal-form-6" class="form-select">
                                                            <option>Masuk</option>
                                                            <option>Keluar</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-12">
                                                        <label for="modal-form-3" class="form-label">Nominal</label>
                                                        <input id="modal-form-3" type="text" class="form-control" placeholder="Important Meeting">
                                                    </div>
                                                </div>
                                                <!-- END: Modal Body -->
                                                <!-- BEGIN: Modal Footer -->
                                                <div class="modal-footer text-right">
                                                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                                    <button type="button" class="btn btn-primary w-20">Simpan</button>
                                                </div>
                                                <!-- END: Modal Footer -->
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                            <!--end modal add-->
                            <div class="p-5" id="bordered-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                    <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">COA</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border">1101 Pattycash</td>
                                                    <td class="border"> </td>
                                                    <td class="border">1.000.000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">2101 Hutang Usaha</td>
                                                    <td class="border"> </td>
                                                    <td class="border">9.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">3101 Modal</td>
                                                    <td class="border">10.000.000 </td>
                                                    <td class="border"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Masuk</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Keluar</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: NERACA PENYESUAIAN -->
                        </div>
                    <div class="intro-y col-span-12 lg:col-span-4">
                        <!-- BEGIN: NERACA SETELAH PENYESUAIAN -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    NERACA SETELAH PENYESUAIAN
                                </h2>
                            </div>
                            <div class="p-5" id="bordered-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                    <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">COA</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border">1101 Pattycash</td>
                                                    <td class="border"> </td>
                                                    <td class="border">1.000.000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">2101 Hutang Usaha</td>
                                                    <td class="border"> </td>
                                                    <td class="border">9.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">3101 Modal</td>
                                                    <td class="border">10.000.000 </td>
                                                    <td class="border"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Masuk</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Keluar</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: NERACA SETELAH PENYESUAIAN -->
                        </div>
                    <div class="intro-y col-span-12 lg:col-span-4">
                        <!-- BEGIN: NERACA LABA RUGI -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    NERACA L/R
                                </h2>
                            </div>
                            <div class="p-5" id="bordered-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">COA</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border">1101 Pattycash</td>
                                                    <td class="border"> </td>
                                                    <td class="border">1.000.000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">2101 Hutang Usaha</td>
                                                    <td class="border"> </td>
                                                    <td class="border">9.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">3101 Modal</td>
                                                    <td class="border">10.000.000 </td>
                                                    <td class="border"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Masuk</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Keluar</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">LABA</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: NERACA LABA RUGI -->
                        </div>
                    <div class="intro-y col-span-12 lg:col-span-4">
                        <!-- BEGIN: NERACA -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    NERACA AKHIR
                                </h2>
                            </div>
                            <div class="p-5" id="bordered-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">COA</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border">1101 Pattycash</td>
                                                    <td class="border"> </td>
                                                    <td class="border">1.000.000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">2101 Hutang Usaha</td>
                                                    <td class="border"> </td>
                                                    <td class="border">9.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">3101 Modal</td>
                                                    <td class="border">10.000.000 </td>
                                                    <td class="border"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Masuk</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Keluar</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">LABA</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: NERACA  -->
                        </div>
                    <div class="intro-y col-span-12 lg:col-span-4">
                        <!-- BEGIN: BALANCE -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    BALANCE
                                </h2>
                            </div>
                            <div class="p-5" id="bordered-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Jenis Neraca</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Total Masuk</th>
                                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Total Keluar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border">Neraca Saldo</td>
                                                    <td class="border"> </td>
                                                    <td class="border">1.000.000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">Penyesuaian</td>
                                                    <td class="border"> </td>
                                                    <td class="border">9.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">Setelah Penyesuaian</td>
                                                    <td class="border">10.000.000 </td>
                                                    <td class="border"> </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">Neraca L/R</td>
                                                    <td class="border">10.000.000 </td>
                                                    <td class="border"> </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">Neraca Akhir</td>
                                                    <td class="border">10.000.000 </td>
                                                    <td class="border"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Masuk</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                        <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Total Keluar</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Auto" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: BALANCE -->                         
                    </div>
                </div>
                <div id="horizontal-form" class="p-2">
            <div class="preview">
                <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                <button class="btn btn-warning w-48 mr-2 mb-2"> <i data-feather="download" class="w-4 h-4 mr-2"></i> Download Tabel Excel </button>
            </div>
        </div>
            </div>
            <!-- END: Content -->
        </div>
        