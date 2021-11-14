<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <?php
                $img_src = $c['photo_client'];
                $avatar = (strpos($img_src, "http") !== false ? $img_src : base_url() . 'uploads/client/' . $img_src);
                ?>

                <img alt="<?= $c['nama_client']; ?>" class="" src="<?php echo ($img_src == '' ? base_url('dist/images/no-images.png') : $avatar); ?>">
                
            </div>
            <div class="ml-5">
                <div class="w-24 sm:w-56 truncate sm:whitespace-normal font-medium text-lg"><?= $c['nama_client']; ?></div>
                <div class="text-gray-600"><?= $c['nama_client_category']; ?></div>
            </div>
        </div>
        <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i><?= $c['alamat_client']; ?></div>
            </div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-2">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="phone" class="w-4 h-4 mr-2"></i><?= $c['telepon_client']; ?></div>
            </div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-2">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i><?= $c['nama_wilayah']; ?></div>
            </div>
        </div>
    </div>
    <div class="nav nav-tabs flex-col sm:flex-row justify-center lg:justify-start" role="tablist"> 
        <a id="dashboard-tab" data-toggle="tab" data-target="#dashboard" href="javascript:;" class="py-4 sm:mr-8 active" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a> 
        
        <a id="tasks-tab" data-toggle="tab" data-target="#tasks" href="javascript:;" class="py-4 sm:mr-8" role="tab" aria-selected="false">Tasks</a> 

        <a id="account-and-profile-tab" data-toggle="tab" data-target="#account-and-profile" href="javascript:;" class="py-4 sm:mr-8" role="tab" aria-selected="false">Edit Profile</a> 
    </div>
</div>
<!-- END: Profile Info -->
<div class="intro-y tab-content mt-5">
    <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Top Categories -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        Project List
                    </h2>
                    <div class="dropdown ml-auto">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="plus" class="w-4 h-4 mr-2"></i> View All Project </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex flex-col sm:flex-row">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Wordpress Template</a>
                            <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="text-center">
                                <div class="font-medium">6.5k</div>
                                <div class="bg-theme-18 text-theme-9 rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Bootstrap HTML Template</a>
                            <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="text-center">
                                <div class="font-medium">2.5k</div>
                                <div class="bg-theme-17 text-theme-11 rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Tailwind HTML Template</a>
                            <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="text-center">
                                <div class="font-medium">3.4k</div>
                                <div class="bg-theme-14 text-theme-10 rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Top Categories -->
            <!-- BEGIN: Work In Progress -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        Work In Progress
                    </h2>
                </div>
                <div class="p-5">
                    <div>
                        <div class="flex">
                            <div class="mr-auto">Pending Tasks</div>
                            <div>20%</div>
                        </div>
                        <div class="progress h-1 mt-2">
                            <div class="progress-bar w-1/2 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="flex">
                            <div class="mr-auto">Completed Tasks</div>
                            <div>2 / 20</div>
                        </div>
                        <div class="progress h-1 mt-2">
                            <div class="progress-bar w-1/4 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="flex">
                            <div class="mr-auto">Tasks In Progress</div>
                            <div>42</div>
                        </div>
                        <div class="progress h-1 mt-2">
                            <div class="progress-bar w-3/4 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Work In Progress -->
        </div>
    </div>

    <div id="tasks" class="tab-pane" role="tabpanel" aria-labelledby="tasks-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Top Categories -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        Project List
                    </h2>
                    <div class="dropdown ml-auto">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="plus" class="w-4 h-4 mr-2"></i> View All Project </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex flex-col sm:flex-row">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Wordpress Template</a>
                            <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="text-center">
                                <div class="font-medium">6.5k</div>
                                <div class="bg-theme-18 text-theme-9 rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Bootstrap HTML Template</a>
                            <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="text-center">
                                <div class="font-medium">2.5k</div>
                                <div class="bg-theme-17 text-theme-11 rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Tailwind HTML Template</a>
                            <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="text-center">
                                <div class="font-medium">3.4k</div>
                                <div class="bg-theme-14 text-theme-10 rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Top Categories -->
            <!-- BEGIN: Work In Progress -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        Work In Progress
                    </h2>
                </div>
                <div class="p-5">
                    <div>
                        <div class="flex">
                            <div class="mr-auto">Pending Tasks</div>
                            <div>20%</div>
                        </div>
                        <div class="progress h-1 mt-2">
                            <div class="progress-bar w-1/2 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="flex">
                            <div class="mr-auto">Completed Tasks</div>
                            <div>2 / 20</div>
                        </div>
                        <div class="progress h-1 mt-2">
                            <div class="progress-bar w-1/4 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="flex">
                            <div class="mr-auto">Tasks In Progress</div>
                            <div>42</div>
                        </div>
                        <div class="progress h-1 mt-2">
                            <div class="progress-bar w-3/4 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Work In Progress -->
        </div>
    </div>

    <div id="account-and-profile" class="tab-pane" role="tabpanel" aria-labelledby="account-and-profile">
        <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/edit_client_action">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: EDIT USER -->
                <div class="box col-span-12">
                    <div class="flex flex-col flex-row border-b border-gray-200 dark:border-dark-5">
                        <div class="p-5 text-left">
                            <div class="input-form mt-3">
                                <label class="form-label">Divisi</label>
                                <select placeholder="Pilih Divisi" class="form-control" name="role_client" required>
                                    <?php 
                                    foreach ($role as $r) : 
                                        $selected = ($c['role_client'] == $r['id_role'] ? "selected" : "");
                                    ?>
                                        <option <?= $selected ?> value="<?= $r['id_role']; ?>"><?= $r['nama_role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input name="nama_client" type="text" class="form-control" value="<?= $c['nama_client']; ?>" required>
                                <input name="id_client" type="hidden" value="<?= $c['id_client']; ?>">
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">Email</label>
                                <input name="email_client" type="text" class="form-control" value="<?= $c['email_client']; ?>" required>
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">No Karyawan</label>
                                <input name="nip_client" type="text" class="form-control" value="<?= $c['nip_client']; ?>" required>
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">No Handphone</label>
                                <input name="telepon_client" type="text" class="form-control" value="<?= $c['telepon_client']; ?>">
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">Foto</label>
                                <input name="file" type="file" class="form-control">
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">Password</label>
                                <input name="password_client" type="password" class="form-control">
                                <small>Isi Password jika ingin diganti</small>
                            </div>
                            <!-- END: Input -->
                        </div>
                    </div>
                    <div class="flex-col flex-row">
                        <div class="px-5 py-6">
                            <button type="submit" class="btn btn-primary w-24">Save</button>
                        </div>
                    </div>
                </div>
                <!-- END: Top Categories -->
            </div>
        </form>
    </div>
</div>

<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        DETAIL DATA CLIENT
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->
<div class="grid grid-cols-2 gap-2 mt-5">
    <!-- KOLOM BESAR-->
    <div class="intro-y col-span-2 lg:col-span-4">
        <!-- KOLOM KIRI-->
        <!-- BEGIN: BLOCK 1 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">

                <!-- KONTEN BLOCK 1 DISINI-->

                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="bg-gray-700 dark:bg-dark-1 text-white text-center">
                                <th class="whitespace-nowrap">No.</th>
                                <th class="whitespace-nowrap">Informasi</th>
                                <th class="whitespace-nowrap">Data</th>
                                <th class="whitespace-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- data client -->
                            <tr>
                                <td class="border-b dark:border-dark-5">1</td>
                                <td class="border-b dark:border-dark-5">Nama Direktorat</td>
                                <td class="border-b dark:border-dark-5">Kementrian Agama</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">2</td>
                                <td class="border-b dark:border-dark-5">Alamat</td>
                                <td class="border-b dark:border-dark-5">Jakarta</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">3</td>
                                <td class="border-b dark:border-dark-5">Wilayah Direktorat</td>
                                <td class="border-b dark:border-dark-5">DKI Jakarta</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">4</td>
                                <td class="border-b dark:border-dark-5">No. N.P.W.P</td>
                                <td class="border-b dark:border-dark-5">123456789</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">5</td>
                                <td class="border-b dark:border-dark-5">Kategori</td>
                                <td class="border-b dark:border-dark-5">xxxxx xxxxx</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">6</td>
                                <td class="border-b dark:border-dark-5">No. Rekening Bank</td>
                                <td class="border-b dark:border-dark-5">123456789</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">6</td>
                                <td class="border-b dark:border-dark-5">Nama Pemilik Rekening Bank</td>
                                <td class="border-b dark:border-dark-5">Dadang</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">7</td>
                                <td class="border-b dark:border-dark-5">Kontak Person</td>
                                <td class="border-b dark:border-dark-5">123456789</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">8</td>
                                <td class="border-b dark:border-dark-5">Status</td>
                                <td class="border-b dark:border-dark-5">Aktif</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <!-- end: data client -->
                        </tbody>
                    </table>
                    <br>
                    <button class="btn btn-primary w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print Rekap </button>
                    <a href="<?= base_url('masterdata/data_client') ?>" class="btn btn-dark w-48 mr-2 mb-2"> <i data-feather="skip-back" class="w-4 h-4 mr-2"></i>
                        Back </a>
                </div>
            </div>
        </div>
        <!-- END: BLOCK 1 -->
    </div>
</div>