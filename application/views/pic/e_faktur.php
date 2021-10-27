<!-- BEGIN: DATA EFAKTUR -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data E-FAKTUR
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: DATA RINGKOS -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Cari Data Ringkasan Kontrak
                </h2>
            </div>
            <div id="input" class="p-5">
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
                    <button class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Simpan </button> <button class="btn btn-danger w-32 mr-2 mb-2"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Hapus </button> <button class="btn btn-warning w-32 mr-2 mb-2"> <i data-feather="book" class="w-4 h-4 mr-2"></i> New </button> <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-horizontal-form" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-horizontal-form" class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;form-inline&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;horizontal-form-1&quot; class=&quot;form-label sm:w-20&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;horizontal-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-inline mt-5&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;horizontal-form-2&quot; class=&quot;form-label sm:w-20&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;horizontal-form-2&quot; type=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check sm:ml-20 sm:pl-5 mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;horizontal-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;horizontal-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;sm:ml-20 sm:pl-5 mt-5&quot;HTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: SUBMIT -->
    </div>
</div>
<!-- END: Data BENDAHARA -->
</div>
</div>
</div>