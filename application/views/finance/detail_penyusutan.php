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
                            <th>Informasi</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody class="border-b whitespace-nowrap">
                        <tr>
                            <td>Nama Item</td>
                            <td><?= $v['nama_as'] ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $v['nama_ac'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Beli</td>
                            <td><?= tgl_indo($v['tanggal_beli_as']) ?></td>
                        </tr>
                        <tr>
                            <td>Nilai Beli</td>
                            <td>Rp. <?= number_format($v['harga_beli_as'],0) ?>,-</td>
                        </tr>
                        <tr>
                            <td>Nilai Saat ini</td>
                            <td>Rp. <?= number_format($v['harga_beli_as'],0) ?>,-</td>
                        </tr>
                        <tr>
                            <td>Tanggal Akhir Masa Ekonomis <?= number_format($v['usia_ac'], 0) ?></td>
                            <td>
                                <?php 
                                    $tgl_beli = strtotime($v['tanggal_beli_as']); 
                                    $tgl_susut = date('Y-m-d', strtotime('+'.number_format($v['usia_ac'], 0).' year', $tgl_beli ));
                                    $tgl_susut_date = strtotime($tgl_susut);
                                    echo tgl_indo($tgl_susut);

                                    // $timeleft = $tgl_susut_date-$tgl_beli;
                                    // $daysleft = round((($timeleft/24)/60)/60); 
                                    // echo $daysleft;

                                ?>
                            </td>
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