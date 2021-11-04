<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        DATA PERUSAHAAN PENYELENGGARA
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <!--begin modal-->
        <div id="button-modal" class="p-5">
            <div class="preview">
                <!-- BEGIN: Modal Toggle -->
                <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="btn btn-primary">Tambah Data</a> </div>
                <!-- END: Modal Toggle -->
                <!-- BEGIN: Modal Content -->
                <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                            <div class="modal-body p-0">
                                <div class="p-5 text-left">
                                    <label for="nama_perusahaan" class="form-label mt-2">Nama Perusahaan</label>
                                    <input id="nama_perusahaan" type="text" name="nama_perusahaan" class="form-control w-full" placeholder="Input text">
                                    <label for="alamat_perusahaan" class="form-label mt-2">Alamat Perusahaan</label>
                                    <input id="alamat_perusahaan" type="text" name="alamat_perusahaan" class="form-control w-full" placeholder="Input text">
                                    <label for="no_npwp" class="form-label mt-2">No. NPWP Perusahaan</label>
                                    <input id="no_npwp" type="text" name="no_npwp" class="form-control w-full" placeholder="Input text">
                                    <label for="npwp_perusahaan" class="form-label mt-2">Upload NPWP Perusahaan</label>
                                    <input id="npwp_perusahaan" name="npwp_perusahaan" type="file" class="form-control" placeholder="Upload File">
                                    <label for="sub_bidang" class="form-label mt-2">Sub Bidang</label>
                                    <input id="sub_bidang" type="text" name="sub_bidang" class="form-control w-full" placeholder="Input text">
                                    <label for="direktur_perusahaan" class="form-label mt-2">Nama Direktur Perusahaan</label>
                                    <input id="direktur_perusahaan" type="text" name="direktur_perusahaan" class="form-control w-full" placeholder="Input text">
                                    <label for="komisaris_perusahaan" class="form-label mt-2">Nama Komisaris Perusahaan</label>
                                    <input id="komisaris_perusahaan" type="text" name="komisaris_perusahaan" class="form-control w-full" placeholder="Input text">
                                    <label for="ktp_komisaris" class="form-label mt-2">Upload KTP Komisaris</label>
                                    <input id="ktp_komisaris" name="ktp_komisaris" type="file" class="form-control" placeholder="Upload File">
                                    <label for="npwp_komisaris" class="form-label mt-2">Upload NPWP Komisaris</label>
                                    <input id="npwp_komisaris" name="npwp_komisaris" type="file" class="form-control" placeholder="Upload File">
                                    <label for="nib_file" class="form-label mt-2">Upload NIB</label>
                                    <input id="nib_file" name="nib_file" type="file" class="form-control" placeholder="Upload File">
                                    <label for="no_rek" class="form-label mt-2">No. Rekening Bank</label>
                                    <input id="no_rek" type="text" name="no_rek" class="form-control w-full" placeholder="Input text">
                                    <label for="rek_koran" class="form-label mt-2">Upload Rekening Koran</label>
                                    <input id="rek_koran" name="rek_koran" type="file" class="form-control" placeholder="Upload File">
                                    <label for="pemilik_rek" class="form-label mt-2">Nama Pemilik Rekening Bank</label>
                                    <input id="pemilik_rek" type="text" name="pemilik_rek" class="form-control w-full" placeholder="Input text">
                                    <label for="nama_bank" class="form-label mt-2">Nama Bank</label>
                                    <input id="nama_bank" type="text" name="nama_bank" class="form-control w-full" placeholder="Input text">
                                </div>
                                <div class="px-5 pb-8 text-right">
                                    <button type="submit" data-dismiss="modal" class="btn btn-primary w-24">Simpan</button>
                                    <button type="reset" data-dismiss="modal" class="btn btn-warning w-24">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal konten-->
            </div>
        </div>
        <!--end modal-->
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<!-- BEGIN: filter -->
<div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
    </div>
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>No.</th>
                            <th>Nama Perusahaan</th>
                            <th>Alamat</th>
                            <th>Sub Bidang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>1</td>
                            <td>xxxxxxx</td>
                            <td>xxxxxxx</td>
                            <td>xxxxxxx</td>
                            <td>
                                <a href="<?= base_url('masterdata/detail_penyelenggara') ?>" class="btn btn-primary w-32 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                                    Detail </a>
                            </td>
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
<!-- END: HTML Table Data -->
</div>
<!-- END: Content -->