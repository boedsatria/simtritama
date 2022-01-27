<!-- BEGIN : konten -->
<div class="flex flex-col sm:flex-row items-center my-5">
    <h2 class="text-lg font-medium mr-auto">
        DATABASE PROJECT
    </h2>
    <div class="w-full sm:w-auto flex">
        <div class="text-center mr-2"> 
            <a href="<?= base_url(); ?>pic/tambah_project" class="btn cursor-pointer btn-primary">Tambah Data</a> 
        </div>
    </div>
</div>

<!-- BEGIN: filter -->
<div class="box p-5 mt-5">
    <div class="flex flex-col sm:items-end xl:items-start">
        <form class="sm:flex w-full" action="<?= base_url(); ?>pic/list_project/">

            <?php if(isset($_GET['size'])): ?>
                <input name="size" value="<?= $_GET['size'] ?>" type="hidden">
            <?php endif; ?>

            <?php $jenis = (isset($_GET['jenis']) ? $_GET['jenis'] : "3"); ?>

            <div class="flex items-center mb-2 sm:mb-0 sm:mr-4">
                <label class="w-24 flex mr-2">Jenis Kegiatan</label>
                <select name="jenis" class="form-control w-56">
                    <option value="1" <?= ($jenis == 1 ? "selected" : "") ?>>Produksi</option>
                    <option value="2" <?= ($jenis == 2 ? "selected" : "") ?>>Placement</option>
                    <option value="3" <?= ($jenis == 3 ? "selected" : "") ?>>Produksi & Placement</option>
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
                <th class="whitespace-nowrap">No Project</th>
                <th class="whitespace-nowrap">Nama Penyelenggara</th>
                <th class="">Client</th>
                <th class="">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(count($project) == 0) echo '<tr><td colspan="5" align="center">No Data</td></tr>';
            foreach($project as $p): 
            ?>
            <tr class="intro-x">
                <td class="border-b dark:border-dark-5"><?= $p['id_project']; ?></td>
                <td class="border-b dark:border-dark-5"><?= $p['no_project']; ?></td>
                <td class="border-b dark:border-dark-5"><?= $p['nama_project']; ?></td>
                <td class="border-b dark:border-dark-5 w-56"><?= $p['nama_client']; ?></td>
                <td class="border-b dark:border-dark-5">
                    <a href="<?= base_url('pic/tambah_project/'.$p['id_project']) ?>" class="btn btn-sm btn-primary py-1 px-2 mr-2">Detail </a>
                    <a data-toggle="modal" data-target="#delete-modal-<?= $p['id_project'] ?>" class="btn btn-sm btn-danger py-1 px-2">Delete</a>
                    <!-- BEGIN: Modal DELETE -->
                    <div id="delete-modal-<?= $p['id_project'] ?>" class="modal" tabindex="-1" aria-hidden="true">
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
                                        <a href="<?= base_url() . 'pic/delete_project/' . $p['id_project'] ?>" class="btn btn-danger w-24">Delete</a> 
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
            <form action="<?= base_url(); ?>pic/list_project/">

                <?php $size = (isset($_GET['size']) ? $_GET['size'] : "10"); ?>
                <?php if(isset($_GET['jenis'])): ?>
                    <input name="jenis" value="<?= $_GET['jenis'] ?>" type="hidden">
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