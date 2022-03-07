<!-- BEGIN : konten -->
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        HUTANG DAN PIUTANG
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

        
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<!-- BEGIN: filter -->
<div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
    <h2 class="text-lg font-medium mr-auto">
        HUTANG
    </h2> </div>
    <div>
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">

            <div class="sm:flex items-center sm:mr-4">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Rentang Tanggal Transaksi</label>
                    <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
                </div>

            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Media</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Kategori_1">Semua Media</option>
                    <option value="Kategori_1">Data Media 1</option>
                    <option value="Kategori_2">Data Media 2</option>
                    <option value="Kategori_1">Data Media 3</option>
                    <option value="Kategori_2">Data Media 4</option>
                </select>
            </div>
            <div id="horizontal-form" class="p-2">
            <div class="preview">
                <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i> Search </button>
            </div>
        </div>

    </div>
    <div class="intro-y box p-5 mt-5">
        <!-- BEGIN: Hoverable Table -->
        <div class="p-5" id="hoverable-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="border border-b-2 dark:border-dark-5 w-1">No.</th>
                                <th class="border border-b-2 dark:border-dark-5">No Ringkos - No Invoice</th>
                                <th class="border border-b-2 dark:border-dark-5">Nama Transaksi</th> <!--Judul Project + Jenis Pekerjaan ( produksi or placement) + Nama Transaksi : contoh : Advetorial Keselamatan Kerja + Placement + Media Trans TV-->
                                <th class="border border-b-2 dark:border-dark-5">Tanggal Transaksi</th>
                                <th class="border border-b-2 dark:border-dark-5">Nilai Hutang</th>
                                <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                                <th class="border border-b-2 dark:border-dark-5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-200">
                                <td class="border">1</td>
                                <td class="border">DEPSOS 001/01/02/2022 - TransTV 001/01/03/2022</td>
                                <td class="border">Advetorial Keselamatan Kerja - Placement - Trans TV</td>
                                <td class="border">01/03/2022</td>
                                <td class="border">100.000.000</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('finance/detail_hutang_dan_piutang') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>Detail </a>
                                </td>
                                <td class="border text-center">
                                <!--begin modal-->
                                <div id="button-modal" class="p-5">
                                    <div class="preview">
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-1" class="btn btn-primary">Update Status</a> </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="button-modal-1" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                                    <div class="modal-body p-0">
                                                        <div class="p-5 text-left">
                                                            <div>
                                                                <label for="regular-form-1" class="form-label">Status</label>
                                                                <select data-placeholder="Select your favorite actors" name="kategori" class="tom-select w-full">
                                                                    <option value="Kategori1">LUNAS</option>
                                                                </select></br>
                                                                <div>
                                                                    <label for="regular-form-3" class="form-label">Tanggal Transaksi</label>
                                                                        <div class="grid grid-cols-12 gap-2">
                                                                            <div class="relative w-72 mx-auto">
                                                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                                                                </div>
                                                                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                                                            </div>
                                                                        </div></br>
                                                                    </div>
                                                                </div>
                                                                <div>    
                                                                    <label for="regular-form-1" class="form-label">Bukti Transaksi</label>
                                                                    <form data-single="true" action="/file-upload" class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" />
                                                                        </div>
                                                                        <div class="dz-message" data-dz-message>
                                                                            <div class="text-lg font-medium">Seret file disini atau click untuk membuka file explorer</div>
                                                                            <div class="text-gray-600"> Unggah berkas transaksi <span class="font-medium">format PDF</span> atau image (jpg,png,bmp) </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <button type="button" data-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal konten-->
                                    </div>
                                </div>
                                <!--end modal-->
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">2</td>
                                <td class="border">DEPSOS 001/01/02/2022 - Trans7 001/01/03/2022</td>
                                <td class="border">Advetorial Keselamatan Kerja - Placement - Trans 7</td>
                                <td class="border">01/03/2022</td>
                                <td class="border">100.000.000</td>
                                <td class="border text-center">
                                <a href="<?= base_url('finance/detail_hutang_dan_piutang') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>Detail </a>
                                </td>
                                <td class="border text-center">
                                <!--begin modal-->
                                <div id="button-modal" class="p-5">
                                    <div class="preview">
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-2" class="btn btn-primary">Update Status</a> </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="button-modal-2" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                                    <div class="modal-body p-0">
                                                        <div class="p-5 text-left">
                                                            <div>
                                                                <label for="regular-form-1" class="form-label">Status</label>
                                                                <select data-placeholder="Select your favorite actors" name="kategori" class="tom-select w-full">
                                                                    <option value="Kategori1">LUNAS</option>
                                                                </select></br>
                                                                <div>
                                                                    <label for="regular-form-3" class="form-label">Tanggal Transaksi</label>
                                                                        <div class="grid grid-cols-12 gap-2">
                                                                            <div class="relative w-72 mx-auto">
                                                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                                                                </div>
                                                                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                                                            </div>
                                                                        </div></br>
                                                                    </div>
                                                                </div>
                                                                <div>    
                                                                    <label for="regular-form-1" class="form-label">Bukti Transaksi</label>
                                                                    <form data-single="true" action="/file-upload" class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" />
                                                                        </div>
                                                                        <div class="dz-message" data-dz-message>
                                                                            <div class="text-lg font-medium">Seret file disini atau click untuk membuka file explorer</div>
                                                                            <div class="text-gray-600"> Unggah berkas transaksi <span class="font-medium">format PDF</span> atau image (jpg,png,bmp) </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <button type="button" data-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal konten-->
                                    </div>
                                </div>
                                <!--end modal-->
                                </td>
                                </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">2</td>
                                <td class="border">DEPSOS 001/01/02/2022 - iNews 001/01/03/2022</td>
                                <td class="border">Advetorial Keselamatan Kerja - Placement - iNews</td>
                                <td class="border">01/03/2022</td>
                                <td class="border">100.000.000</td>
                                <td class="border text-center">
                                <a href="<?= base_url('finance/detail_hutang_dan_piutang') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>Detail </a>
                                </td>
                                <td class="border text-center">
                                <!--begin modal-->
                                <div id="button-modal" class="p-5">
                                    <div class="preview">
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-3" class="btn btn-primary">Update Status</a> </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="button-modal-3" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                                    <div class="modal-body p-0">
                                                        <div class="p-5 text-left">
                                                            <div>
                                                                <label for="regular-form-1" class="form-label">Status</label>
                                                                <select data-placeholder="Select your favorite actors" name="kategori" class="tom-select w-full">
                                                                    <option value="Kategori1">LUNAS</option>
                                                                </select></br>
                                                                <div>
                                                                    <label for="regular-form-3" class="form-label">Tanggal Transaksi</label>
                                                                        <div class="grid grid-cols-12 gap-2">
                                                                            <div class="relative w-72 mx-auto">
                                                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                                                                </div>
                                                                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                                                            </div>
                                                                        </div></br>
                                                                    </div>
                                                                </div>
                                                                <div>    
                                                                    <label for="regular-form-1" class="form-label">Bukti Transaksi</label>
                                                                    <form data-single="true" action="/file-upload" class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" />
                                                                        </div>
                                                                        <div class="dz-message" data-dz-message>
                                                                            <div class="text-lg font-medium">Seret file disini atau click untuk membuka file explorer</div>
                                                                            <div class="text-gray-600"> Unggah berkas transaksi <span class="font-medium">format PDF</span> atau image (jpg,png,bmp) </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <button type="button" data-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal konten-->
                                    </div>
                                </div>
                                <!--end modal-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </form>
        <!-- END: Hoverable Table -->
    </div>
</div>
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

<!-- BEGIN: HTML Table Data -->
<!-- BEGIN: filter -->
<div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
    <h2 class="text-lg font-medium mr-auto">
        PIUTANG
    </h2> </div>
    <div>
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">

            <div class="sm:flex items-center sm:mr-4">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Rentang Tanggal Transaksi</label>
                    <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
                </div>

            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Clients</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Kategori_1">Semua Client</option>
                    <option value="Kategori_1">Data Client 1</option>
                    <option value="Kategori_2">Data Client 2</option>
                    <option value="Kategori_1">Data Client 3</option>
                    <option value="Kategori_2">Data Client 4</option>
                </select>
            </div>
            <div id="horizontal-form" class="p-2">
            <div class="preview">
                <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i> Search </button>
            </div>
        </div>

    </div>
    <div class="intro-y box p-5 mt-5">
        <!-- BEGIN: Hoverable Table -->
        <div class="p-5" id="hoverable-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="border border-b-2 dark:border-dark-5 w-1">No.</th>
                                <th class="border border-b-2 dark:border-dark-5">No Ringkos - No SP2D</th>
                                <th class="border border-b-2 dark:border-dark-5">Judul Kegiatan</th>
                                <th class="border border-b-2 dark:border-dark-5">Tanggal Transaksi</th>
                                <th class="border border-b-2 dark:border-dark-5">Nilai Piutang</th>
                                <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                                <th class="border border-b-2 dark:border-dark-5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-200">
                                <td class="border">1</td>
                                <td class="border">DEPSOS 001/01/02/2022 - SOS001.KN.01.02.22</td>
                                <td class="border">Advetorial Keselamatan Kerja</td>
                                <td class="border">01/03/2022</td>
                                <td class="border">200.000.000</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('finance/detail_hutang_dan_piutang') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>Detail </a>
                                </td>
                                <td class="border text-center">
                                <!--begin modal-->
                                <div id="button-modal" class="p-5">
                                    <div class="preview">
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-4" class="btn btn-primary">Update Status</a> </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="button-modal-4" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                                    <div class="modal-body p-0">
                                                        <div class="p-5 text-left">
                                                            <div>
                                                                <label for="regular-form-1" class="form-label">Status</label>
                                                                <select data-placeholder="Select your favorite actors" name="kategori" class="tom-select w-full">
                                                                    <option value="Kategori1">LUNAS</option>
                                                                </select></br>
                                                                <div>
                                                                    <label for="regular-form-3" class="form-label">Tanggal Transaksi</label>
                                                                        <div class="grid grid-cols-12 gap-2">
                                                                            <div class="relative w-72 mx-auto">
                                                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                                                                </div>
                                                                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                                                            </div>
                                                                        </div></br>
                                                                    </div>
                                                                </div>
                                                                <div>    
                                                                    <label for="regular-form-1" class="form-label">Bukti Transaksi</label>
                                                                    <form data-single="true" action="/file-upload" class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" />
                                                                        </div>
                                                                        <div class="dz-message" data-dz-message>
                                                                            <div class="text-lg font-medium">Seret file disini atau click untuk membuka file explorer</div>
                                                                            <div class="text-gray-600"> Unggah berkas transaksi <span class="font-medium">format PDF</span> atau image (jpg,png,bmp) </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <button type="button" data-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal konten-->
                                    </div>
                                </div>
                                <!--end modal-->
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </form>
        <!-- END: Hoverable Table -->
    </div>
</div>
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