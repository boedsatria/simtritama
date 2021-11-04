<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        PATTY CASH
    </h2>
</div>
<div class="sm:flex items-center sm:mr-4">
    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
        <option value="">1101 - Pusat</option>
        <option value="">1108 - DKI Jakarta</option>
        <option value="">1109 - Banten</option>
    </select> &ensp;
    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Tahun</label>
    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
        <?php for ($x = 2021; $x <= 2070; $x++) : ?>
            <option value="<?= $x; ?>"><?= $x; ?></option>
        <?php endfor; ?>
    </select> &ensp;
    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Bulan</label>
    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
        <?php for ($x = 1; $x <= 12; $x++) : ?>
            <option value="<?= $x; ?>"><?= monthOnly_indo('2021-' . $x . '-01') ?></option>
        <?php endfor; ?>
    </select> &ensp;
    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Tanggal</label>
    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
        <?php for ($x = 1; $x <= 31; $x++) : ?>
            <option value="<?= $x; ?>"><?= $x; ?></option>
        <?php endfor; ?>
    </select>
    <!--begin modal-->
    <div id="button-modal" class="p-5">
        <div class="preview">
            <!-- BEGIN: Modal Toggle -->
            <div class="text-right"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="btn btn-sm btn-primary">Tambah Data</a> </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                        <div class="modal-body p-0">
                            <div class="p-5 text-left">
                                <div>
                                    <div class="sm:flex items-center sm:mr-4">
                                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Jenis Transaksi</label>
                                        <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                            <option value="Kementerian"> Masuk</option>
                                            <option value="Direktorat"> Keluar</option>

                                        </select> &ensp;
                                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
                                        <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                            <option value="Kementerian">DKI Jakarta</option>
                                            <option value="Direktorat">Jawa Barat</option>
                                            <option value="BUMN">Jawa Tengah</option>
                                            <option value="Lembaga">Jawa Timur</option>
                                        </select>
                                    </div></br>

                                    <label for="nama_media" class="form-label mt-2">Nama Transaksi</label>
                                    <input id="nama_media" type="text" name="nama_media" class="form-control w-full" placeholder="Input text">
                                    <label for="email_media" class="form-label mt-2">Jumlah Transaksi</label>
                                    <input id="email_media" type="text" name="email_media" class="form-control w-full" placeholder="Input text">
                                    <label for="phone_media" class="form-label mt-2">Nama PIC</label>
                                    <input id="phone_media" type="text" name="phone_media" class="form-control w-full" placeholder="Input text">
                                    <label for="alamat_media" class="form-label mt-2">Nama Client User</label>
                                    <input id="alamat_media" type="text" name="alamat_media" class="form-control w-full" placeholder="Input text">

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

<div class="grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Hoverable Table -->
        <div class="intro-y box mt-5">
            <div class="p-5" id="hoverable-table">
                <div class="preview">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">No.</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Transaksi</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Keluar</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Masuk</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-200">
                                    <td class="border">1</td>
                                    <td class="border">Beli Kopi</td>
                                    <td class="border">xxxxxxxx</td>
                                    <td class="border">xxxxxxxx</td>
                                    <td class="border">xxxxxxxx</td>
                                </tr>
                                <tr class="hover:bg-gray-200">
                                    <td class="border">2</td>
                                    <td class="border">Makan Malam</td>
                                    <td class="border">xxxxxxxx</td>
                                    <td class="border">xxxxxxxx</td>
                                    <td class="border">xxxxxxxx</td>
                                </tr>
                                <tr class="hover:bg-gray-200">
                                    <td class="border">3</td>
                                    <td class="border">Rapat Internal</td>
                                    <td class="border">xxxxxxxx</td>
                                    <td class="border">xxxxxxxx</td>
                                    <td class="border">xxxxxxxx</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-hoverable-table" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview" id="copy-hoverable-table"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;overflow-x-auto&quot;HTMLCloseTag HTMLOpenTagtable class=&quot;table&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;border border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtr class=&quot;hover:bg-gray-200&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtr class=&quot;hover:bg-gray-200&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtr class=&quot;hover:bg-gray-200&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border&quot;HTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
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
        </div>
        <!-- END: Hoverable Table -->
    </div>
</div>