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
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                            <div class="modal-body p-0">
                                <div class="p-5 text-left">
                                    <div>
                                        
                                        <label class="form-label mt-2">Kategori Media</label>
                                            <select id="tabulator-html-filter-type" class="form-select w-full form-control">
                                                <option value="Media Televisi" selected>Media Televisi</option>
                                                <option value="Media Digital">Media Digital</option>
                                                <option value="Media Luar Ruang">Media Luar Ruang</option>
                                            </select>
                                        <label class="form-label mt-2">Jenis Media</label>
                                            <select id="tabulator-html-filter-type" class="form-select w-full form-control">
                                            <optgroup label="Media Televisi">
                                                <option value="TV Nasional">TV Nasional</option>
                                                <option value="TV Lokal">TV Lokal</option>
                                                <option value="Radio Nasional">Radio Nasional</option>
                                            </optgroup>
                                            </select>
                                        <label class="form-label mt-2">Wilayah</label>
                                            <select id="tabulator-html-filter-type" class="form-select w-full form-control">
                                                <option value="DKI Jakarta" selected>DKI Jakarta</option>
                                                <option value="Jawa Barat">Jawa Barat</option>
                                                <option value="Jawa Tengah">Jawa Tengah</option>
                                            </select>
                                        <label for="nama_media" class="form-label mt-2">Nama Media</label>
                                        <input id="nama_media" type="text" name="nama_media" class="form-control w-full" placeholder="Input text">
                                        <label for="email_media" class="form-label mt-2">Email Media</label>
                                        <input id="email_media" type="text" name="email_media" class="form-control w-full" placeholder="Input text">
                                        <label for="phone_media" class="form-label mt-2">Nomor Telephone Media</label>
                                        <input id="phone_media" type="text" name="phone_media" class="form-control w-full" placeholder="Input text">
                                        <label for="alamat_media" class="form-label mt-2">Alamat Media</label>
                                        <input id="alamat_media" type="text" name="alamat_media" class="form-control w-full" placeholder="Input text">
                                        <label for="kordinat" class="form-label mt-2">Titik Kordinat Media</label>
                                        <input id="kordinat" type="text" name="kordinat" class="form-control w-full" placeholder="Input text">
                                        <div class="preview">
                                            <label for="foto_media" class="form-label mt-2">Upload Foto Media</label>
                                            <form data-single="true" name="foto_media" action="/file-upload" class="dropzone">
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
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">

            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-48 flex-none xl:w-auto xl:flex-initial mr-2">Kategori</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Media Televisi" selected>Media Televisi</option>
                    <option value="Media Digital">Media Digital</option>
                    <option value="Media Luar Ruang">Media Luar Ruang</option>
                </select>
            </div>

            <div class="sm:flex items-center sm:mr-4">
                <label class="w-full mr-2">Jenis Media</label>
                <select class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <optgroup label="Media Televisi">
                    <option value="TV Nasional">TV Nasional</option>
                    <option value="TV Lokal">TV Lokal</option>
                    <option value="Radio Nasional">Radio Nasional</option>
                    </optgroup>
                    
                </select>
            </div>
           
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-48 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="DKI Jakarta" selected>DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Barat">Jawa Tengah</option>
                </select>
            </div>
        </form>
    </div>
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>No.</th>
                            <th>Jenis Media</th>
                            <th>Wilayah</th>
                            <th>Nama Media</th>
                            <th>Titik Media/Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>1</td>
                            <td>xxxxxxx</td>
                            <td>xxxxxxx</td>
                            <td>xxxxxxx</td>
                            <td>xxxxxxx</td>
                            <td>
                            <a href="<?= base_url('masterdata/detail_media') ?>" class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                    Detail </a>
                            </td>
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
<!-- END: HTML Table Data -->
</div>
<!-- END: Content -->