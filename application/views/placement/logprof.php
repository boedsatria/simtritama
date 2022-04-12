<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        LOGPROOF
    </h2>
</div></br>
<!-- BEGIN: Responsive Table -->
<div class="intro-y box mt-5">
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>No.</th>
                            <th>No. Ringkos</th>
                            <th>Nama Direktorat</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Jumlah Versi</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>1</td>
                            <td>123456789</td>
                            <td>Kementerian Agama</td>
                            <td>11 Maret 2021</td>
                            <td>11 April 2021</td>
                            <td>5 Versi</td>
                            <td>
                                <a href="<?= base_url('placement/detail_logproof') ?>" class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
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