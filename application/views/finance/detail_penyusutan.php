<div class="flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Detail Aset Dan Penyusutan
        <!--JUDUL PAGE-->
    </h2>
</div>

<!-- BEGIN: Responsive Table -->
<div class="box mt-5">
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                        <tr>
                            <th>No.</th>
                            <th>Informasi</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>1</td>
                            <td>Nama Item</td>
                            <td><?= $v['nama_as'] ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kategori</td>
                            <td><?= $v['nama_ac'] ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tanggal Beli</td>
                            <td><?= tgl_indo($v['tanggal_beli_as']) ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Nilai Beli</td>
                            <td>Rp. <?= number_format($v['harga_beli_as'],0) ?>,-</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Nilai Penyusutan</td>
                            <td><?= $v['penyusutan_as'] ?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Nilai Saat ini</td>
                            <td>Rp. <?= number_format($v['harga_beli_as'],0) ?>,-</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Tanggal Zero</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="<?= base_url('finance/aset_dan_penyusutan') ?>" class="btn btn-dark w-48 mr-2 mb-2"> <i data-feather="skip-back" class="w-4 h-4 mr-2"></i>
        Back </a>
</div>

<!-- END: Responsive Table -->