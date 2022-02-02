<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        GENERATE ORDER PRODUKSI DAN ORDER MEDIA
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- KOLOM BESAR-->
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- KOLOM KIRI-->
        <!-- BEGIN: BLOCK 1 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    CARI / PILIH DATA PROJECT
                </h2>
            </div>
            <div class="p-5">
                BERDASARKAN NOMOR RINGKOS                
                <!-- BEGIN: Nested Select -->
                <div class="mt-3"> <label>Nomor Ringkos</label>
                    <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                            <optgroup label="Januari">
                                <option value="1">Ringkos A101</option>
                                <option value="2">Ringkos A102</option>
                                <option value="3">Ringkos A103</option>
                                <option value="4">Ringkos A104</option>
                                <option value="5">Ringkos A105</option>
                            </optgroup>
                            <optgroup label="Februari">
                                <option value="1">Ringkos B001</option>
                                <option value="2">Ringkos B002</option>
                                <option value="3">Ringkos B003</option>
                                <option value="4">Ringkos B004</option>
                                <option value="5">Ringkos B005</option>
                            </optgroup>
                        </select> </div>
                </div>
                <!-- END: Nested Select -->
            </div>
            <div class="p-5">
                PERSEMPIT PENCARIAN (Permudah pencarian dengan mempersempit parameter)               
                <!-- BEGIN: Nested Select -->
                <div class="mt-3"> <label>NAMA CLIENT</label>
                    <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">Kementerian 1</option>
                                <option value="2">Kementerian 2</option>
                                <option value="3">Kementerian 3</option>
                        </select> </div>
                </div>
                <div class="mt-3"> <label>JUDUL PEKERJAAN</label>
                    <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">Dirjen 1</option>
                                <option value="2">Dirjen 2</option>
                                <option value="3">Dirjen 3</option>
                        </select> </div>
                </div>

                <!-- END: Nested Select -->
            </div>
        </div>
        <!-- END: BLOCK 1 -->
        <br>
        <!-- BEGIN: BLOCK 2 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    DATA PEKERJAAN
                </h2>
            </div>
            <div class="p-5">
                WAKTU PEKERJAAN
                <div class="mt-3"> <label for="regular-form-5" class="form-label">Jangka Waktu Pekerjaan sesuai Kontrak</label>
                    <div class="grid grid-cols-12 gap-2">
                                <input type="text" class="form-control col-span-4" placeholder="TANGGAL MULAI AUTO" aria-label="default input inline 1" disabled>
                                <input type="text" class="form-control col-span-4" placeholder="TANGGAL SELESAI AUTO" aria-label="default input inline 2" disabled>
                            </div>
                </div>
                <div class="mt-3"> <label for="regular-form-5" class="form-label">Tentukan waktu Mulai dan akhir Produksi</label>
                    <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
                </div>
                <div class="mt-3"> <label for="regular-form-5" class="form-label">Tentukan waktu mulai dan akhir Placement</label>
                <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
                </div>

            </div>
        </div>
        <!-- END: BLOCK 2 -->
        <br>
        <!-- BEGIN: BLOCK 3 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    ANGGARAN PEKERJAAN
                </h2>
            </div>
            <div class="p-5">
                <div class="mt-3"> <label for="regular-form-5" class="form-label">Nilai HPS sesuai Kontrak</label>
                    <input id="regular-form-5" type="text" class="form-control" placeholder="HPS sesuai Pagu Pekerjaan Otomatis dari database Ringkos" disabled>
                </div>
            </div>
        </div>
        <!-- END: BLOCK 3 -->
    </div>
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- KOLOM KANAN-->
        <!-- BEGIN: BLOCK 4 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    RINGKASAN JOB ORDER PRODUKSI
                </h2>
            </div>
            <div class="p-5">
                <input id="regular-form-5" type="text" class="form-control" placeholder="NOMOR JOB ORDER FORMAT : Nomor Ringkos/No.Job/JO/dd/mm/yyyy" disabled>   
                
                <div class="p-5">Konten Produksi</div>

                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">JUDUL VERSI</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">KATEGORI PRODUKSI</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">TALENT</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">VENUE PRODUKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">Keselamatan Kerja dalam ruang</td>
                                <td class="border">Video Syuting</td>
                                <td class="border">Lucky Bayu</td>
                                <td class="border">Ruang Assembly PT Astra</td>
                            </tr>
                            <tr>
                                <td class="border">Menuju Indonesia Sehat</td>
                                <td class="border">Video Animasi 3D</td>
                                <td class="border"> - </td>
                                <td class="border"> - </td>
                            </tr>
                            <tr>
                                <td class="border">Keselamatan Kerja Ketinggian</td>
                                <td class="border">Video 2D Ekplainer</td>
                                <td class="border"> - </td>
                                <td class="border"> - </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                


                <!-- BEGIN: Nested Select -->
                <div class="mt-3"> <label>Tim Pelaksana Produksi Terpilih</label>
                    <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">TIM 1</option>
                                <option value="2">TIM 2</option>
                                <option value="3">TIM 3</option>
                        </select> </div>
                </div>
                <!-- END: Nested Select -->
                <div class="mt-3"> <label>Upload Materi Produksi</label>
                    <form action="/file-upload" class="dropzone">
                        <div class="fallback"> <input name="file" type="file" multiple /> </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                            <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                        </div>
                    </form>
                </div><br>


                <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                <button class="btn btn-warning w-32 mr-2 mb-2"> <i data-feather="send" class="w-4 h-4 mr-2"></i> Kirim </button>


            </div>
        </div>
        <!-- END: BLOCK 4 -->
        <br>
        <!-- BEGIN: BLOCK 5 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    JOB ORDER MEDIA
                </h2>
            </div>
            <div class="p-5">
                MEDIA ORDER PLACEMENT
                <div class="mt-3"> <label for="regular-form-5" class="form-label">Kode Produksi</label>
                    <input id="regular-form-5" type="text" class="form-control" placeholder="otomatis dari nomor surat order produksi" disabled>
                </div>
                <div class="mt-3"> <label for="regular-form-5" class="form-label">Jumlah Versi</label>
                    <input id="regular-form-5" type="text" class="form-control" placeholder="jumlah versi produksi otomatis dari data Ringkos" disabled>
                </div>
                <div class="mt-3"> <label for="regular-form-5" class="form-label">Media Placement</label>
                    <div class="overflow-x-auto">
                        <table class="table table--sm">
                            <thead>
                                <tr>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Jenis Media</th>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Wilayah</th>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Media</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-b dark:border-dark-5">1</td>
                                    <td class="border-b dark:border-dark-5">TV Nasional</td>
                                    <td class="border-b dark:border-dark-5">Jakarta</td>
                                    <td class="border-b dark:border-dark-5">Trans7</td>
                                </tr>
                                <tr>
                                    <td class="border-b dark:border-dark-5">2</td>
                                    <td class="border-b dark:border-dark-5">TV Nasional</td>
                                    <td class="border-b dark:border-dark-5">Jakarta</td>
                                    <td class="border-b dark:border-dark-5">TVRI</td>
                                </tr>
                                <tr>
                                    <td class="border-b dark:border-dark-5">3</td>
                                    <td class="border-b dark:border-dark-5">Billboard</td>
                                    <td class="border-b dark:border-dark-5">Bandung</td>
                                    <td class="border-b dark:border-dark-5">Billboard Bandung 1</td>
                                </tr>
                                <tr>
                                    <td class="border-b dark:border-dark-5">4</td>
                                    <td class="border-b dark:border-dark-5">Billboard</td>
                                    <td class="border-b dark:border-dark-5">Semarang</td>
                                    <td class="border-b dark:border-dark-5">Billboard Semarang 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                    <button class="btn btn-warning w-32 mr-2 mb-2"> <i data-feather="send" class="w-4 h-4 mr-2"></i> Kirim </button>



                </div>
            </div>
            <!-- END: BLOCK 5 -->
        </div>

    </div>
</div>
<!-- END: Content -->