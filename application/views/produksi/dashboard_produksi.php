<!-- BEGIN: Responsive Table -->
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        PROGRESS BAR
    </h2>
</div>
<div class="intro-y box mt-5">
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>No.</th>
                            <th>No. Ringkos</th>
                            <th>Judul Pekerjaan</th>
                            <th>Progress</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr class="border-b">
                            <td>1</td>
                            <td>1234</td>
                            <td>Keselamatan Kerja</td>
                            <td class="w-full">
                                <div class="progress-bar w-1/4 bg-theme-6 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Brief OK</div>
                            </td>
                            <td>
                                <a href="<?= base_url('produksi/detail_job_order') ?>" class="btn btn-sm w-24 btn-primary">
                                    Lanjutkan </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td>2</td>
                            <td>2345</td>
                            <td>K-3 indoor</td>
                            <td>
                                <div class="progress-bar w-2/4 bg-theme-12 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">submit hasil</div>
                            </td>
                            <td>
                                <a href="<?= base_url('produksi/detail_job_order') ?>" class="btn btn-sm w-24 btn-primary">
                                    Lanjutkan </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td>3</td>
                            <td>3456</td>
                            <td>K-3 outdoor</td>
                            <td>
                                <div class="progress-bar w-3/4 bg-theme-1 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">hasil Approved</div>
                            </td>
                            <td>
                                <a href="<?= base_url('produksi/detail_job_order') ?>" class="btn btn-sm w-24 btn-primary">
                                    Lanjutkan </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td>4</td>
                            <td>4567</td>
                            <td>K-3 ketinggian</td>
                            <td>
                                <div class="progress-bar w-4/4 bg-theme-9 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Selesai</div>
                            </td>
                            <td>
                                <a href="<?= base_url('produksi/detail_job_order') ?>" class="btn btn-sm w-24 btn-primary">
                                    Lanjutkan </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- BEGIN: Pagination -->
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
<!-- END: Responsive Table -->