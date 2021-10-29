<div class="flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Form Tambah User
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Simple Editor -->
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Input -->
        <div id="form-validation" class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Isi form dibawah ini dengan benar.
                </h2>
            </div>
            <form class="validate-form" method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_user_action">
                <div class="p-5">
                    <div class="preview">
                        <label>Divisi</label>
                        <div class="input-form mt-2">
                            <select placeholder="Pilih Divisi" class="form-control" name="role">
                                <option value="">- Pilih Role -</option>
                                <?php foreach ($role as $r) : ?>
                                    <option value="<?= $r['id_role']; ?>"><?= $r['nama_role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-form mt-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="input-form mt-3">
                            <label for="nip_user" class="form-label">No induk pegawai (NIP) otomatis</label>
                            <input id="nip_user" name="nip_user" type="text" class="form-control" placeholder="OTOMATIS FORMAT : 4 HURUF INITIAL DEPARTEMEN/ID DATABASE/BULAN/TAHUN" disabled>
                        </div>
                        <div class="input-form mt-3">
                            <label for="email_user" class="form-label">Email</label>
                            <input id="email_user" name="email_user" type="text" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="input-form mt-3">
                            <label for="no_hp" class="form-label">No Handphone</label>
                            <input id="no_hp" name="no_hp" type="text" class="form-control" placeholder="No. Telephone">
                        </div>
                        <div class="input-form mt-3">
                            <label for="foto_user" class="form-label">Foto</label>
                            <input id="foto_user" name="foto_user" type="file" class="form-control" placeholder="foto">
                        </div>
                        <div class="input-form mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="input-form mt-3">
                            <label for="kon_pass" class="form-label">Konfirmasi Password</label>
                            <input id="kon_pass" name="kon_pass" type="password" class="form-control" placeholder="konfirmasi Password" required>
                        </div>
                        <div class="input-form mt-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea id="alamat" name="alamat" class="editor form-control">
                                <p>isi alamat anda dengan jelas</p>
                            </textarea>
                        </div>

                        <!-- BEGIN: Success Notification Content -->
                        <div id="success-notification-content" class="toastify-content hidden flex" >
                            <i class="text-theme-9" data-feather="check-circle"></i> 
                            <div class="ml-4 mr-4">
                                <div class="font-medium">Registration success!</div>
                                <div class="text-gray-600 mt-1"> Please check your e-mail for further info! </div>
                            </div>
                        </div>
                        <!-- END: Success Notification Content -->
                        <!-- BEGIN: Failed Notification Content -->
                        <div id="failed-notification-content" class="toastify-content hidden flex" >
                            <i class="text-theme-6" data-feather="x-circle"></i> 
                            <div class="ml-4 mr-4">
                                <div class="font-medium">Registration failed!</div>
                                <div class="text-gray-600 mt-1"> Please check the fileld form. </div>
                            </div>
                        </div>
                        <!-- END: Failed Notification Content -->

                        
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </div>
                <!-- END: Input -->
            </form>
        </div>
    </div>
</div>
<!-- END: Content -->