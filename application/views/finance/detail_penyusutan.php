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
                            <td>Usia </td>
                            <td>
                                <?php 
                                $buy = new DateTime($v['tanggal_beli_as']);
                                $diff = $buy->diff(new DateTime());
                                $months = $diff->format('%m') + 12 * $diff->format('%y');

                                $pertahun = (($v['harga_beli_as']-($v['harga_beli_as']/$v['usia_ac']))/$v['usia_ac']);
                                $perbulan = $pertahun/12;

                                $penyusutan = $v['harga_beli_as']-($months*$perbulan);

                                $tgl_beli = strtotime($v['tanggal_beli_as']); 
                                $tgl_susut = date('Y-m-d', strtotime('+'.number_format($v['usia_ac'], 0).' year', $tgl_beli ));
                                $tgl_susut_date = strtotime($tgl_susut);

                                echo $months .' bulan';
                                ?>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Saat ini</td>
                            <td><?= ($penyusutan < 0 ? '<span class="px-2 py-1 rounded-full bg-theme-6 text-white mr-1 ">Expired</span>' : 'Rp. '.number_format($penyusutan,2)) ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Akhir Masa Ekonomis</td>
                            <td><?= tgl_indo($tgl_susut); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="py-5">
            <a href="<?= base_url('finance/aset_dan_penyusutan') ?>" class="btn btn-warning"> <i data-feather="skip-back" class="w-4 h-4 mr-2"></i>Back </a>
        </div>
    </div>
</div>

<!-- END: Responsive Table -->