<!-- BEGIN : JUDUL -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Detail Job Order Placement
        <!--JUDUL PAGE-->
    </h2>
</div>
<!-- END JUDUL-->
<div class="grid grid-cols-2 gap-2 mt-5">
    <!-- KOLOM BESAR-->
    <div class="intro-y col-span-2 lg:col-span-4">
        <!-- KOLOM KIRI-->
        <!-- BEGIN: BLOCK 1 -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">

                <!-- KONTEN BLOCK 1 DISINI-->

                <div class="w-full">
                    <table class="table">
                        <thead>
                            <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                <th class="w-5">Data</th>
                                <th class="w-32">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b dark:border-dark-5">Nomor Ringkos</td>
                                <td class="border-b dark:border-dark-5"><?= $v['no_project'] ?></td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">Direktorat</td>
                                <td class="border-b dark:border-dark-5"><?= $v['nama_client']; ?></td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">Tanggal Mulai Tayang</td>
                                <td class="border-b dark:border-dark-5"><?= tgl_indo($v['mulai_project']) ?></td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">Tanggal Akhir Tayang</td>
                                <td class="border-b dark:border-dark-5"><?= tgl_indo($v['selesai_project']) ?></td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">Jumlah Versi</td>
                                <td class="border-b dark:border-dark-5"><?= count($v['placement']); ?></td>
                            </tr>                          
                            <tr>
                                <td class="border-b dark:border-dark-5">Pagu Biaya Media</td>
                                <td class="border-b dark:border-dark-5">Rp. <?= $v['anggaran_placement_project'] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    PLACEMENT MEDIA
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">

                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">JUDUL VERSI</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">KATEGORI MEDIA</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">JENIS MEDIA</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">WILAYAH MEDIA</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">TITIK MEDIA</th>
                                <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($v['placement'] as $p): ?>
                            <tr>
                                <td class="border"><?= $p['judul_pm'] ?></td>
                                <td class="border"><?= $p['nama_media_category'] ?></td>
                                <td class="border"><?= $p['nama_media_type'] ?></td>
                                <td class="border"><?= $p['nama_wilayah'] ?></td>
                                <td class="border"><?= $p['titik_media'] ?></td>
                                <td class="border"><a href="<?= base_url().'placement/download_materi/'.$p['materi_pm'] ?>" class="btn btn-primary w-48 mr-2 mb-2"> Download Materi </a></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

                    <br>
                    <button class="btn btn-primary w-48 mr-2 mb-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                    <a href="<?= base_url('placement/pengajuan_dan_logproof') ?>" class="btn btn-primary w-48 mr-2 mb-2"> <i data-feather="search" class="w-4 h-4 mr-2"></i>
                        Pengajuan HPS </a>
                    <a href="<?= base_url('placement/job_order') ?>" class="btn btn-dark w-48 mr-2 mb-2"> <i data-feather="skip-back" class="w-4 h-4 mr-2"></i>
                        Back </a>
                </div>



            </div>
        </div>
        <!-- END: BLOCK 1 -->
    </div>
</div>