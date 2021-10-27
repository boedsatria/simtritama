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
                    isi form dibawah ini dengan benar.
                </h2>
            </div>
            <div id="input" class="p-5">
                <div class="preview">
                    <label>Divisi</label>
                    <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                            <option value="pic" name="pic">PIC</option>
                            <option value="finance" name="finance">Finance</option>
                            <option value="produksi" name="produksi">Produksi</option>
                            <option value="placement" name="placement">Placement</option>
                        </select> </div>
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
                        <label>Level Akses</label>
                        <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="admin" name="admin">Admin</option>
                                <option value="user" name="user">User</option>
                            </select> </div>

                        <div class="mt-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <div class="" id="alamat" name="alamat">
                                <div class="preview">
                                    <div data-simple-toolbar="true" class="editor">
                                        <p>isi alamat anda dengan jelas</p>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-simple-editor" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <pre class="source-preview" id="copy-simple-editor"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv data-simple-toolbar=&quot;true&quot; class=&quot;editor&quot;HTMLCloseTag HTMLOpenTagpHTMLCloseTagContent of the editor.HTMLOpenTag/pHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <!-- END: Input -->
        </div>
    </div>
</div>
<!-- END: Content -->