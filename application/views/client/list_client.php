<!-- BEGIN : konten -->
<div class="flex flex-col sm:flex-row items-center my-5">
    <h2 class="text-lg font-medium mr-auto">
        DATABASE DIREKTORAT
    </h2>
    <div class="w-full sm:w-auto flex">
        <!-- BEGIN: Modal Toggle -->
        <div class="text-center mr-2"> 
            <a data-toggle="modal" data-target="#button-modal-preview" class="btn cursor-pointer btn-primary">Tambah Data</a> 
        </div>
        <!-- END: Modal Toggle -->
        <!-- BEGIN: Modal Content -->
        <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <a data-dismiss="modal" class="cursor-pointer"> 
                        <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                    </a>
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_client_action">
                        <div class="modal-body p-0">
                            <div class="p-5 text-left grid grid-cols-12 gap-6">
                                <div class="input-form col-span-6 mt-1">
                                    <label class="form-label">Nama Direktorat</label>
                                    <input name="nama_client" type="text" class="form-control" placeholder="Nama Client" required>
                                </div>
                                <div class="input-form col-span-6 mt-1">
                                    <label class="form-label">Contact Person</label>
                                    <input name="pic_client" type="text" class="form-control" placeholder="Contact Person Client" required>
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">Kategori</label>
                                    <select placeholder="Pilih Kategori" class="form-control" name="kategori_client" required>
                                        <option value="">- Pilih kategori -</option>
                                        <?php foreach ($cat as $cc) : ?>
                                            <option value="<?= $cc['id_client_category']; ?>"><?= $cc['nama_client_category']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">Wilayah/Propinsi</label>
                                    <select placeholder="Pilih Wilayah" class="form-control" name="wilayah_client" required>
                                        <option value="">- Pilih Wilayah -</option>
                                        <?php foreach ($wil as $w) : ?>
                                            <option value="<?= $w['id_wilayah']; ?>"><?= $w['nama_wilayah']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">Parent</label>
                                    <select placeholder="Pilih Parent" class="tom-select" name="parent_client" required>
                                        <option value="0">- No Parent -</option>
                                        <?php foreach ($all as $p) : ?>
                                            <option value="<?= $p['id_client']; ?>"><?= $p['nama_client']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">N P W P</label>
                                    <input name="npwp_client" type="text" class="form-control" placeholder="NPWP Client" required>
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">Nomer Rekening</label>
                                    <input name="no_rek_client" type="text" class="form-control" placeholder="Nomer Rekening Client" required>
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">Nama Pemilik Rekening</label>
                                    <input name="nama_rek_client" type="text" class="form-control" placeholder="Nama Rekening Client" required>
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">Nama Bank</label>
                                    <input name="bank_client" type="text" class="form-control" placeholder="Bank Client">
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">Telepon</label>
                                    <input name="telepon_client" type="text" class="form-control" placeholder="Telepon Client">
                                </div>
                                <div class="input-form col-span-4 mt-1">
                                    <label class="form-label">Foto</label>
                                    <input name="file" type="file" class="form-control" placeholder="foto">
                                </div>
                                <div class="input-form col-span-12 mt-1">
                                    <label class="form-label">Alamat Detail</label>
                                    <textarea name="alamat_client" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="submit" class="btn btn-primary w-24">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end modal konten-->
        
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                <span class="w-5 h-5 flex items-center justify-center"> 
                    <i class="w-4 h-4" data-feather="plus"></i> 
                </span>
            </button>
            <div class="dropdown-menu w-64">
                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                    <a class="flex items-center block p-2 bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md cursor-pointer" data-toggle="modal" data-target="#button-modal-cat"> 
                        <i data-feather="layers" class="w-4 h-4 mr-2"></i> 
                        Tambah Kategori Direktorat
                    </a>
                    <!-- BEGIN: Modal Kategori -->
                    <div id="button-modal-cat" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <a data-dismiss="modal" class="cursor-pointer"> 
                                    <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                                </a>
                                <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_cat_action">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-left">
                                            <div class="input-form mt-3">
                                                <label class="form-label">Nama Kategori</label>
                                                <input name="nama_client_category" type="text" class="form-control" placeholder="Nama Kategori" required>
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="submit" class="btn btn-primary w-24">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end modal kategori-->



                    <a class="flex items-center block p-2 bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md cursor-pointer" data-toggle="modal" data-target="#button-modal-wil"> 
                        <i data-feather="map" class="w-4 h-4 mr-2"></i> 
                        Tambah Wilayah
                    </a>
                    <!-- BEGIN: Modal Kategori -->
                    <div id="button-modal-wil" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <a data-dismiss="modal" class="cursor-pointer"> 
                                    <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                                </a>
                                <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_wil_action/list_client">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-left">
                                            <div class="input-form mt-3">
                                                <label class="form-label">Nama Wilayah</label>
                                                <input name="nama_wilayah" type="text" class="form-control" placeholder="Nama Wilayah" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label class="form-label">Deskripsi</label>
                                                <textarea name="desc_wilayah" class="form-control"></textarea>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label class="form-label">Parent Wilayah</label>
                                                <select placeholder="Pilih Parent" class="form-control" name="parent_wilayah" required>
                                                    <option value="0">- No Parent -</option>
                                                    <?php foreach ($wil as $w) : ?>
                                                        <option value="<?= $w['id_wilayah']; ?>"><?= $w['nama_wilayah']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="submit" class="btn btn-primary w-24">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end modal kategori-->

                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- BEGIN: filter -->
<div class="box p-5 mt-5">
    <div class="flex flex-col sm:items-end xl:items-start overflow-x-auto">
        <form class="sm:flex w-full" action="<?= base_url(); ?>masterdata/list_client/">

            <?php if(isset($_GET['size'])): ?>
                <input name="size" value="<?= $_GET['size'] ?>" type="hidden">
            <?php endif; ?>

            <div class="flex items-center mb-2 sm:mb-0 sm:mr-4">
                <label class="w-12 flex mr-2">Kategori</label>
                <select name="cat" class="form-select w-full sm:w-auto">
                    <option value="0">Semua</option>
                    <?php 
                    foreach($cat as $cc):
                        $selected = "";
                        if($_GET['cat'] == $cc['id_client_category']) $selected = "selected";
                    ?>
                    <option value="<?= $cc['id_client_category']; ?>" <?= $selected; ?>><?= $cc['nama_client_category']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>


            <div class="flex items-center mb-2 sm:mb-0 sm:mr-4">
                <label class="w-12 flex mr-2">Wilayah</label>
                <select name="wil" class="form-select w-full sm:w-auto">
                    <option value="0">Semua</option>
                    <?php 
                    foreach($wil as $w):
                        $selected = "";
                        if($_GET['wil'] == $w['id_wilayah']) $selected = "selected";
                    ?>
                    <option value="<?= $w['id_wilayah']; ?>" <?= $selected; ?>><?= $w['nama_wilayah']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>


            <?php $search = (isset($_GET['search']) ? $_GET['search'] : ""); ?>

            <div class="w-full">
                <div class="float-right ml-2 flex">
                    <input name="search" value="<?= $search; ?>" type="text" class="flex-col form-control placeholder-theme-13" placeholder="Search...">
                    <button type="submit" class="flex-col btn btn-primary ml-2">Go</button>
                    <a href="<?= base_url();?>masterdata/list_client" class="flex-col btn btn-secondary ml-2">Reset</a>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="box p-5 mt-5 overflow-x-auto">
    <!-- BEGIN: Table -->
    <table class="table">
        <thead>
            <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                <th class="whitespace-nowrap">No</th>
                <th class="whitespace-nowrap">Nama Direktorat</th>
                <th class="">Alamat</th>
                <th class="whitespace-nowrap">Kontak Person</th>
                <th class="">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(count($client) == 0) echo '<tr><td colspan="5" align="center">No Data</td></tr>';
            foreach($client as $c): 
            ?>
            <tr class="intro-x">
                <td class="border-b dark:border-dark-5"><?= $c['id_client']; ?></td>
                <td class="border-b dark:border-dark-5"><?= $c['nama_client']; ?></td>
                <td class="border-b dark:border-dark-5 w-56"><?= $c['alamat_client']; ?></td>
                <td class="border-b dark:border-dark-5"><?= $c['pic_client']; ?></td>
                <td class="border-b dark:border-dark-5" <?= ($this->session->userdata('userlogin')['role_user'] <= 2 ? "" : "hidden"); ?>>
                    <a href="<?= base_url('masterdata/detail_client/'.$c['id_client']) ?>" class="btn btn-sm btn-primary py-1 px-2 mr-2">Detail </a>
                    <a data-toggle="modal" data-target="#delete-modal-<?= $c['id_client'] ?>" class="btn btn-sm btn-danger py-1 px-2">Delete</a>
                    <!-- BEGIN: Modal DELETE -->
                    <div id="delete-modal-<?= $c['id_client'] ?>" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center"> 
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Are you sure?</div>
                                        <div class="text-gray-600 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                                    </div>
                                    <div class="px-5 pb-8 text-center"> 
                                        <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> 
                                        <a href="<?= base_url() . 'masterdata/delete_client/' . $c['id_client'] ?>" class="btn btn-danger w-24">Delete</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- END: Modal DELETE -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- END: Table -->
    <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-gray-600">
        <div class="dark:text-gray-300">Total <?= $total_row ?> Data</div>
        <div class="sm:ml-auto mt-2 sm:mt-0 dark:text-gray-300">
            <form action="<?= base_url(); ?>masterdata/list_client/">

                <?php $size = (isset($_GET['size']) ? $_GET['size'] : "10"); ?>
                <?php if(isset($_GET['cat'])): ?>
                    <input name="cat" value="<?= $_GET['cat'] ?>" type="hidden">
                <?php endif; ?>
                <?php if(isset($_GET['wil'])): ?>
                    <input name="wil" value="<?= $_GET['wil'] ?>" type="hidden">
                <?php endif; ?>
                <?php if(isset($_GET['search'])): ?>
                    <input name="search" value="<?= $_GET['search'] ?>" type="hidden">
                <?php endif; ?>
                
                <select name="size" class="form-select" onchange="this.form.submit()">
                    <option value="10" <?= ($size == 10 ? "selected" : "") ?>>10</option>
                    <option value="50" <?= ($size == 50 ? "selected" : "") ?>>50</option>
                    <option value="100" <?= ($size == 100 ? "selected" : "") ?>>100</option>
                    <option value="0" <?= ($size == 0 ? "selected" : "") ?>>Semua</option>
                </select>
            </form>
        </div>
    </div>
</div>

<!-- BEGIN: Pagination -->
<div class="col-span-12 mt-4 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
    <?= $page; ?>
</div>
<!-- END: Pagination -->