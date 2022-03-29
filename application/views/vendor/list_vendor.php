<!-- BEGIN: Responsive Table -->
<div class="intro-y box mt-5">
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>No.</th>
                            <th>Nama Vendor</th>
                            <th>Nomor Telp</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>1</td>
                            <td>peps</td>
                            <td>08121212121</td>
                            <td>Bekasi jauh pokonya</td>
                            <td>
                            <a href="http://localhost/simtritama/masterdata/detail_vendor/1" class="btn btn-sm btn-primary py-1 px-2 mr-2">Detail </a>
                            <a data-toggle="modal" data-target="#delete-modal-1" class="btn btn-sm btn-danger py-1 px-2">Delete</a>
                            <div id="delete-modal-1" class="modal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="p-5 text-center"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle w-16 h-16 text-theme-6 mx-auto mt-3"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                <div class="text-3xl mt-5">Are you sure?</div>
                                                <div class="text-gray-600 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                                            </div>
                                        <div class="px-5 pb-8 text-center"> 
                                            <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> 
                                            <a href="http://localhost/simtritama/masterdata/delete_client/1" class="btn btn-danger w-24">Delete</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
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
</div>