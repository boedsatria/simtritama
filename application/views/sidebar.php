<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon">
            <img style="opacity: 0.2;width: 70%;" src="<?= base_url(); ?>img/traffic-sign-sitambel.png">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>laporan">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Daftar Laporan</span>
        </a>
    </li>
    <?php if($this->session->has_userdata('userlogin')): ?>
        <?php if($this->session->userdata('userlogin')['role_user'] <= 2): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>tim">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>material">
                    <i class="fas fa-fw fa-recycle"></i>
                    <span>Material</span>
                </a>
            </li>
        <?php endif; ?>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <img src="<?= base_url(); ?>img/logo-sitambel.png" class="img-logo">
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">


            <?php if (!$this->session->userdata('userlogin')): ?>

            <li class="no-arrow"><a href="<?php echo base_url();?>login" class="nav-link btn btn-sm btn-primary">Login</a></li>

            <?php else : ?>
            <?php
            $img_src = $this->session->userdata('userlogin')['photo_user'];
            $avatar = (strpos($img_src, "http") !== false ? $img_src : base_url().'img/photo/'.$img_src);
            ?>

            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-sm-inline d-none text-gray-600 small"><?php echo $this->session->userdata('userlogin')['nama_user'];?></span>
                    <img class="img-profile rounded-circle" src="<?php echo ($img_src == '' ? base_url('img/no-images.png') : $avatar);?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url().'tim/detail/'.$this->session->userdata('userlogin')['id_user']; ?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="<?= base_url().'tim/ganti_password/'.$this->session->userdata('userlogin')['id_user']; ?>">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Ganti Password
                    </a>
                    <a class="dropdown-item" href="<?= base_url().'laporan/my_report/'.$this->session->userdata('userlogin')['id_user']; ?>">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Laporan yang Anda Buat
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url();?>login/remove">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
            <?php endif;?>

        </ul>

    </nav>
    <!-- End of Topbar -->