
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card mt-5 border-0 shadow-lg my-3">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 left-login text-center">
                            <h4>Selamat Datang</h4>
                            <img src="<?= base_Url(); ?>img/logo-sitambel.png">
                            <span>Silahkan Login untuk melanjutkan</span>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="pb-2 text-center">
                                    <a href="<?= $login_button; ?>" class="btn btn-dark btn-icon-split">
                                        <span class="icon text-gray-600">
                                            <img src="<?= base_url('img/logo_google.svg'); ?>">
                                        </span>
                                        <span class="text">Login dengan Google</span>
                                    </a>
                                </div>
                                <div class="divider-login"><span>atau</span></div>
                                <form class="user py-2" method="POST" action="<?php echo base_url();?>login/action">
                                    <div class="form-group">
                                        <input required type="text" name="nip" class="form-control form-control-user" placeholder="Enter Email or NIP">
                                    </div>
                                    <div class="form-group">
                                        <input required type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <?php if($this->session->flashdata('error_login') != ''): ?>
                                    <div class="mt-3 alert alert-danger">
                                        <?php echo $this->session->flashdata('error_login'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-forgot">
                                    <a class="pointer" data-toggle="modal" data-target="#daftar">DAFTAR SEKARANG</a>
                                 
                                    atau 

                                    <a data-toggle="modal" data-target="#lupa">LUPA PASSWORD?</a>
                                </div>

                                


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0 17px;">
    <div class="modal-dialog" role="document">
    
        <form action="<?= base_url().'login/add_action'; ?>" method="POST" enctype="multipart/form-data" class="row">
        
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran User SITAMBEL</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="text-gray-600">Nama</label>
                        <input required class="form-control" name="nama_user" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label class="text-gray-600">Email</label>
                        <input required class="form-control" name="email_user" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label class="text-gray-600">Password</label>
                        <input required class="form-control" id="pass" type="password" name="password_user">
                    </div>
                        
                    <div class="form-group">
                        <label class="text-gray-600">Konfirmasi Password</label>
                        <input required class="form-control" id="pass_c" type="password" name="password_user">
                    </div>
                    <div class="form-group">
                        <label class="message"></label>
                    </div>
                    
                        
                    <div class="form-group">
                        <label class="text-gray-600">No. HP</label>
                        <input required class="form-control hp" name="telepon_user" placeholder="08xxxxxxxx">
                    </div>
                </div>
                                
                <div class="modal-footer">
                    <button class="btn btn-secondary back1" type="button" data-dismiss="modal">Batal</button>
                    <button id="btn-submit" type="submit" class="btn btn-primary text-white">Proses</button>
                </div>
            </div>
        </form>
    </div>
</div>
