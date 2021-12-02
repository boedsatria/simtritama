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
        <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Details</div>
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
        <a id="dashboard-tab" data-toggle="tab" data-target="#dashboard" class="py-4 sm:mr-8 cursor-pointer active" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a> 
        
        <a id="tasks-tab" data-toggle="tab" data-target="#tasks" class="py-4 cursor-pointer sm:mr-8" role="tab" aria-selected="false">Project</a> 

        <a id="account-and-profile-tab" data-toggle="tab" data-target="#account-and-profile" class="py-4 cursor-pointer sm:mr-8" role="tab" aria-selected="false">Edit Profile</a> 
    </div>
</div>
<!-- END: Profile Info -->
<div class="intro-y tab-content mt-5">
    <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Top Categories -->
            <div class="intro-y box col-span-12">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        Data Client
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col sm:flex-row">
                        <div class="mr-auto">
                            <div class="text-gray-500 mt-1">Contact Person</div>
                            <a href="" class="font-medium"><?= $c['pic_client']; ?></a>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <div class="text-gray-500 mt-1">Nomer Rekening Bank</div>
                            <a href="" class="font-medium"><?= $c['no_rek_client']; ?></a>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <div class="text-gray-500 mt-1">Nama Pemilik Rekening</div>
                            <a href="" class="font-medium"><?= $c['nama_rek_client']; ?></a>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <div class="text-gray-500 mt-1">Nama Bank</div>
                            <a href="" class="font-bold"><?= $c['bank_client']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Top Categories -->
            
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
                        <div class="modal-body p-0">
                            <div class="p-5 text-left">
                                <div class="input-form mt-3">
                                    <label class="form-label">Nama Direktorat</label>
                                    <input name="nama_client" type="text" class="form-control" value="<?= $c['nama_client']; ?>">
                                    <input name="id_client" type="hidden" value="<?= $c['id_client']; ?>">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Kategori</label>
                                    <select placeholder="Pilih Kategori" class="form-control" name="kategori_client">
                                        <?php 
                                        foreach ($cat as $cc) : 
                                            $selected = ($c['kategori_client'] == $cc['id_client_category'] ? "selected" : "");
                                        ?>
                                            <option <?= $selected; ?> value="<?= $cc['id_client_category']; ?>"><?= $cc['nama_client_category']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Wilayah/Propinsi</label>
                                    <select placeholder="Pilih Wilayah" class="form-control" name="wilayah_client">
                                        <?php 
                                        foreach ($wil as $w) : 
                                            $selected = ($c['wilayah_client'] == $w['id_wilayah'] ? "selected" : "");
                                        ?>
                                            <option <?= $selected; ?> value="<?= $w['id_wilayah']; ?>"><?= $w['nama_wilayah']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Telepon</label>
                                    <input name="telepon_client" type="text" class="form-control" value="<?= $c['telepon_client']; ?>">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">N P W P</label>
                                    <input name="npwp_client" type="text" class="form-control" value="<?= $c['npwp_client']; ?>">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Nomer Rekening</label>
                                    <input name="no_rek_client" type="text" class="form-control" value="<?= $c['no_rek_client']; ?>">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Nama Pemilik Rekening</label>
                                    <input name="nama_rek_client" type="text" class="form-control" value="<?= $c['nama_rek_client']; ?>">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Nama Bank</label>
                                    <input name="bank_client" type="text" class="form-control" value="<?= $c['bank_client']; ?>">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Contact Person</label>
                                    <input name="pic_client" type="text" class="form-control" value="<?= $c['pic_client']; ?>">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Parent</label>
                                    <select placeholder="Pilih Parent" class="tom-select" name="parent_client" required>
                                        <option value="0" <?= ($c['parent_client'] == 0 ? "selected" : ""); ?>>- No Parent -</option>
                                        <?php 
                                        foreach ($client as $p) : 
                                            $selected = ($c['parent_client'] == $p['id_client'] ? "selected" : "");
                                        ?>
                                            <option value="<?= $p['id_client']; ?>"><?= $p['nama_client']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Foto</label>
                                    <input name="file" type="file" class="form-control" placeholder="foto">
                                </div>
                                <div class="input-form mt-3">
                                    <label class="form-label">Alamat Detail</label>
                                    <textarea name="alamat_client" class="form-control"><?= $c['alamat_client']; ?></textarea>
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-left">
                                <button type="submit" class="btn btn-primary w-24">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Top Categories -->
            </div>
        </form>
    </div>
</div>
