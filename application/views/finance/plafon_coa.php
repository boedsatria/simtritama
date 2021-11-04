<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        PLAFON DAN COA
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <div id="button-modal" class="p-5">
            <div class="text-center">
                <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="btn btn-primary">Tambah Data</a>
            </div>
            <!-- BEGIN: Modal Content -->
            <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                        <div class="modal-body p-0">
                            <div class="p-5 text-left">
                                <div>
                                    <label for="coa" class="form-label mt-2">COA</label>
                                    <input id="coa" type="text" name="coa" class="form-control w-full" placeholder="Input text">
                                    <label for="deskripsi_coa" class="form-label mt-2">Deskripsi</label>
                                    <input id="deskripsi_coa" type="text" name="wilayah_coa" class="form-control w-full" placeholder="Input text">
                                    <label for="limit_anggaran" class="form-label mt-2">Limit Anggaran</label>
                                    <input id="limit_anggaran" type="text" name="limit_anggaran" class="form-control w-full" placeholder="Input text">
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
                            <th class="border border-b-2 dark:border-dark-5">COA</th>
                            <th class="border border-b-2 dark:border-dark-5">Deskripsi</th>
                            <th class="border border-b-2 dark:border-dark-5">Limit Anggaran</th>
                            <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-200">
                            <td class="border">1</td>
                            <td class="border">1113</td>
                            <td class="border">Petty Banten</td>
                            <td class="border">Rp.1000,-</td>
                            <td class="border text-center">
                                <button class="btn btn-sm btn-primary w-24 mr-1 mb-2">Edit</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="border">2</td>
                            <td class="border">6118</td>
                            <td class="border">Belanja Modal</td>
                            <td class="border">Rp.1200,-</td>
                            <td class="border text-center">
                                <button class="btn btn-sm btn-primary w-24 mr-1 mb-2">Edit</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="border">3</td>
                            <td class="border">7101</td>
                            <td class="border">Gaji Karyawan</td>
                            <td class="border">Rp.800,-</td>
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