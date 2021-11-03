<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Real Placement -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Real Placement
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                    <div class="mt-8">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            <span class="truncate">Media TV</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">20%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                            <span class="truncate">Media Digital</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">50%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                            <span class="truncate">Media Luar Ruang</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">30%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Real Placement -->
            <!-- BEGIN: Target Placement -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Target Placement
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                    <div class="mt-8">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            <span class="truncate">Media TV</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">30%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                            <span class="truncate">Media Digital</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">35%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                            <span class="truncate">Media Luar Ruang</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">35%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Target Placement -->
        </div>
    </div>
</div>

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
                            <th>Versi</th>
                            <th>Progress</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr class="border-b">
                            <td>1</td>
                            <td>1234</td>
                            <td>Keselamatan Kerja</td>
                            <td></td>
                            <td class="w-full">
                                <div class="progress-bar w-1/4 bg-theme-6 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">HPS OK</div>
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
                            <td></td>
                            <td>
                                <div class="progress-bar w-2/4 bg-theme-12 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">MO OK</div>
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
                            <td></td>
                            <td>
                                <div class="progress-bar w-3/4 bg-theme-1 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">LogProof OK</div>
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
                            <td></td>
                            <td>
                                <div class="progress-bar w-4/4 bg-theme-9 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Selesai</div>
                            </td>
                            <td>

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

<!-- BEGIN: Responsive Table -->
<div class="intro-y box mt-5">
    <div class="p-5" id="responsive-table">
        <div>
            <h2 class="font-medium text-base mr-auto">
                Ketersediaan Media Placement
            </h2></br>
        </div>
        <div class="sm:flex items-center sm:mr-4">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Bulan</label>
            <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                <?php for ($x = 1; $x <= 12; $x++) : ?>
                    <option value="<?= $x; ?>"><?= monthOnly_indo('2021-' . $x . '-01') ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>No.</th>
                            <th>Nama Media</th>
                            <?php for ($x = 1; $x <= 31; $x++) : ?>
                                <th><?= $x; ?></th>
                            <?php endfor; ?>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>1</td>
                            <td>RCTI</td>
                            <?php for ($x = 1; $x <= 31; $x++) : ?>
                                <td></td>
                            <?php endfor; ?>

                        </tr>
                    </tbody>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>2</td>
                            <td>SCTV</td>
                            <?php for ($x = 1; $x <= 31; $x++) : ?>
                                <td></td>
                            <?php endfor; ?>

                        </tr>
                    </tbody>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>3</td>
                            <td>Net TV</td>
                            <?php for ($x = 1; $x <= 31; $x++) : ?>
                                <td></td>
                            <?php endfor; ?>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="source-code hidden">
            <button data-target="#copy-responsive-table" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
            <div class="overflow-y-auto mt-3 rounded-md">
                <pre class="source-preview" id="copy-responsive-table"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;overflow-x-auto&quot;HTMLCloseTag HTMLOpenTagtable class=&quot;table&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagEmailHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagAddressHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagangelinajolie@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag260 W. Storm Street New York, NY 10025.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagbradpitt@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag47 Division St. Buffalo, NY 14241.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagcharliehunnam@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag8023 Amerige Street Harriman, NY 10926.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
            </div>
        </div>
    </div>
</div>
<!-- END: Responsive Table -->