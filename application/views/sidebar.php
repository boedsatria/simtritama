    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="SIMTRITAMA APPS" class="w-6" src="<?= base_url(); ?>dist/images/logo.svg">
                </a>
                <a id="mobile-menu-toggler" class="cursor-pointer"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-29 py-5 hidden">
                <?php foreach(get_menu_parent() as $mv): ?>

                <?php 
                    //LOGIC MENU AKTIF
                    if($this->uri->segment('1') == $mv['slug_menu']) :
                        $activem = 'menu--active';
                    else:
                        $activem = '';
                    endif;

                ?>

                <?php if($mv['nama_menu'] != "divider"): ?>
                    <li>
                        <a <?= ($mv['slug_menu'] == "#" ? '' : 'href="'.base_url().$mv['slug_menu'].'"') ?> class="cursor-pointer menu <?= $activem; ?> <?= ($this->uri->segment('1') == "" && $mv['slug_menu'] == "dashboard" ? "menu--active" : "") ?>">
                            <div class="menu__icon"> <i data-feather="<?= $mv['icon_menu']; ?>"></i> </div>
                            <div class="menu__title"> <?= $mv['nama_menu']; ?> 
                                <?php if(has_child($mv['id_menu']) > 0): ?>
                                    <i data-feather="chevron-down" class="menu__sub-icon transform rotate-180"></i>
                                <?php endif; ?>
                                 
                            </div>
                        </a>

                        <?php if(has_child($mv['id_menu']) > 0): ?>
                        <ul class="<?= ($this->uri->segment('1') == "" && $mv['slug_menu'] == "dashboard" ? "menu__sub-open" : "") ?>">
                            <?php foreach(get_menu_child($mv['id_menu']) as $mc): ?>
                            <li>
                                <a href="<?= base_url().$mc['slug_menu']; ?>" class="menu">
                                    <div class="menu__icon"> <i data-feather="<?= $mc['icon_menu']; ?>"></i> </div>
                                    <div class="menu__title"> <?= $mc['nama_menu']; ?> </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                    </li>


                <?php else: ?>
                    <li class="side-nav__devider my-6"></li>
                <?php endif; ?>

                <?php endforeach; ?>

            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Satriacorp.id" class="w-6" src="<?= base_url(); ?>dist/images/logo.svg">
                    <span class="hidden xl:block text-white text-lg ml-3">SIM<span class="font-medium">TRITAMA</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>

                <ul>
                    <?php foreach(get_menu_parent() as $mv): ?>

                        <?php 
                            $uri = $this->uri->segment('1');
                            //LOGIC MENU AKTIF
                            if($uri == "") :
                                $uri = 'dashboard';
                            endif;

                            if($uri == $mv['slug_menu']) :
                                $active = 'side-menu--active';
                            else:
                                $active = '';
                            endif;
                        ?>

                        <?php if($mv['nama_menu'] != "divider"): ?>
                            <li>
                                <a <?= ($mv['slug_menu'] == "#" ? '' : 'href="'.base_url().$mv['slug_menu'].'"') ?> class="side-menu cursor-pointer <?= $active; ?> <?= ($uri == str_replace(" ", "", strtolower($mv['nama_menu'])) ? "side-menu--active side-menu--open" : "") ?>">
                                    <div class="side-menu__icon"> <i data-feather="<?= $mv['icon_menu']; ?>"></i></div>
                                    <div class="side-menu__title">
                                        <?= $mv['nama_menu']; ?>
                                        <?php if(has_child($mv['id_menu']) > 0): ?>
                                            <div class="side-menu__sub-icon "> 
                                                <i data-feather="chevron-<?= ($uri == str_replace(" ", "", strtolower($mv['nama_menu'])) ? "up" : "down") ?>"></i> 
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </a>

                                <?php if(has_child($mv['id_menu']) > 0): ?>
                                <ul class="<?= ($uri == str_replace(" ", "", strtolower($mv['nama_menu'])) ? "side-menu__sub-open" : "") ?>">
                                    <?php foreach(get_menu_child($mv['id_menu']) as $mc): ?>
                                    <li>
                                        <a href="<?= base_url().$mc['slug_menu']; ?>" class="side-menu <?= ($this->uri->segment('2') == explode('/', $mc['slug_menu'])[1] ? "side-menu--active" : "") ?>">
                                            <div class="side-menu__icon"> <i data-feather="<?= $mc['icon_menu']; ?>"></i> </div>
                                            <div class="side-menu__title"> <?= $mc['nama_menu']; ?> </div>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>

                            </li>


                        <?php else: ?>
                            <li class="side-nav__devider my-6"></li>
                        <?php endif; ?>

                    <?php endforeach; ?>
                    <li class="side-nav__devider my-6"></li>
                </ul>
                
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Satriacorp.id" class="w-6" src="<?= base_url(); ?>dist/images/logo.svg">
                    <span class="hidden xl:block text-white text-lg ml-3">MENU STATIC</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>

                <ul>
                    <li>
                        <a href="" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="alert-list.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="file-manager.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                            <div class="side-menu__title">
                                Master Data 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="data-direktorat.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Data Direktorat </div>
                                </a>
                            </li>
                            <li>
                                <a href="data-media.html" class="side-menu side-menu--active">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Data Media </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                            <div class="side-menu__title">
                                Team/Karyawan
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="tim-produksi.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Produksi </div>
                                </a>
                            </li>
                            <li>
                                <a href="tim-placement.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Placement </div>
                                </a>
                            </li>
                            <li>
                                <a href="tim-mitra-ph.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Mitra PH </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                            <div class="side-menu__title">
                                Admin/PIC 
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="pic-data-project.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Data Project </div>
                                </a>
                            </li>
                            <li>
                                <a href="pic-e-faktur.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> E-Faktur </div>
                                </a>
                            </li>
                            <li>
                                <a href="pic-media-order.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Media Order / Production Order </div>
                                </a>
                            </li>
                            <li>
                                <a href="pic-file-upload.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> File Upload </div>
                                </a>
                            </li>
                                <a href="pic-validation.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Validasi/Laporan </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title">
                                Finance 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="finance-diagram-monitoring.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Diagram Monitoring </div>
                                </a>
                            </li>
                            <li>
                                <a href="finance-buku-besar.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Buku Besar </div>
                                </a>
                            </li>
                            <li>
                                <a href="finance-petty-cash.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Petty Cash </div>
                                </a>
                            </li>
							<li>
                                <a href="finance-asset-penyusutan.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Asset dan Penyusutan </div>
                                </a>
                            </li>
							<li>
                                <a href="finance-general-ledger.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> General Ledger </div>
                                </a>
                            </li>
							<li>
                                <a href="finance-cetak-laporan.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Cetak Laporan Keuangan </div>
                                </a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title">
                                Produksi 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="produksi-job-order.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Job Order </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>produksi/tambah_data" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Pengajuan </div>
                                </a>
                            </li>
                            <li>
                                <a href="produksi-pembayaran-tagihan.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Pembayaran/Tagihan </div>
                                </a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title">
                                Placement 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="placement-job-order.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Job Order </div>
                                </a>
                            </li>
                            <li>
                                <a href="placement-submit.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Pengajuan dan logproof</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-image-zoom.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Pembayaran/Tagihan </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->

            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="<?= base_url(); ?>">Applications</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                    
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                        <div class="notification-content pt-2 dropdown-menu">
                            <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->

                    <?php
                    $img_src = $this->session->userdata('userlogin')['photo_user'];
                    $avatar = (strpos($img_src, "http") !== false ? $img_src : base_url().'uploads/user/'.$img_src);
                    ?>


                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
                            <img alt="<?php echo $this->session->userdata('userlogin')['nama_user'];?>" src="<?php echo ($img_src == '' ? base_url('dist/images/no-images.png') : $avatar);?>">
                        </div>
                        <div class="dropdown-menu w-56">
                            <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                                <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                                    <div class="font-medium"><?php echo $this->session->userdata('userlogin')['nama_user'];?></div>
                                    <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600"><?php echo $this->session->userdata('userlogin')['role_name'];?></div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                </div>
                                <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                                    <a href="<?php echo base_url();?>login/remove" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->