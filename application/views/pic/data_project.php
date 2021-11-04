<!-- BEGIN : RINGKOS -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        DATA KEGIATAN
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Ringkasan Kontrak
                </h2>
                <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                    <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Nomor_</label>
                    <input id="show-example-1" data-target="#input" class="form-control form-control" type="text" placeholder="nomor otomatis">
                </div>
            </div>
            <div id="input" class="p-5">
                <div class="preview">
                    <div>
                        <label for="regular-form-1" class="form-label">PROPINSI</label>
                        <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">DKI Jakarta</option>
                                <option value="2">Jawa Barat</option>
                                <option value="3">Jawa Tengah</option>
                                <option value="3">D.I Yogyakarta</option>
                                <option value="4">Jawa Timur</option>
                                <option value="5">Bali</option>
                            </select> </div>
                    </div>
                    <br>
                    <div>
                        <label for="regular-form-1" class="form-label">DIREKTORAT</label>
                        <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">Direktorat 1</option>
                                <option value="2">Direktorat 2</option>
                                <option value="3">Direktorat 3</option>
                                <option value="3">Direktorat 4</option>
                                <option value="4">Direktorat 5</option>
                                <option value="5">Direktorat 6</option>
                            </select> </div>
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-1" class="form-label">JUDUL KEGIATAN</label>
                        <input id="regular-form-1" type="text" class="form-control" placeholder="input judul kegiatan">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-3" class="form-label">JENIS KEGIATAN</label>
                        <div class="flex flex-col sm:flex-row mt-2">
                            <div class="form-check mr-2"> <input id="radio-switch-4" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="form-check-label" for="radio-switch-4">Produksi</label> </div>
                            <div class="form-check mr-2 mt-2 sm:mt-0"> <input id="radio-switch-5" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="form-check-label" for="radio-switch-5">Placement</label> </div>
                            <div class="form-check mr-2 mt-2 sm:mt-0"> <input id="radio-switch-6" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-daniel-craig"> <label class="form-check-label" for="radio-switch-6">Produksi dan Placement</label> </div>
                        </div><br>
                        <label for="regular-form-3" class="form-label">NO SPK/KONTRAK</label>
                        <div class="grid grid-cols-12 gap-2">
                            <input type="text" class="form-control col-span-4" placeholder="Nomor SPK lengkap" aria-label="default input inline 1">
                            <div class="relative w-56 mx-auto">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                </div>
                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                            </div>
                        </div>
                        <br>
                        <form data_single="true" action="/file-upload">
                            <label for="data_project" class="form-label mt-2">Upload SPK</label>
                            <input id="no_spk" name="no_spk" type="file" class="form-control" placeholder="Upload File">
                        </form>

                        <label for="regular-form-3" class="form-label">NO SPMK</label>
                        <div class="grid grid-cols-12 gap-2">
                            <input type="text" class="form-control col-span-4" placeholder="Nomor SPMK" aria-label="default input inline 1">
                            <div class="relative w-56 mx-auto">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4"> <i data-feather="calendar" class="w-4 h-4"></i> </div> <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                            </div>
                        </div> <br>
                        <form data_single="true" action="/file-upload">
                            <label for="data_project" class="form-label mt-2">Upload SPMK</label>
                            <input id="no_spmk" name="no_spmk" type="file" class="form-control" placeholder="Upload File">
                        </form> <br>
                        <label for="regular-form-3" class="form-label">NO BAST</label>
                        <div class="grid grid-cols-12 gap-2"> <input type="text" class="form-control col-span-4" placeholder="Nomor BAST" aria-label="default input inline 1">
                            <div class="relative w-56 mx-auto">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4"> <i data-feather="calendar" class="w-4 h-4"></i> </div> <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                            </div>
                        </div> <br>
                        <form data_single="true" action="/file-upload">
                            <label for="data_project" class="form-label mt-2">Upload BAST</label>
                            <input id="no_bast" name="no_bast" type="file" class="form-control" placeholder="Upload File">
                        </form> <br>
                        <label for="regular-form-3" class="form-label">NO BAP/Berita Acara</label>
                        <div class="grid grid-cols-12 gap-2"> <input type="text" class="form-control col-span-4" placeholder="Nomor BAP" aria-label="default input inline 1">
                            <div class="relative w-56 mx-auto">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4"> <i data-feather="calendar" class="w-4 h-4"></i> </div> <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                            </div>
                        </div> <br>
                        <form data_single="true" action="/file-upload">
                            <label for="data_project" class="form-label mt-2">Upload BAP</label>
                            <input id="no_bap" name="no_bap" type="file" class="form-control" placeholder="Upload File">
                        </form> <br>
                        <label for="regular-form-3" class="form-label">JANGKA WAKTU PELAKSANAAN ( tentukan tanggal mulai dan tanggal akhir )</label>
                        <input data-daterange="true" class="datepicker form-control w-56 block mx-auto"> <br>
                        <label for="regular-form-3" class="form-label">TANGGAL PENYELESAIAN</label>
                        <div class="relative w-56 mx-auto">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4"> <i data-feather="calendar" class="w-4 h-4"></i> </div> <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                        </div>
                        <div> <label for="regular-form-1" class="form-label">NILAI KONTRAK</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input nilai dalam Rupiah">
                        </div> <br>
                        <div> <label for="regular-form-1" class="form-label">NILAI SP2D</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input nilai dalam Rupiah">
                            <form data_single="true" action="/file-upload">
                                <label for="data_project" class="form-label mt-2">Upload SPK</label>
                                <input id="no_sp2d" name="no_sp2d" type="file" class="form-control" placeholder="Upload File">
                            </form> <br>
                            <label for="regular-form-3" class="form-label">TANGGAL ESTIMASI PENCAIRAN</label>
                            <div class="grid grid-cols-12 gap-2"> <input type="text" class="form-control col-span-4" placeholder="otomatis 14H pasca BAST" aria-label="default input inline 1"> <input type="text" class="form-control col-span-4" placeholder="Reminder H-7" aria-label="default input inline 2"> <input type="text" class="form-control col-span-4" placeholder="Status Pembayaran" aria-label="Status"> </div> <br>
                            <div class="relative w-56 mx-auto"> </div>
                            <div class="alert alert-danger show flex items-center mb-2" role="alert"> <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Pembayaran belum terselesaikan! </div>
                        </div>
                    </div>

                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-input" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-input" class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-2&quot; type=&quot;text&quot; class=&quot;form-control form-control-rounded&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-3&quot; class=&quot;form-label&quot;HTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-3&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;form-help&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-4&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-4&quot; type=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-5&quot; class=&quot;form-label&quot;HTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-5&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: RINGKOS -->
    </div>
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: DATA PERUSAHAAN/DIREKTORAT -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    DATA CLIENT / USER
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <div class="mt-3">
                        <div>
                            <label for="horizontal-form-1" class="form-label sm:w-auto">Nama Perusahaan</label>
                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="otomatis dari database saat isi data Ringkos">
                            <label for="horizontal-form-1" class="form-label sm:w-auto">Alamat Perusahaan</label>
                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="otomatis dari database saat isi data Ringkos">
                            <label for="horizontal-form-1" class="form-label sm:w-auto">NPWP Perusahaan</label>
                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="otomatis dari database saat isi data Ringkos">
                            <label for="horizontal-form-1" class="form-label sm:w-auto">Nama Akun Bank</label>
                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="otomatis dari database saat isi data Ringkos">
                        </div>
                    </div>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-vertical-form" class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;vertical-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: DATA PERUSAHAAN/DIREKTORAT -->
        <br>

        <br>
        <!-- BEGIN: MEDIA PRODUKSI -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    PRODUKSI MEDIA
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <div class="mt-3">
                        <label for="regular-form-4" class="form-label">Jenis Produksi</label>
                        <div class="mt-2">
                            <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">Video Syuting Talent</option>
                                <option value="2">Video CGI</option>
                                <option value="3">Video Animasi 3D</option>
                                <option value="4">Video Animasi 2D</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="regular-form-1" class="form-label">Jumlah Versi Produksi</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input nilai dalam Rupiah">
                        </div>
                        <br>
                        <label for="regular-form-4" class="form-label">Lokasi Produksi</label>
                        <div class="mt-2">
                            <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">Jakarta</option>
                                <option value="2">Jawa Barat</option>
                                <option value="3">Jawa Tengah</option>
                                <option value="4">Jawa Timur</option>
                            </select>
                        </div>
                        <br>
                        <button class="btn btn-primary w-24 mr-1 mb-2">Add</button>
                    </div>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-vertical-form" class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;vertical-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Media PRODUKSI -->

        <br>

        <!-- BEGIN: MEDIA PLACEMENT -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    MEDIA PLACEMENT
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <div class="mt-3">
                        <label for="regular-form-4" class="form-label">Jenis Media</label>
                        <div class="mt-2"> <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="1">TV Nasional</option>
                                <option value="2">TV Lokal</option>
                                <option value="3">Videotron</option>
                                <option value="3">Bilboard</option>
                                <option value="4">Radio Nasional</option>
                                <option value="5">Radio Lokal</option>
                                <option value="6">Media Cetak/Surat Kabar</option>
                                <option value="7">Media Online</option>
                                <option value="7">Media Digital/Aplikasi</option>
                            </select> </div> <br>
                        <label for="regular-form-4" class="form-label">Lokasi Media</label>
                        <select data-placeholder="Select your favorite actors" class="tom-select w-full" multiple>
                            <option value="1" selected>Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3" selected>Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select> <br>
                        <label for="regular-form-4" class="form-label">Nama Media</label>
                        <select data-placeholder="Select your favorite actors" class="tom-select w-full" multiple>
                            <option value="1" selected>Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3" selected>Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select><br>
                        <button class="btn btn-primary w-24 mr-1 mb-2">Add</button>
                    </div>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-vertical-form" class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;vertical-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Media Placement -->
        <!-- BEGIN: SUBMIT -->
        <div class="intro-y box mt-5">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    SUBMIT
                </h2>
            </div>
            <div id="horizontal-form" class="p-5">
                <div class="preview">
                    <button class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Simpan </button>
                    <button class="btn btn-danger w-32 mr-2 mb-2"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Edit Data </button>
                    <button class="btn btn-success w-32 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-horizontal-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
                        <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-horizontal-form" class="source-preview">
                            <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;form-inline&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;horizontal-form-1&quot; class=&quot;form-label sm:w-20&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;horizontal-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-inline mt-5&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;horizontal-form-2&quot; class=&quot;form-label sm:w-20&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;horizontal-form-2&quot; type=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check sm:ml-20 sm:pl-5 mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;horizontal-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;horizontal-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;sm:ml-20 sm:pl-5 mt-5&quot;HTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: SUBMIT -->
    </div>
</div>
</div>
<!-- END: Content -->