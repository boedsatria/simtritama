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
                        <div class="mt-2">
                            <select placeholder="Pilih Divisi" class="form-control" name="role">
                                <option value="">- Pilih Role -</option>
                                <?php foreach ($role as $r) : ?>
                                    <option value="<?= $r['id_role']; ?>"><?= $r['nama_role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select placeholder="Pilih Divisi" class="form-control" hidden>
                                <option value="pic" name="pic">PIC</option>
                                <option value="finance" name="finance">Finance</option>
                                <option value="produksi" name="produksi">Produksi</option>
                                <option value="placement" name="placement">Placement</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="mt-3">
                            <label for="nip_user" class="form-label">No induk pegawai (NIP) otomatis</label>
                            <input id="nip_user" name="nip_user" type="text" class="form-control" placeholder="OTOMATIS FORMAT : 4 HURUF INITIAL DEPARTEMEN/ID DATABASE/BULAN/TAHUN" disabled>
                        </div>
                        <div class="mt-3">
                            <label for="email_user" class="form-label">Email</label>
                            <input id="email_user" name="email_user" type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="mt-3">
                            <label for="no_hp" class="form-label">No Handphone</label>
                            <input id="no_hp" name="no_hp" type="text" class="form-control" placeholder="No. Telephone">
                        </div>
                        <div class="mt-3">
                            <label for="foto_user" class="form-label">Foto</label>
                            <input id="foto_user" name="foto_user" type="file" class="form-control" placeholder="foto">
                        </div>
                        <div class="mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <label for="kon_pass" class="form-label">Konfirmasi Password</label>
                            <input id="kon_pass" name="kon_pass" type="password" class="form-control" placeholder="konfirmasi Password">
                        </div>
                        <div class="mt-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea id="alamat" name="alamat" class="editor form-control">
                                <p>isi alamat anda dengan jelas</p>
                            </textarea>

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