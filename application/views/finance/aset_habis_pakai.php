<!-- BEGIN : konten -->
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        ASET  HABIS PAKAI
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
                                    <div>
                                        <label for="regular-form-1" class="form-label">Kategori</label>
                                        <select data-placeholder="Select your favorite actors" name="kategori" class="tom-select w-full">
                                            <option value="Kategori1">Kategori 1</option>
                                            <option value="Kategori2">Kategori 2</option>
                                            <option value="Kategori3">Kategori 3</option>
                                        </select></br>
                                        <label for="nama_item" class="form-label">Nama Item</label>
                                        <input id="nama_item" type="text" name="nama_item" class="form-control w-full" placeholder="Input text"></br>
                                        <label for="regular-form-3" class="form-label">Tanggal Beli</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <div class="relative w-72 mx-auto">
                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                                </div>
                                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                            </div>
                                        </div></br>
                                        <label for="hrg_beli" class="form-label">Harga Beli</label>
                                        <input id="hrg_beli" type="text" name="hrg_beli" class="form-control w-full" placeholder="Input text"></br>
                                        <label for="nilai_peny" class="form-label">Nilai Penyusutan</label>
                                        <input id="nilai_peny" type="text" name="nilai_peny" class="form-control w-full" disabled></br>
                                        <label for="nilai_ini" class="form-label">Nilai Saat ini</label>
                                        <input id="nilai_ini" type="text" name="nilai_ini" class="form-control w-full" disabled></br>
                                        <label for="tgl_zero" class="form-label">Tanggal Zero</label>
                                        <input id="tgl_zero" type="text" name="tgl_zero" class="form-control w-full" disabled></br>
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
                    <option value="Kategori_1">Kategori 1</option>
                    <option value="Kategori_2">Kategori 2</option>
                    <option value="Kategori_3">Kategori 3</option>
                    <option value="Kategori_4">Kategori 4</option>
                </select>
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
                                <th class="border border-b-2 dark:border-dark-5">Kategori</th>
                                <th class="border border-b-2 dark:border-dark-5">Nama Item</th>
                                <th class="border border-b-2 dark:border-dark-5">Tanggal Beli</th>
                                <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-200">
                                <td class="border">1</td>
                                <td class="border">Kategori 1</td>
                                <td class="border">Item 1</td>
                                <td class="border">25/082019</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('finance/detail_penyusutan') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                        Detail </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">2</td>
                                <td class="border">Kategori 2</td>
                                <td class="border">Item 2</td>
                                <td class="border">24/082019</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('finance/detail_penyusutan') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                        Detail </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">3</td>
                                <td class="border">Kategori 3</td>
                                <td class="border">Item 3</td>
                                <td class="border">26/082019</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('finance/detail_penyusutan') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                        Detail </a>
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