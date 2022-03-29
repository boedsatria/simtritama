<!-- BEGIN : konten -->
<div class="flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        ASET DAN PENYUSUTAN
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
                            <form action="<?= base_url(); ?>finance/aset_action" method="POST">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-left">
                                        <div>
                                            <label for="regular-form-1" class="form-label">Kategori</label>
                                            <select data-placeholder="Select Kategori" name="kategori_as" class="form-control w-full">
                                                <?php foreach($cat as $c): ?>
                                                <option value="<?= $c['id_ac'] ?>"><?= $c['nama_ac'] ?></option>
                                                <?php endforeach; ?>
                                            </select></br></br>
                                            <label for="nama_item" class="form-label">Nama Item</label>
                                            <input id="nama_item" type="text" name="nama_as" class="form-control w-full" placeholder="Input text"></br></br>
                                            <label for="regular-form-3" class="form-label">Tanggal Beli</label>
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="relative w-72 mx-auto">
                                                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                        <i data-feather="calendar" class="w-4 h-4"></i>
                                                    </div>
                                                    <input type="text" class="datepicker form-control pl-12" data-single-mode="true" name="tanggal_beli_as">
                                                </div>
                                            </div></br>
                                            <label for="nilai_project" class="form-label">Harga Beli</label>
                                            <input id="nilai_project" type="text" name="harga_beli_as" class="form-control w-full" placeholder="Input text"></br></br>
                                            <label for="nilai_peny" class="form-label">Nilai Penyusutan</label>
                                            <div class="input-group w-24">
                                                <input type="text" class="form-control" name="penyusutan_as">
                                                <div id="input-group-price" class="input-group-text">%</div>
                                            </div>
                                            </br>
                                            <label for="nilai_project" class="form-label">Deskripsi</label>
                                            <textarea name="desc_as" class="form-control w-full"></textarea>
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="submit" data-dismiss="modal" class="btn btn-primary w-24">Submit</button>
                                    </div>
                                </div>
                            </form>
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
<div class="box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" action="">
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Kategori</label>
                <select data-placeholder="Select Kategori" name="cat" class="form-control w-full">
                    <?php foreach($cat as $c): ?>
                    <option value="<?= $c['id_ac'] ?>"><?= $c['nama_ac'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </form>
    </div>
    <div class="box p-5 mt-1">
        <!-- BEGIN: Hoverable Table -->
        <div class="p-5" id="hoverable-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="border border-b-2 dark:border-dark-5 w-1">No.</th>
                                <th class="border border-b-2 dark:border-dark-5">Kategori</th>
                                <th class="border border-b-2 dark:border-dark-5">Nama Item</th>
                                <th class="border border-b-2 dark:border-dark-5">Tanggal Beli</th>
                                <th class="border border-b-2 dark:border-dark-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($assets as $k => $v): ?>
                            <tr>
                                <td class="border"><?= $k+1 ?></td>
                                <td class="border"><?= $v['nama_ac'] ?></td>
                                <td class="border"><?= $v['nama_as'] ?></td>
                                <td class="border"><?= tgl_indo($v['tanggal_beli_as']) ?></td>
                                <td class="border text-center">
                                    <a href="<?= base_url().'finance/detail_penyusutan/'.$v['id_as'] ?>" class="btn btn-primary w-24 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                    Detail </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END: Hoverable Table -->
    </div>
</div>


<!--begin STOCKIES-->
<div class="flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        STOCKIES
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <!-- form tambah data -->
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<!-- BEGIN: filter -->
<div class="box p-5 mt-5">

    <div class="box p-5 mt-1">
        <!-- BEGIN: Hoverable Table -->
        <div class="p-5" id="hoverable-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="border border-b-2 dark:border-dark-5 w-1">Tanggal</th>
                                <th class="border border-b-2 dark:border-dark-5">Item</th>
                                <th class="border border-b-2 dark:border-dark-5">Stock In</th>
                                <th class="border border-b-2 dark:border-dark-5">Stock Out</th>
                                <th class="border border-b-2 dark:border-dark-5">Stock Qty</th>
                                <th class="border border-b-2 dark:border-dark-5">Reorder Level</th>
                                <th class="border border-b-2 dark:border-dark-5">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>2022/okt/19</td>
                                <td>Kertas HVS A4 80G</td>
                                <td>30</td>
                                <td>5</td>
                                <td>25</td>
                                <td>5</td>
                                <td><a href="<?= base_url('finance/detail_stock') ?>" class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>Detail </a></td>
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