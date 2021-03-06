<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <?php
                $img_src = $p['photo_penyelenggara'];
                $avatar = (strpos($img_src, "http") !== false ? $img_src : base_url() . 'uploads/penyelenggara/' . $img_src);
                ?>

                <img alt="<?= $p['nama_penyelenggara']; ?>" class="rounded-full" src="<?php echo ($img_src == '' ? base_url('dist/images/no-images.png') : $avatar); ?>">
                    
                <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2"> <i class="w-4 h-4 text-white" data-feather="camera"></i> </div>
            </div>
            <div class="ml-5">
                <div class="truncate sm:whitespace-normal font-medium text-lg"><?= $p['nama_penyelenggara']; ?></div>
                <div class="text-gray-600">
                    <?= $p['kbli_penyelenggara']; ?>
                </div>
            </div>
        </div>
        <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i><?= $p['email_penyelenggara']; ?></div>
            </div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-2">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="phone" class="w-4 h-4 mr-2"></i><?= $p['telepon_penyelenggara']; ?></div>
            </div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-2">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="map-pin" class="w-4 h-4 mr-2"></i><?= $p['alamat_penyelenggara']; ?></div>
            </div>
        </div>
    </div>
    <div class="nav nav-tabs flex-col sm:flex-row justify-center lg:justify-start" role="tablist"> 
        <a id="dashboard-tab" data-toggle="tab" data-target="#dashboard" class="py-4 cursor-pointer sm:mr-8 active" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a> 
        
        <a id="tasks-tab" data-toggle="tab" data-target="#tasks" class="py-4 cursor-pointer sm:mr-8" role="tab" aria-selected="false">Project</a> 

        <a id="account-and-profile-tab" data-toggle="tab" data-target="#account-and-profile" class="py-4 cursor-pointer sm:mr-8" role="tab" aria-selected="false">Edit Profile</a> 
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
        <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/edit_penyelenggara_action">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: EDIT USER -->
                <div class="box col-span-12">
                    <div class="flex flex-col flex-row border-b border-gray-200 dark:border-dark-5">
                        <div class="p-5 text-left">
                            <div class="input-form mt-3">
                                <label class="form-label">Nama Penyelenggara</label>
                                <input name="nama_penyelenggara" type="text" class="form-control" value="<?= $p['nama_penyelenggara']; ?>" required>
                                <input name="id_penyelenggara" type="hidden" value="<?= $p['id_penyelenggara']; ?>">
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">KBLI</label>
                                <select placeholder="Pilih KBLI" class="tom-select" name="kbli_penyelenggara[]" required multiple>
                                    <?php 
                                    foreach ($kbli as $k) : 
                                        $selected = (in_array($k['kode_kbli'], explode(",", $p['kbli_penyelenggara'])) ? "selected" : "");
                                    ?>
                                        <option <?= $selected ?> value="<?= $k['kode_kbli']; ?>"><?= $k['nama_kbli']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">Email</label>
                                <input name="email_penyelenggara" type="text" class="form-control" value="<?= $p['email_penyelenggara']; ?>" required>
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">No Handphone</label>
                                <input name="telepon_penyelenggara" type="text" class="form-control" value="<?= $p['telepon_penyelenggara']; ?>">
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">Foto</label>
                                <input name="file" type="file" class="form-control">
                            </div>
                            <div class="input-form mt-3">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat_penyelenggara" class="form-control"><?= $p['alamat_penyelenggara']; ?></textarea>
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