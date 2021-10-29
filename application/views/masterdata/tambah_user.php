<div class="flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Form Tambah User
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Simple Editor -->
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Isi form dibawah ini dengan benar.
                </h2>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>masterdata/tambah_user_action">
                <div class="p-5">
                    <div class="preview">
                        <label>Divisi</label>
                        <div class="input-form mt-2">
                            <select placeholder="Pilih Divisi" class="form-control" name="role_user" required>
                                <option value="">- Pilih Role -</option>
                                <?php foreach ($role as $r) : ?>
                                    <option value="<?= $r['id_role']; ?>"><?= $r['nama_role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-form mt-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input id="nama_lengkap" name="nama_user" type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                       
                        
                        <div class="input-form mt-3">
                            <label for="email_user" class="form-label">Email</label>
                            <input id="email_user" name="email_user" type="text" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="input-form mt-3">
                            <label for="no_hp" class="form-label">No Handphone</label>
                            <input id="no_hp" name="telepon_user" type="text" class="form-control" placeholder="No. Telephone">
                        </div>
                        <div class="input-form mt-3">
                            <label for="foto_user" class="form-label">Foto</label>
                            <input id="foto_user" name="file" type="file" class="form-control" placeholder="foto">
                        </div>
                        <div class="input-form mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" name="password_user" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        
                        
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