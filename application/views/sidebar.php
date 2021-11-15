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
        <nav class="side-nav no-animate">
            <a href="<?= base_url(); ?>" class="flex items-center pl-5 pt-4">
                <img alt="Satriacorp.id" class="w-6" src="<?= base_url(); ?>dist/images/logo.svg">
                <span class="hidden xl:block text-white text-lg ml-3">SIM<span class="font-medium">TRITAMA</span> </span>
            </a>
            <div class="side-nav__devider my-6"></div>

            <ul>
            <?php foreach(get_menu_parent() as $mv): ?>

            <?php 
                $uri = $this->uri->segment('1');
                $uri2 = $this->uri->segment('2');
                $uri3 = $this->uri->segment('3');
                //LOGIC MENU AKTIF
                if($uri == "") :
                    $uri = 'dashboard';
                endif;


                if($uri2 == "detail_user") :
                    $uri2 = 'list_user';
                elseif($uri2 == "detail_client"):
                    $uri2 = 'list_client';
                endif;

            ?>

            <?php if($mv['nama_menu'] != "divider"): ?>
                <li>
                    <a <?= (has_child($mv['id_menu']) > 0 ? '' : 'href="'.base_url().$mv['slug_menu'].'"') ?> class="side-menu cursor-pointer <?= ($uri == $mv['slug_menu'] ? "side-menu--active side-menu--open" : "") ?>">
                        <div class="side-menu__icon"> <i data-feather="<?= $mv['icon_menu']; ?>"></i></div>
                        <div class="side-menu__title">
                            <?= $mv['nama_menu']; ?>
                            <?php if(has_child($mv['id_menu']) > 0): ?>
                                <div class="side-menu__sub-icon "> 
                                    <i data-feather="chevron-<?= ($uri == $mv['slug_menu'] ? "up" : "down") ?>"></i> 
                                </div>
                            <?php endif; ?>
                        </div>
                    </a>

                    <?php if(has_child($mv['id_menu']) > 0): ?>
                    <ul class="<?= ($uri == $mv['slug_menu'] ? "side-menu__sub-open" : "") ?>">
                        <?php foreach(get_menu_child($mv['id_menu']) as $mc): ?>
                        <li>
                            <?php 
                                if(has_child($mc['id_menu']) > 0):
                                    $href = '';
                                else:
                                    $href = 'href="'.base_url().get_slug_parent($mc['parent_menu']).$mc['slug_menu'].'"';
                                endif;
                                
                            ?>
                            <a <?= $href ?> class="side-menu cursor-pointer <?= ($uri2 == $mc['slug_menu'] ? "side-menu--active" : "") ?>">
                                <div class="side-menu__icon"> <i data-feather="<?= $mc['icon_menu']; ?>"></i> </div>
                                <div class="side-menu__title"> 
                                    <?= $mc['nama_menu']; ?> 
                                    <?php if(has_child($mc['id_menu']) > 0): ?>
                                    <div class="side-menu__sub-icon "> 
                                        <i data-feather="chevron-<?= ($uri2 == $mc['slug_menu'] ? "up" : "down") ?>"></i> 
                                    </div>
                                <?php endif; ?>
                                </div>
                            </a>

                            <?php if(has_child($mc['id_menu']) > 0): ?>
                            <ul class="<?= ($uri2 == $mc['slug_menu'] ? "side-menu__sub-open" : "") ?>">
                                <?php foreach(get_menu_child($mc['id_menu']) as $ms): ?>
                                <li>
                                    <a href="<?= base_url().get_slug_parent($mc['parent_menu']).get_slug_parent($ms['parent_menu']).$ms['slug_menu']; ?>" class="side-menu <?= ($uri3 == $ms['slug_menu'] ? "side-menu--active" : "") ?>">
                                        <div class="side-menu__icon"> <i data-feather="<?= $ms['icon_menu']; ?>"></i> </div>
                                        <div class="side-menu__title"> <?= $ms['nama_menu']; ?> </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>

                            
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

        </nav>
                    
        <!-- BEGIN: Content -->
        <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="breadcrumb mr-auto hidden sm:flex"> <a href="<?= base_url(); ?>">Applications</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="<?= base_url(); ?>" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                    
                    <!-- BEGIN: Notifications -->
                    <div class="dropdown mr-auto sm:mr-6">
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


                    <div class="dropdown w-8 h-8">
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