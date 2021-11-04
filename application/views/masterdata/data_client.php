<!-- BEGIN : konten -->
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        DATABASE DIREKTORAT
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <!--begin modal-->
        <div id="button-modal" class="p-5">
            <div class="preview">
                <!-- BEGIN: Modal Toggle -->
                <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="btn btn-primary">Tambah Data</a> </div>
                <!-- END: Modal Toggle -->
                <!-- BEGIN: Modal Content -->
                <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                            <div class="modal-body p-0">
                                <div class="p-5 text-left">
                                    <i data-feather="user-plus" class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
                                    <div>
                                        <label for="crud-form-1" class="form-label">Nama Direktorat</label>
                                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                        <label for="crud-form-1" class="form-label">Wilayah/Propinsi</label>
                                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                        <label for="crud-form-1" class="form-label">N.P.W.P</label>
                                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                        <label for="crud-form-1" class="form-label">Kategori</label>
                                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                        <label for="crud-form-1" class="form-label">No Rekening</label>
                                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                        <label for="crud-form-1" class="form-label">Alamat</label>
                                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                        <label for="crud-form-1" class="form-label">Kontak Person</label>
                                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
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
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<!-- BEGIN: filter -->
<div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Kategori</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Kementerian">Kementerian</option>
                    <option value="Direktorat">Direktorat</option>
                    <option value="BUMN">BUMN</option>
                    <option value="Lembaga">Lembaga</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Status</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Aktif" selected>Aktif</option>
                    <option value="Non Aktif">Non Aktif</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="DKI Jakarta" selected>DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Barat">Jawa Tengah</option>
                </select>
            </div>
            <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16">Go</button>
                <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
            </div>
        </form>
        <div class="flex mt-5 sm:mt-0">
            <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
            <div class="dropdown w-1/2 sm:w-auto">
                <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export <i data-feather="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                <div class="dropdown-menu w-40">
                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                        <a id="tabulator-export-csv" href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export PDF </a>
                        <a id="tabulator-export-json" href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export XLSX </a>
                    </div>
                </div>
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
                                <th class="border border-b-2 dark:border-dark-5">Nama Direktorat</th>
                                <th class="border border-b-2 dark:border-dark-5">Alamat</th>
                                <th class="border border-b-2 dark:border-dark-5">Kontak Person</th>
                                <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-200">
                                <td class="border">1</td>
                                <td class="border">Kementrian Agama</td>
                                <td class="border">xxxxxxxxxxx</td>
                                <td class="border">123456789</td>
                                <td class="border text-center">
                                    <button class="btn btn-sm btn-primary w-24 mr-1 mb-2">Edit</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">2</td>
                                <td class="border">Kementrian Sosial</td>
                                <td class="border">xxxxxxxxxxx</td>
                                <td class="border">987654321</td>
                                <td class="border text-center">
                                    <button class="btn btn-sm btn-primary w-24 mr-1 mb-2">Edit</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">3</td>
                                <td class="border">Dinas Perhubungan</td>
                                <td class="border">xxxxxxxxxxx</td>
                                <td class="border">987654333</td>
                                <td class="border text-center">
                                    <button class="btn btn-sm btn-primary w-24 mr-1 mb-2">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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

        <!-- END: Hoverable Table -->
    </div>
</div>
<!-- END: HTML Table Data -->
</div>
<!-- END: Content -->