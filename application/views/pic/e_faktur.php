<!-- BEGIN: DATA EFAKTUR -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data E-FAKTUR
    </h2>
</div>

<?php
print_r($v);die;
?>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: DATA RINGKOS -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Data E-Faktur Keluar
                </h2>
            </div>
            <div class="p-5">
                <div class="preview">
                    <div>
                        <label for="regular-form-1" class="form-label">Pilih Direktorat lalu Nomor Ringkosnya :</label>
                        <div class="flex flex-col sm:flex-row items-center">
                            <select class="form-select form-select-lg sm:mt-2 sm:mr-2" aria-label=".form-select-lg example">
                                <option>Direktorat 1</option>
                                <option>Direktorat 2</option>
                            </select>
                            <select class="form-select form-select-lg sm:mt-2 sm:mr-2" aria-label=".form-select-lg example">
                                <option>Ringkos 001</option>
                                <option>Ringkos 002</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="mt-3">
                        <label for="regular-form-1" class="form-label">JUDUL KEGIATAN</label>
                        <input id="regular-form-1" type="text" class="form-control" placeholder="Otomatis dari database ringkos">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-1" class="form-label con-span-4">NOMOR SPK/KONTRAK</label>
                        <div class="grid grid-cols-8 gap-2">
                            <input type="text" class="form-control col-span-4" placeholder="Nomor otomatis dari data database" aria-label="default input inline 1">
                            <input type="text" class="form-control col-span-4" placeholder="Tanggal otomatis dari database" aria-label="default input inline 3">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-1" class="form-label">NOMOR N.P.W.P</label>
                        <input id="regular-form-1" type="text" class="form-control" placeholder="Otomatis dari database Direktorat">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-1" class="form-label con-span-4">TANGGAL PENYELESAIAN</label>
                        <div class="grid grid-cols-8 gap-2">
                            <input type="text" class="form-control col-span-4" placeholder="Tanggal otomatis dari database" aria-label="default input inline 3">
                        </div>
                        <br>
                        <label for="regular-form-1" class="form-label con-span-4">NILAI KONTRAK</label>
                        <div class="input-group mt-2"> <input type="text" class="form-control" placeholder="Price otomatis dari database ringkos" aria-label="Price" aria-describedby="input-group-price">
                            <div id="input-group-price" class="input-group-text">.00</div>
                        </div><br>
                        <label for="regular-form-1" class="form-label con-span-4">NILAI DPP</label>
                        <div class="input-group mt-2"> <input type="text" class="form-control" placeholder="Price otomatis dari database ringkos dikalikan rumus DPP" aria-label="Price" aria-describedby="input-group-price">
                            <div id="input-group-price" class="input-group-text">.00</div>
                        </div><br>
                        <div class="mt-3"> <label>NILAI PPN</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2"> <input id="radio-switch-4" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                    <label class="form-check-label" for="radio-switch-4">12%</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0"><input id="radio-switch-5" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                    <label class="form-check-label" for="radio-switch-5">11.5%</label>
                                </div>
                                <input type="text" class="form-control col-span-4" placeholder="Tanggal otomatis dari database" aria-label="default input inline 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Data ringkos -->  
</div>
 

<div class="intro-y col-span-12 lg:col-span-6">
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                Data E-Faktur Masuk
                </h2>
            </div>
            <div id="input" class="p-5">
                <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>

                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NAMA MEDIA</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">NO. FAKTUR</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">TANGGAL FAKTUR</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">TRANSCOPR</td>
                                <td class="border">123456</td>
                                <td class="border">20/11/2021</td>
                                
                            </tr>
                            <tr>
                                <td class="border">SURYA CIPTA MANDIRI</td>
                                <td class="border">234567</td>
                                <td class="border"> 20/11/2021 </td>
                                
                            </tr>
                            <tr>
                                <td class="border">MNC</td>
                                <td class="border">345678</td>
                                <td class="border">20/11/2021</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                        <label for="regular-form-1" class="form-label">NAMA PERUSAHAAN MEDIA</label>
                        <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">TransCorp</option>
                                <option value="2">surya cipta mandiri</option>
                                <option value="3">Media internusa</option>
                                <option value="4">MNC</option>
                            </select> </div>
                    </div>
                    <div class="mt-3">
                    <label for="regular-form-3" class="form-label">NO FAKTUR</label>
                        <div class="grid grid-cols-12 gap-2">
                            <input type="text" class="form-control col-span-4" placeholder="Nomor Faktur lengkap" aria-label="default input inline 1">
                            <div class="relative w-56 mx-auto">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                </div>
                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                    <form data_single="true" action="/file-upload">
                            <label for="upload_faktur" class="form-label mt-2">Upload Faktur</label>
                            <input id="upload_faktur" name="upload_faktur" type="file" class="form-control" placeholder="Upload Faktur">
                        </form>
                    </div>
                </div>
            </br>
                <button class="btn btn-primary w-48 mr-2 mb-2"> <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Tambah Data </button>
            </div>
        </div>
        <!-- BEGIN: SUBMIT -->
        <div class="intro-y box mt-5">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    SUBMIT
                </h2>
            </div>
            <div id="horizontal-form" class="p-5">
                <div class="preview">
                    <button class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Simpan </button>  <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                </div>
            </div>
        </div>
    </div>


    
    <div class="col-span-12 lg:col-span-6">
        <!-- BEGIN: DATA BENDAHARA -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    DATA BENDAHARA
                </h2>
            </div>
            <div id="input" class="p-5">
                <div class="preview">
                    <div class="mt-3">
                        <label for="regular-form-1" class="form-label">NAMA PEMILIK REKENING</label>
                        <input id="regular-form-1" type="text" class="form-control" placeholder="Otomatis dari database ringkos">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-1" class="form-label">NOMOR N.P.W.P</label>
                        <input id="regular-form-1" type="text" class="form-control" placeholder="Otomatis dari database Direktorat">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-1" class="form-label">ALAMAT PEMILIK REKENING</label>
                        <input id="regular-form-1" type="text" class="form-control" placeholder="Otomatis dari database Direktorat">
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: SUBMIT -->
        <div class="intro-y box mt-5">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    SUBMIT
                </h2>
            </div>
            <div id="horizontal-form" class="p-5">
                <div class="preview">
                    <button class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Simpan </button> <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                </div>
            </div>
        </div>
</div>
        <!-- END: SUBMIT -->
    </div>
</div>
<!-- END: Data BENDAHARA -->
</div>
