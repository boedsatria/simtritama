				<!-- BEGIN : konten -->
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        DATABASE MEDIA
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
                                                            <div class="sm:flex items-center sm:mr-4">
                                                             <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Kategori</label>
                                                                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                                                    <option value="Kementerian">TV Nasional</option>
                                                                    <option value="Direktorat">TV Lokal</option>
                                                                    <option value="BUMN">Radio Nasional</option>
                                                                    <option value="Lembaga">Radio Lokal/option>
                                                                </select>
                                                             <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
                                                                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                                                    <option value="Kementerian">DKI Jakarta</option>
                                                                    <option value="Direktorat">Jawa Barat</option>
                                                                    <option value="BUMN">Jawa Tengah</option>
                                                                    <option value="Lembaga">Jawa Timur</option>
                                                                </select>
                                                            </div>
                                                            <label for="crud-form-1" class="form-label">Nama Media</label>
                                                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                                            <label for="crud-form-1" class="form-label">Email Media</label>
                                                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                                            <label for="crud-form-1" class="form-label">Nomor Telephone Media</label>
                                                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                                            <label for="crud-form-1" class="form-label">Alamat Media</label>
                                                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                                            <div class="preview">
                                                            <label for="crud-form-1" class="form-label">Upload Foto Media</label>
                                                                <form data-single="true" action="/file-upload" class="dropzone">
                                                                    <div class="fallback">
                                                                        <input name="file" type="file" />
                                                                    </div>
                                                                    <div class="dz-message" data-dz-message>
                                                                        <div class="text-lg font-medium">Seret file disini atau click untuk membuka file explorer</div>
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
                    </div>
                </div>
                <!-- BEGIN: HTML Table Data -->
                    <!-- BEGIN: filter -->
                <div class="intro-y box p-5 mt-5">
                    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
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
                                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                                    <option value="Aktif" selected>Aktif</option>
                                    <option value="Non Aktif">Non Aktif</option>
                                </select>
                            </div>
                            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
                                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                                    <option value="DKI Jakarta" selected>DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Barat">Jawa Tengah</option>
                                </select>
                            </div>
                            <div class="mt-2 xl:mt-0">
                                <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Go</button>
                                <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
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
                    <div class="overflow-x-auto scrollbar-hidden">
                        <div id="tabulator" class="mt-5 table-report table-report--tabulator"></div>
                    </div>
                </div>
                <!-- END: HTML Table Data -->
            </div>
            <!-- END: Content -->