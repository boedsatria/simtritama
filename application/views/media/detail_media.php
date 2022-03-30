<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <?php
                $img_src = $m['photo_media'];
                $avatar = (strpos($img_src, "http") !== false ? $img_src : base_url() . 'uploads/media/' . $img_src);
                ?>

                <img alt="<?= $m['nama_media']; ?>" class="rounded-full" src="<?php echo ($img_src == '' ? base_url('dist/images/no-images.png') : $avatar); ?>">
            
            </div>
            <div class="ml-5">
                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg"><?= $m['nama_media']; ?></div>
                <div class="text-gray-600"><?= $m['nama_media_category']; ?></div>
                <div class="text-gray-600"><?= $m['nama_media_type']; ?></div>
            </div>
        </div>
        <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i><?= $m['email_media']; ?></div>
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="phone" class="w-4 h-4 mr-2"></i><?= $m['telepon_media']; ?></div>
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="map-pin" class="w-4 h-4 mr-2"></i><?= $m['alamat_media']; ?></div>
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="globe" class="w-4 h-4 mr-2"></i><?= $m['titik_media']; ?></div>
            </div>
        </div>
    </div>
    <div class="nav nav-tabs flex-col sm:flex-row justify-center lg:justify-start" role="tablist"> 
        <a id="dashboard-tab" data-toggle="tab" data-target="#dashboard" class="py-4 sm:mr-8 cursor-pointer active" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>

        <a id="account-and-profile-tab" data-toggle="tab" data-target="#account-and-profile" class="py-4 cursor-pointer sm:mr-8" role="tab" aria-selected="false">Edit Profile</a> 
    </div>
</div>
<!-- END: Profile Info -->
<div class="intro-y tab-content mt-5">
    <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Top Categories -->
            <div class="intro-y box col-span-12 lg:col-span-9">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        RATE CARD 
                    </h2>
                </div>
            </div>

            
            <!-- END: Top Categories -->
            <!-- BEGIN: Work In Progress -->
            <div class="intro-y box col-span-12 lg:col-span-3">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        Proses Pekerjaan
                    </h2>
                </div>
                <div class="p-5">
                    <div>
                        <div class="flex">
                            <div class="mr-auto">Ringkos 1</div>
                            <div>50%</div>
                        </div>
                        <div class="progress h-1 mt-2">
                            <div class="progress-bar w-1/2 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="flex">
                            <div class="mr-auto">Ringkos 2</div>
                            <div>20%</div>
                        </div>
                        <div class="progress h-1 mt-2">
                            <div class="progress-bar w-1/4 bg-theme-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="flex">
                            <div class="mr-auto">Ringkos 3</div>
                            <div>70%</div>
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
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Top Categories -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                    DETAIL DATA PENGURUS PERUSAHAAN
                    </h2>
                </div>
                <div class="p-5">
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

                            <!-- identitas pengurus -->

                            <tr class="text-center">
                                <td class="border-b dark:border-dark-5">1</td>
                                <td class="border-b dark:border-dark-5">Nama Komisaris</td>
                                <td class="border-b dark:border-dark-5">Budi Hartono</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr class="text-center">
                                <td class="border-b dark:border-dark-5">2</td>
                                <td class="border-b dark:border-dark-5">No. KTP komisaris</td>
                                <td class="border-b dark:border-dark-5">123456789</td>
                                <td class="border-b dark:border-dark-5">
                                    <button class="btn btn-success w-24 mr-2 mb-2">Download</button>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td class="border-b dark:border-dark-5">3</td>
                                <td class="border-b dark:border-dark-5">Nama Direktur</td>
                                <td class="border-b dark:border-dark-5">Heru Poerwanto</td>
                                <td class="border-b dark:border-dark-5"> - </td>
                            </tr>
                            <tr class="text-center">
                                <td class="border-b dark:border-dark-5">4</td>
                                <td class="border-b dark:border-dark-5">No. KTP Direktur</td>
                                <td class="border-b dark:border-dark-5">123456789</td>
                                <td class="border-b dark:border-dark-5">
                                    <button class="btn btn-success w-24 mr-2 mb-2">Download</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END: Top Categories -->
            <!-- BEGIN: Work In Progress -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                    DETAIL DATA PAJAK
                    </h2>
                </div>
                <div class="p-5">
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

                            <!-- NPWP -->
                            <tr>
                                <td class="border-b dark:border-dark-5">1</td>
                                <td class="border-b dark:border-dark-5">No. NPWP Perusahaan </td>
                                <td class="border-b dark:border-dark-5">123456789</td>
                                <td class="border-b dark:border-dark-5">
                                    <button class="btn btn-success w-24 mr-2 mb-2">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">2</td>
                                <td class="border-b dark:border-dark-5">No. NPWP Komisaris </td>
                                <td class="border-b dark:border-dark-5">123456789</td>
                                <td class="border-b dark:border-dark-5">
                                    <button class="btn btn-success w-24 mr-2 mb-2">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">3</td>
                                <td class="border-b dark:border-dark-5">No. NPWP Direktur </td>
                                <td class="border-b dark:border-dark-5">123456789</td>
                                <td class="border-b dark:border-dark-5">
                                    <button class="btn btn-success w-24 mr-2 mb-2">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">4</td>
                                <td class="border-b dark:border-dark-5"> SPT Bulanan</td>
                                <td class="border-b dark:border-dark-5">-</td>
                                <td class="border-b dark:border-dark-5">
                                    <button class="btn btn-success w-24 mr-2 mb-2">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">5</td>
                                <td class="border-b dark:border-dark-5"> SPT Triwulan</td>
                                <td class="border-b dark:border-dark-5">-</td>
                                <td class="border-b dark:border-dark-5">
                                    <button class="btn btn-success w-24 mr-2 mb-2">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">6</td>
                                <td class="border-b dark:border-dark-5"> SPT Tahunan</td>
                                <td class="border-b dark:border-dark-5">-</td>
                                <td class="border-b dark:border-dark-5">
                                    <button class="btn btn-success w-24 mr-2 mb-2">Download</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END: Work In Progress -->
        </div>
    </div>
</div>
