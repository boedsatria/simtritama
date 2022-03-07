<!-- BEGIN : konten -->
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        HUTANG DAN PIUTANG
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
                                        <label for="regular-form-1" class="form-label">JENIS TRANSAKSI</label>
                                        <select data-placeholder="Select your favorite actors" name="kategori" class="tom-select w-full">
                                            <option value="Kategori1">HUTANG (quary dari invoice media dan invoice produksi)</option>
                                            <option value="Kategori2">PIUTANG (quary dari SP2D Project)</option>
                                        </select></br>
                                        <label for="nama_item" class="form-label">No.Ringkoas</label>
                                        <input id="nama_item" type="text" name="nama_item" class="form-control w-full" placeholder="Input text"></br>
                                        <label for="nilai_peny" class="form-label">Judul Kegiatan (auto)</label>
                                        <input id="nilai_peny" type="text" name="nilai_peny" class="form-control w-full" disabled></br>
                                        </div></br>
                                        <label for="hrg_beli" class="form-label">Client (auto)</label>
                                        <input id="hrg_beli" type="text" name="hrg_beli" class="form-control w-full" placeholder="Input text" disabled></br>
                                        <label for="regular-form-1" class="form-label">Jenis Sub Kegiatan (Produksi atau Placement)</label>
                                        <select data-placeholder="Select your favorite actors" name="kategori" class="tom-select w-full">
                                            <option value="Kategori1">Produksi</option>
                                            <option value="Kategori2">Placement</option>
                                        </select></br>
                                        <label for="regular-form-1" class="form-label">Abaikan kolom JENIS MEDIA, GROUP MEDIA DAN NAMA MEDIA Jika Jenis Sub Kegiatan adalah PRODUKSI</label>
                                        <label for="regular-form-1" class="form-label">Jenis Media</label>
                                        <select data-placeholder="Select your favorite actors" name="kategori" class="tom-select w-full">
                                            <option value="Kategori1">Media Televisi</option>
                                            <option value="Kategori2">Media Digital</option>
                                            <option value="Kategori2">Media Luar Ruang</option>
                                        </select></br>
                                        <label for="tgl_zero" class="form-label">Nama Group Media</label>
                                        <input id="tgl_zero" type="text" name="tgl_zero" class="form-control w-full" ></br>
                                        <label for="tgl_zero" class="form-label">Nama Media</label>
                                        <input id="tgl_zero" type="text" name="tgl_zero" class="form-control w-full" ></br>
                                        <label for="tgl_zero" class="form-label">Nomor Invoice</label>
                                        <input id="tgl_zero" type="text" name="tgl_zero" class="form-control w-full" ></br>
                                        <label for="regular-form-3" class="form-label">Tanggal Invoice</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <div class="relative w-72 mx-auto">
                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                                </div>
                                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
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
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Kategori</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Kategori_1">HUTANG (quary Invoice Media,Produksi,tagihan dll)</option>
                    <option value="Kategori_2">PIUTANG (Quary dari SP2D, Dana Talangan, Kasbon)</option>
                    <option value="Kategori_2">Tampilkan Semua Data</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Rentang Tanggal Transaksi</label>
                    <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
                </div>
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Clients</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Kategori_1">Semua Clients</option>
                    <option value="Kategori_1">Data Client 1</option>
                    <option value="Kategori_2">Data Client 2</option>
                    <option value="Kategori_1">Data Client 3</option>
                    <option value="Kategori_2">Data Client 4</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Media</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Kategori_1">Semua Media</option>
                    <option value="Kategori_1">Data Media 1</option>
                    <option value="Kategori_2">Data Media 2</option>
                    <option value="Kategori_1">Data Media 3</option>
                    <option value="Kategori_2">Data Media 4</option>
                </select>
            </div>
            <div id="horizontal-form" class="p-2">
            <div class="preview">
                <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i> Search </button>
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
                                <th class="border border-b-2 dark:border-dark-5">No Ringkos - No Invoice</th>
                                <th class="border border-b-2 dark:border-dark-5">Nama Transaksi</th> <!--Judul Project + Jenis Pekerjaan ( produksi or placement) + Nama Transaksi : contoh : Advetorial Keselamatan Kerja + Placement + Media Trans TV-->
                                <th class="border border-b-2 dark:border-dark-5">Tanggal Transaksi</th>
                                <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-200">
                                <td class="border">1</td>
                                <td class="border">DEPSOS 001/01/02/2022 - TransTV 001/01/03/2022</td>
                                <td class="border">Advetorial Keselamatan Kerja - Placement - Trans TV</td>
                                <td class="border">01/03/2022</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('finance/detail_hutang_dan_piutang') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                        Detail </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">2</td>
                                <td class="border">DEPSOS 001/01/02/2022 - Trans7 001/01/03/2022</td>
                                <td class="border">Advetorial Keselamatan Kerja - Placement - Trans 7</td>
                                <td class="border">01/03/2022</td>
                                <td class="border text-center">
                                <a href="<?= base_url('finance/detail_hutang_dan_piutang') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                        Detail </a>
                                </td>
                                </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">2</td>
                                <td class="border">DEPSOS 001/01/02/2022 - iNews 001/01/03/2022</td>
                                <td class="border">Advetorial Keselamatan Kerja - Placement - iNews</td>
                                <td class="border">01/03/2022</td>
                                <td class="border text-center">
                                <a href="<?= base_url('finance/detail_hutang_dan_piutang') ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
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