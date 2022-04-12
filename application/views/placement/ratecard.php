<div id="horizontal-form" class="p-5">
    <div class="preview">
        <div class="form-inline">
            <label class="form-label sm:w-20">Media</label>
                <select class="form-select mt-2 w-48 mr-2" aria-label="Default select example">
                    <option>Trans7</option>
                    <option>Trans TV</option>
                    <option>MNC TV</option>
                </select>
            <label class="form-label sm:w-20">Tanggal</label>
                <input data-daterange="true" class="datepicker form-control w-48 mr-2 block mx-auto">
            <button class="btn btn-primary w-48 mr-2">Cari</button>
            <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="btn btn-danger w-48 mr-2">Tambah Data</a>
        </div>
<!-- modal begin -->
        <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <a data-dismiss="modal" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-8 h-8 text-gray-500"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </a>
            <div class="modal-body p-0">
                <form action="http://localhost/simtritama/finance/buku_besar_action" method="POST" enctype="multipart/form-data">
                    <div class="p-5 text-left">
                        <div>
                            <label for="phone_media" class="form-label mt-2">Nama Media</label>
                            <select id="tabulator-html-filter-field" class="form-select w-full mt-2 form-control" name="pa">
                                                                <option value="1">Trans 7</option>
                                                                <option value="2">Trans TV</option>
                                                                <option value="3">MNC TV</option>
                                                            </select><br><br>
                            <div class="col-span-6 sm:col-span-12">
                                <label class="form-label">Tanggal REDCARD</label>
                                <div class="relative ">
                                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar w-4 h-4"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    </div>
                                    <input type="text" class="datepicker form-control pl-12" name="tgl_trans" data-single-mode="true">
                                </div>
                            </div>

                            <label for="alamat_media" class="form-label mt-2">Upload File</label>
                            <input id="alamat_media" type="file" class="form-control w-full" placeholder="Input text" name="file">

                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="submit" class="btn btn-primary w-24">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modals>





        <!-- BEGIN: Responsive Table -->
        <div class="intro-y box mt-5">
            <div class="p-5" id="responsive-table">
                <div class="preview">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                                <tr>
                                    <th>Nama file Red Card</th>
                                    <th>Tanggal File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="border-b whitespace-nowrap">
                                <tr>
                                    <td>Trans7</td>
                                    <td>25 April 2022</td>
                                    <td>
                                        <button class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>Download</button>
                                        <button class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trans7</td>
                                    <td>25 Maret 2022</td>
                                    <td>
                                        <button class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>Download</button>
                                        <button class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trans7</td>
                                    <td>25 Februari 2022</td>
                                    <td>
                                        <button class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>Download</button>
                                        <button class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trans7</td>
                                    <td>25 Januari 2022</td>
                                    <td>
                                        <button class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>Download</button>
                                        <button class="btn btn-success w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Responsive Table -->

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

