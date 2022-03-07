<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Detail HUTANG PIUTANG
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- BEGIN: Responsive Table -->
<div class="intro-y box mt-5">
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>Informasi</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>No Ringkos</td>
                            <td>DEPSOS 001/01/02/2022</td>
                        </tr>
                        <tr>
                            <td>Judul Kegiatan</td>
                            <td>Advetorial Keselamatan Kerja</td>
                        </tr>
                        <tr>
                            <td>Client</td>
                            <td>DEPSOS DKI JAKARTA</td>
                        </tr>
                        <tr>
                            <td>Jenis Kegiatan</td>
                            <td>Placement</td>
                        </tr>
                        <tr>
                            <td>Jenis Media</td>
                            <td>TV Nasional</td>
                        </tr>
                        <tr>
                            <td>Nama Group Media</td>
                            <td>Transcorp</td>
                        </tr>
                        <tr>
                            <td>Nama Media</td>
                            <td>Trans TV</td>
                        </tr>
                        <tr>
                            <td>Nomor Invoice/SP2D</td>
                            <td>Trans TV 001/01/03/2022</td>
                        </tr>
                        <tr>
                            <td>Tanggal Invoice/SP2D</td>
                            <td>01/03/2022</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>HUTANG</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="intro-y box mt-5">
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>Status saat ini</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>HUTANG</td>
                            <td>LUNAS</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form data-single="true" action="/file-upload" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Seret file disini atau click untuk membuka file explorer</div>
                            <div class="text-gray-600"> Unggah bukti Transaksi <span class="font-medium">dalam</span> Format PDF atau JPG </div>
                        </div>
                    </form>
        </div>
    </div>
    <a href="<?= base_url('finance/hutang_dan_piutang') ?>" class="btn btn-dark w-48 mr-2 mb-2"> <i data-feather="skip-back" class="w-4 h-4 mr-2"></i>
        Back </a>
        <a href="<?= base_url('finance/hutang_dan_piutang') ?>" class="btn btn-dark w-48 mr-2 mb-2"> <i data-feather="skip-back" class="w-4 h-4 mr-2"></i>
        Simpan Update Status </a>
</div>


<!-- END: Responsive Table -->