<!-- BEGIN : konten -->
<div class="flex flex-col sm:flex-row items-center my-5">
    <h2 class="text-lg font-medium mr-auto">
        DATABASE USER
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
                <div class="modal-content"> 
                    <a data-dismiss="modal" class="cursor-pointer"> 
                        <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                    </a>
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_user_action">
                        <div class="modal-body p-0">
                            <div class="p-5 text-left">
                                <div class="input-form mt-3">
                                    <label class="form-label">Divisi</label>
                                    <select placeholder="Pilih Divisi" class="form-control" name="role_user" required>
                                        <option value="">- Pilih Role -</option>
                                        <?php foreach ($role as $r) : ?>
                                            <option value="<?= $r['id_role']; ?>"><?= $r['nama_role']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input name="nama_user" type="text" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Email</label>
                                    <input name="email_user" type="text" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">No Handphone</label>
                                    <input name="telepon_user" type="text" class="form-control" placeholder="No. Telephone">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Foto</label>
                                    <input name="file" type="file" class="form-control" placeholder="foto">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Password</label>
                                    <input name="password_user" type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <!-- END: Input -->
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
    </div>
</div>

<!-- BEGIN: filter -->
<div class="box p-5 mt-5">
    <div class="flex flex-col sm:items-end xl:items-start">

        <form class="sm:flex w-full" action="<?= base_url().'masterdata/list_user/'?>">
            <?php if(isset($_GET['size'])): ?>
                <input name="size" value="<?= $_GET['size'] ?>" type="hidden">
            <?php endif; ?>
            <div class="flex items-center mb-2 sm:mb-0">
                <label class="w-16 flex mr-2">Divisi</label>
                <select name="divisi" class="form-select w-full sm:w-auto">
                    <option value="0">Semua</option>
                    <?php 
                    foreach($role as $r):
                        $selected = "";
                        if($_GET['divisi'] == $r['id_role']) $selected = "selected";
                    ?>
                    <option value="<?= $r['id_role']; ?>" <?= $selected; ?>><?= $r['nama_role']; ?> </option>
                    <?php endforeach; ?>
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

<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Users Layout -->
    <?php foreach ($user as $u) : ?>
    <div class="intro-x col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">

                    <?php
                    $img_src = $u['photo_user'];
                    $avatar = (strpos($img_src, "http") !== false ? $img_src : base_url() . 'uploads/user/' . $img_src);
                    ?>

                    <img alt="<?= $u['nama_user']; ?>" class="rounded-full" src="<?php echo ($img_src == '' ? base_url('dist/images/no-images.png') : $avatar); ?>">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="<?= base_url() . 'masterdata/detail_user/' . $u['id_user'] ?>" class="font-medium"><?= $u['nama_user']; ?></a>
                    <div class="text-gray-600 text-xs mt-0.5"><?= $u['nama_role']; ?></div>
                </div>
                <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-dark-5 ml-2 text-gray-500 zoom-in tooltip" title="Facebook"> <i class="w-3 h-3 fill-current" data-feather="facebook"></i> </a>
                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-dark-5 ml-2 text-gray-500 zoom-in tooltip" title="Twitter"> <i class="w-3 h-3 fill-current" data-feather="twitter"></i> </a>
                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-dark-5 ml-2 text-gray-500 zoom-in tooltip" title="Linked In"> <i class="w-3 h-3 fill-current" data-feather="linkedin"></i> </a>
                </div>
            </div>
            <div class="items-center p-5">
                <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto" hidden>
                    <div class="flex text-gray-600 text-xs">
                        <div class="mr-auto">Progress</div>
                        <div>20%</div>
                    </div>
                    <div class="progress h-1 mt-2">
                        <div class="progress-bar w-1/4 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- <a href="<?= base_url() . 'user/messages_to/' . $u['id_user'] ?>" class="btn btn-primary py-1 px-2 mr-2">Message</a> -->
                <a href="<?= base_url() . 'masterdata/detail_user/' . $u['id_user'] ?>" class="btn btn-outline-secondary py-1 px-2">Profile</a>
                <a data-toggle="modal" data-target="#delete-modal-<?= $u['id_user'] ?>" class="btn btn-danger py-1 px-2 float-right">Delete</a>
                <!-- BEGIN: Modal DELETE -->
                <div id="delete-modal-<?= $u['id_user'] ?>" class="modal" tabindex="-1" aria-hidden="true">
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
                                    <a href="<?= base_url() . 'masterdata/delete_user/' . $u['id_user'] ?>" class="btn btn-danger w-24">Delete</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END: Modal DELETE -->

            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- END: Users Layout -->

</div>

<div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-gray-600">
    <div class="dark:text-gray-300">Total <?= $total_row ?> Data</div>
    <div class="sm:ml-auto mt-2 sm:mt-0 dark:text-gray-300">
        <form action="<?= base_url(); ?>masterdata/list_user/">
            <?php $size = (isset($_GET['size']) ? $_GET['size'] : "10"); ?>
            <?php if(isset($_GET['divisi'])): ?>
                <input name="divisi" value="<?= $_GET['divisi'] ?>" type="hidden">
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


<!-- BEGIN: Pagination -->
<div class="col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mb-10">
    <?= $page; ?>
</div>
<!-- END: Pagination -->