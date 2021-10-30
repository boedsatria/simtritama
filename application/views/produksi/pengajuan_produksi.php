<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        PENGAJUAN PRODUKSI
    </h2>
</div></br>

<div> <label>PILIH NOMOR RINGKOS</label>
    <div class="mt-2">
        <select data-placeholder="Select your favorite actors" name="ringkos" class="tom-select w-full">
            <option value="1">123/456/2020</option>
            <option value="2">124/456/2020</option>
            <option value="3">125/456/2020</option>
            <option value="4">126/456/2020</option>
            <option value="5">127/456/2020</option>
        </select>
    </div>
</div>
<form method="post">
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div id="input" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="regular-form-1" class="form-label">Nama Item</label>
                            <input id="regular-form-1" name="nama_item" type="text" class="form-control" placeholder="Input keterangan nama per item">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya Talent</label>
                            <input id="regular-form-1" name="b_talent" type="text" class="form-control" placeholder="Input biaya talent">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya Sewa Venue</label>
                            <input id="regular-form-1" name="b_venue" type="text" class="form-control" placeholder="Input biaya sewa venue">
                        </div></br>

                    </div>
                </div>
            </div>
            <!-- END: Input -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div id="input" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya Transportasi</label>
                            <input id="regular-form-1" name="b_transportasi" type="text" class="form-control" placeholder="Input biaya transportasi">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya Pasca Produksi</label>
                            <input id="regular-form-1" name="b_pasca" type="text" class="form-control" placeholder="Input biaya sewa venue">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya Alat</label>
                            <input id="regular-form-1" name="b_alat" type="text" class="form-control" placeholder="Input biaya sewa alat">
                        </div></br>
                    </div>
                </div>
            </div>
            <!-- END: Input -->
        </div>

        <!-- Button -->
        <div class="intro-y col-span-12">
            <button class="btn btn-primary mr-2" type="submit">Save</button>
            <button class="btn btn-warning mr-2" type="reset">Cancel</button>
        </div>
    </div>
</form>

<!-- BEGIN TABLE -->
<div class="intro-y box mt-5">
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>No.</th>
                            <th>No. Ringkos</th>
                            <th>Nama Talent</th>
                            <th>Biaya Talent</th>
                            <th>Biaya Sewa Venue</th>
                            <th>Biaya Alat</th>
                            <th>Biaya Transportasi</th>
                            <th>Biaya Pasca Produksi</th>
                            <th>Total Biaya Produksi</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>1</td>
                            <td>0987654321</td>
                            <td>Ariel Tatum</td>
                            <td>Rp.12.000.000,-</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>2</td>
                            <td>0987654321</td>
                            <td>Dian Sastro Wardoyo</td>
                            <td>Rp.18.000.000,-</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>3</td>
                            <td>0987654321</td>
                            <td></td>
                            <td></td>
                            <td>Rp.10.000.000,- </td>
                            <td>Rp.10.000.000,- </td>
                            <td>Rp.10.000.000,- </td>
                            <td>Rp.10.000.000,- </td>
                            <td> </td>
                        </tr>
                    </tbody>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>Rp.70.000.000,- </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="source-code hidden">
            <button data-target="#copy-responsive-table" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
            <div class="overflow-y-auto mt-3 rounded-md">
                <pre class="source-preview" id="copy-responsive-table"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;overflow-x-auto&quot;HTMLCloseTag HTMLOpenTagtable class=&quot;table&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagEmailHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagAddressHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagangelinajolie@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag260 W. Storm Street New York, NY 10025.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagbradpitt@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag47 Division St. Buffalo, NY 14241.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTagcharliehunnam@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-nowrap&quot;HTMLCloseTag8023 Amerige Street Harriman, NY 10926.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
            </div>
        </div>
    </div>
</div>
<!-- END: Responsive Table -->