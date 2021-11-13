<!-- BEGIN : konten -->
<div class="flex flex-col sm:flex-row items-center my-5">
    <h2 class="text-lg font-medium mr-auto">
        DATABASE DIREKTORAT
    </h2>
    <div class="w-full sm:w-auto flex">
        <!-- BEGIN: Modal Toggle -->
        <div class="text-center"> 
            <a data-toggle="modal" data-target="#button-modal-preview" class="btn cursor-pointer btn-primary">Tambah Data</a> 
        </div>
        <!-- END: Modal Toggle -->
        <!-- BEGIN: Modal Content -->
        <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-lg">
                    <a data-dismiss="modal" class="cursor-pointer"> 
                        <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                    </a>
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_user_action">
                        <div class="modal-body p-0">
                            <div class="p-5 text-left">
                                <div>
                                    <label for="crud-form-1" class="form-label">Nama Direktorat</label>
                                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                    <label for="crud-form-1" class="form-label">Wilayah/Propinsi</label>
                                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                    <label for="crud-form-1" class="form-label">N.P.W.P</label>
                                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                    <label for="crud-form-1" class="form-label">Kategori</label>
                                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                    <label for="crud-form-1" class="form-label">No Rekening</label>
                                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                    <label for="crud-form-1" class="form-label">Nama Pemilik Rekening</label>
                                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                    <label for="crud-form-1" class="form-label">Alamat</label>
                                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                    <label for="crud-form-1" class="form-label">Kontak Person</label>
                                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="button" data-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end modal konten-->
    </div>
</div>
<!-- BEGIN: HTML Table Data -->

<!-- BEGIN: filter -->

<div class="box p-5 mt-5">
    <div class="flex flex-col sm:items-end xl:items-start">
        <form class="sm:flex w-full" action="<?= base_url(); ?>masterdata/list_user/">
            <div class="flex items-center mb-2 sm:mb-0">
                <label class="w-16 flex mr-2">Kategori</label>
                <select name="divisi" class="form-select w-full sm:w-auto">
                    <option value="0">Semua</option>
                    <?php 
                    foreach($cat_c as $cc):
                        $selected = "";
                        if($_GET['cat'] == $cc['id_client_category']) $selected = "selected";
                    ?>
                    <option value="<?= $r['id_role']; ?>" <?= $selected; ?>><?= $r['nama_role']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Kategori</label>
                <select class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="Kementerian">Kementerian</option>
                    <option value="Direktorat">Direktorat</option>
                    <option value="BUMN">BUMN</option>
                    <option value="Lembaga">Lembaga</option>
                </select>
            </div>
            <div class="flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Wilayah</label>
                <select class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="DKI Jakarta" selected>DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Barat">Jawa Tengah</option>
                </select>
            </div>


            <?php $search = (isset($_GET['search']) ? $_GET['search'] : ""); ?>

            <div class="w-full">
                <div class="float-right ml-2 flex">
                    <input name="search" value="<?= $search; ?>" type="text" class="flex-col form-control placeholder-theme-13" placeholder="Search...">
                    <button type="submit" class="flex-col btn btn-primary ml-2">Go</button>
                    <a href="<?= base_url();?>masterdata/list_user" class="flex-col btn btn-secondary ml-2">Reset</a>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="intro-y box p-5 mt-5">
    <div class="intro-y box p-5 mt-5">
        <!-- BEGIN: Hoverable Table -->
        <div class="p-5" id="hoverable-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="border border-b-2 dark:border-dark-5 w-1">No.</th>
                                <th class="border border-b-2 dark:border-dark-5">Nama Direktorat</th>
                                <th class="border border-b-2 dark:border-dark-5">Alamat</th>
                                <th class="border border-b-2 dark:border-dark-5">Kontak Person</th>
                                <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-200">
                                <td class="border">1</td>
                                <td class="border">Kementrian Agama</td>
                                <td class="border">xxxxxxxxxxx</td>
                                <td class="border">123456789</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('masterdata/detail_client') ?>" class="btn btn-primary w-24 mr-2 mb-2">
                                        Detail </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">2</td>
                                <td class="border">Kementrian Sosial</td>
                                <td class="border">xxxxxxxxxxx</td>
                                <td class="border">987654321</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('masterdata/detail_client') ?>" class="btn btn-primary w-24 mr-2 mb-2">
                                        Detail </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border">3</td>
                                <td class="border">Dinas Perhubungan</td>
                                <td class="border">xxxxxxxxxxx</td>
                                <td class="border">987654333</td>
                                <td class="border text-center">
                                    <a href="<?= base_url('masterdata/detail_client') ?>" class="btn btn-primary w-24 mr-2 mb-2">
                                        Detail </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
<!-- END: HTML Table Data -->