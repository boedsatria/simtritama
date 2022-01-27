<!-- BEGIN : konten -->
<div class="flex flex-col sm:flex-row items-center my-5">
    <h2 class="text-lg font-medium mr-auto">
        DATABASE PENYELENGGARA
    </h2>
    <div class="w-full sm:w-auto flex">
        <!-- BEGIN: Modal Toggle -->
        <div class="text-center mr-2"> 
            <a data-toggle="modal" data-target="#button-modal-preview" class="btn cursor-pointer btn-primary">Tambah Data</a> 
        </div>
        <!-- END: Modal Toggle -->
        <!-- BEGIN: Modal Content -->
        <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <a data-dismiss="modal" class="cursor-pointer"> 
                        <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                    </a>
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_penyelenggara_action">
                        <div class="modal-body p-0">
                            <div class="p-5 text-left grid grid-cols-12 gap-6">
                                <div class="input-form col-span-12 mt-1">
                                    <label class="form-label">Nama Penyelenggara</label>
                                    <input name="nama_penyelenggara" type="text" class="form-control" placeholder="Nama Penyelenggara" required>
                                </div>
                                <div class="input-form col-span-12 mt-1">
                                    <label class="form-label">KBLI</label>
                                    <select placeholder="Pilih KBLI" class="tom-select" name="kbli_penyelenggara[]" multiple required>
                                        <option value="">- Pilih KBLI -</option>
                                        <?php foreach ($kbli as $k1) : ?>
                                            <option value="<?= $k1['kode_kbli']; ?>"><?= $k1['kode_kbli']." - ".$k1['nama_kbli']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-form col-span-6 mt-1">
                                    <label class="form-label">Email</label>
                                    <input name="email_penyelenggara" class="form-control" placeholder="Email Penyelenggara">
                                </div>
                                <div class="input-form col-span-6 mt-1">
                                    <label class="form-label">Telepon</label>
                                    <input name="telepon_penyelenggara" class="form-control" placeholder="Telepon Penyelenggara">
                                </div>
                                <div class="input-form col-span-12 mt-1">
                                    <label class="form-label">Foto</label>
                                    <input name="file" type="file" class="form-control">
                                </div>
                                <div class="input-form col-span-12 mt-1">
                                    <label class="form-label">Alamat</label>
                                    <textarea name="alamat_penyelenggara" class="form-control"></textarea>
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
                    <a class="flex items-center block p-2 bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md cursor-pointer" data-toggle="modal" data-target="#button-modal-kbli"> 
                        <i data-feather="layers" class="w-4 h-4 mr-2"></i> 
                        Tambah Data KBLI
                    </a>
                    <!-- BEGIN: Modal Kategori -->
                    <div id="button-modal-kbli" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <a data-dismiss="modal" class="cursor-pointer"> 
                                    <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                                </a>
                                <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_kbli_action">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-left">
                                            <div class="input-form">
                                                <label class="form-label">Nama KBLI</label>
                                                <input name="nama_kbli" type="text" class="form-control" placeholder="Nama KBLI" required>
                                            </div>
                                        </div>
                                        <div class="p-5 text-left">
                                            <div class="input-form">
                                                <label class="form-label">Kode KBLI</label>
                                                <input name="kode_kbli" type="text" class="form-control" placeholder="Kode KBLI" required>
                                            </div>
                                        </div>
                                        <div class="p-5 text-left">
                                            <div class="input-form">
                                                <label class="form-label">Desc KBLI</label>
                                                <textarea class="form-control" name="desc_kbli"></textarea>
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
    <div class="flex flex-col sm:items-end xl:items-start">
        <form class="sm:flex w-full" action="<?= base_url(); ?>masterdata/list_penyelenggara/">

            <?php if(isset($_GET['size'])): ?>
                <input name="size" value="<?= $_GET['size'] ?>" type="hidden">
            <?php endif; ?>

            <div class="flex items-center mb-2 sm:mb-0 sm:mr-4">
                <label class="w-12 flex mr-2">KBLI</label>
                <select name="kbli[]" class="tom-select w-56" multiple>
                    <?php 
                    foreach($kbli as $k2):
                        $selected = "";
                        if($_GET['kbli'] == $k2['id_kbli']) $selected = "selected";
                    ?>
                    <option value="<?= $k2['kode_kbli']; ?>" <?= $selected; ?>><?= $k2['kode_kbli']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <?php $search = (isset($_GET['search']) ? $_GET['search'] : ""); ?>

            <div class="w-full">
                <div class="float-right ml-2 flex">
                    <input name="search" value="<?= $search; ?>" type="text" class="flex-col form-control placeholder-theme-13" placeholder="Search...">
                    <button type="submit" class="flex-col btn btn-primary ml-2">Go</button>
                    <a href="<?= base_url();?>masterdata/list_penyelenggara" class="flex-col btn btn-secondary ml-2">Reset</a>
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
                <th class="whitespace-nowrap">Nama Penyelenggara</th>
                <th class="">Alamat</th>
                <th class="whitespace-nowrap">KBLI</th>
                <th class="" <?= ($this->session->userdata('userlogin')['role_user'] <= 2 ? "" : "hidden"); ?>>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(count($penyelenggara) == 0) echo '<tr><td colspan="5" align="center">No Data</td></tr>';
            foreach($penyelenggara as $p): 
            ?>
            <tr class="intro-x">
                <td class="border-b dark:border-dark-5"><?= $p['id_penyelenggara']; ?></td>
                <td class="border-b dark:border-dark-5"><?= $p['nama_penyelenggara']; ?></td>
                <td class="border-b dark:border-dark-5 w-56"><?= $p['alamat_penyelenggara']; ?></td>
                <td class="border-b dark:border-dark-5"><?= $p['kbli_penyelenggara']; ?></td>
                <td class="border-b dark:border-dark-5" <?= ($this->session->userdata('userlogin')['role_user'] <= 2 ? "" : "hidden"); ?>>
                    <a href="<?= base_url('masterdata/detail_penyelenggara/'.$p['id_penyelenggara']) ?>" class="btn btn-sm btn-primary py-1 px-2 mr-2">Detail </a>
                    <a data-toggle="modal" data-target="#delete-modal-<?= $p['id_penyelenggara'] ?>" class="btn btn-sm btn-danger py-1 px-2">Delete</a>
                    <!-- BEGIN: Modal DELETE -->
                    <div id="delete-modal-<?= $p['id_penyelenggara'] ?>" class="modal" tabindex="-1" aria-hidden="true">
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
                                        <a href="<?= base_url() . 'masterdata/delete_penyelenggara/' . $p['id_penyelenggara'] ?>" class="btn btn-danger w-24">Delete</a> 
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
            <form action="<?= base_url(); ?>masterdata/list_penyelenggara/">

                <?php $size = (isset($_GET['size']) ? $_GET['size'] : "10"); ?>
                <!-- <?php if(isset($_GET['kbli'])): ?>
                    <input name="kbli" value="<?= $_GET['kbli'] ?>" type="hidden">
                <?php endif; ?> -->
                
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