    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
        <form method="POST" class="grid grid-cols-12 gap-4 gap-y-5" enctype="multipart/form-data" action="<?= base_url(); ?>pic/tambah_project_2_action">
            <div class="col-span-6 sm:col-span-12">
                <label for="input-wizard-2" class="form-label">Judul Kegiatan</label>
                <input id="input-wizard-2" type="text" value="<?= $v['nama_project']; ?>" class="form-control" placeholder="Judul Kegiatan" name="nama_project" readonly>
                <input type="hidden" name="id_project" value="<?= $v['id_project']; ?>">
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label for="input-wizard-3" class="form-label">Nomer Kegiatan</label>
                <input id="input-wizard-3" type="text" value="<?= $v['no_project']; ?>" class="form-control" name="no_project" readonly>
            </div>

            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Mulai - Selesai Tanggal</label>
                <input id="durasi_pro" name="mulai_selesai" data-daterange="true" class="datepicker form-control" value="<?= ($v['mulai_project'] == "0000-00-00 00:00:00" ? date("Y-m-d") : date('Y-m-d', strtotime($v['mulai_project']))).' - '. ($v['mulai_project'] == "0000-00-00 00:00:00" ? date("Y-m-d") : date('Y-m-d', strtotime($v['selesai_project']))); ?>">
            </div>

            <div class="col-span-6 sm:col-span-12" hidden>
                
                <label class="form-label">Lama Kegiatan</label>
                <input id="lama_kegiatan" type="text" value="<?= ($v['durasi_project'] == 0.00 ? "" : floatval(preg_replace('/[^\d. ]/', '', $v['durasi_project']))); ?>" class="form-control" placeholder="Lama Kegiatan" name="durasi_project">
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Tanggal Pencairan</label>
                <div class="relative ">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                    </div>
                    <input type="text" value="<?= ($v['tgl_pencairan_project'] == "0000-00-00" ? "" : $v['tgl_pencairan_project']) ?>" class="datepicker form-control pl-12" name="tgl_pencairan_project" data-single-mode="true">
                </div>
            </div>

            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Nilai Project</label>
                <input id="nilai_project" type="text" value="<?= ($v['nilai_project'] == 0.00 ? "" : floatval(preg_replace('/[^\d. ]/', '', $v['nilai_project']))); ?>" class="form-control" placeholder="Nilai Project" name="nilai_project">
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Nilai SP2D</label>
                <input id="nilai_sppd" type="text" value="<?= ($v['sp2d_project'] == 0.00 ? "" : floatval(preg_replace('/[^\d. ]/', '', $v['sp2d_project']))); ?>" class="form-control" placeholder="Nilai SP2D" name="sp2d_project">
            </div>
            

            <div class="border-t border-gray-200 dark:border-dark-5 col-span-12"></div>

            <!-- SPK-->
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">NO SPK</label>
                <input type="text" value="<?= $v['no_spk_project']; ?>" class="form-control" name="no_spk_project" required>
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Tanggal SPK</label>
                <div class="relative ">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                    </div>
                    <input type="text" value="<?= ($v['tgl_spk_project'] == "0000-00-00" ? "" : $v['tgl_spk_project']) ?>" class="datepicker form-control pl-12" name="tgl_spk_project" data-single-mode="true">
                </div>
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Upload SPK</label>
                <input name="file_spk" type="file" class="form-control">
            </div>
            <div class="col-span-3 sm:col-span-12 pt-5 mt-2">
                <?php if($v['file_spk_project'] != ""): ?>

                <a target="_BLANK" href="<?= base_url().'uploads/files/'.$v['file_spk_project'] ?>" class="btn btn-success mr-2">Download</a>
                <a href="<?= base_url().'pic/delete_surat/input/file_spk_project/'.$v['id_project'] ?>" class="btn btn-danger">Hapus</a>

                <?php endif; ?>
            </div>
            <!-- END SPK -->

            <div class="border-t border-gray-200 dark:border-dark-5 col-span-12"></div>

            <!-- SPMK-->
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">NO SPMK</label>
                <input type="text" value="<?= $v['no_spmk_project']; ?>" class="form-control" name="no_spmk_project" required>
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Tanggal SPMK</label>
                <div class="relative ">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                    </div>
                    <input type="text" value="<?= ($v['tgl_spmk_project'] == "0000-00-00" ? "" : $v['tgl_spmk_project']) ?>" class="datepicker form-control pl-12" name="tgl_spmk_project" data-single-mode="true">
                </div>
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Upload SPMK</label>
                <input name="file_spmk" type="file" class="form-control">
            </div>
            <div class="col-span-3 sm:col-span-12 pt-5 mt-2">
                <?php if($v['file_spmk_project'] != ""): ?>

                <a target="_BLANK" href="<?= base_url().'uploads/files/'.$v['file_spmk_project'] ?>" class="btn btn-success mr-2">Download</a>
                <a href="<?= base_url().'pic/delete_surat/input/file_spmk_project/'.$v['id_project'] ?>" class="btn btn-danger">Hapus</a>

                <?php endif; ?>
            </div>
            <!-- END SPMK -->

            <div class="border-t border-gray-200 dark:border-dark-5 col-span-12"></div>

            <!-- BAST-->
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">NO BAST</label>
                <input type="text" value="<?= $v['no_bast_project']; ?>" class="form-control" name="no_bast_project" required>
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Tanggal BAST</label>
                <div class="relative ">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                    </div>
                    <input type="text" value="<?= ($v['tgl_bast_project'] == "0000-00-00" ? "" : $v['tgl_bast_project']) ?>" class="datepicker form-control pl-12" name="tgl_bast_project" data-single-mode="true">
                </div>
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Upload BAST</label>
                <input name="file_bast" type="file" class="form-control">
            </div>
            <div class="col-span-3 sm:col-span-12 pt-5 mt-2">
                <?php if($v['file_bast_project'] != ""): ?>

                <a target="_BLANK" href="<?= base_url().'uploads/files/'.$v['file_bast_project'] ?>" class="btn btn-success mr-2">Download</a>
                <a href="<?= base_url().'pic/delete_surat/input/file_bast_project/'.$v['id_project'] ?>" class="btn btn-danger">Hapus</a>

                <?php endif; ?>
            </div>
            <!-- END BAST -->

            <div class="border-t border-gray-200 dark:border-dark-5 col-span-12"></div>

            <!-- BAP-->
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">NO BAP</label>
                <input type="text" value="<?= $v['no_bap_project']; ?>" class="form-control" name="no_bap_project" required>
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Tanggal BAP</label>
                <div class="relative ">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                    </div>
                    <input type="text" value="<?= ($v['tgl_bap_project'] == "0000-00-00" ? "" : $v['tgl_bap_project']) ?>" class="datepicker form-control pl-12" name="tgl_bap_project" data-single-mode="true">
                </div>
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Upload BAP</label>
                <input name="file_bap" type="file" class="form-control">
            </div>
            <div class="col-span-3 sm:col-span-12 pt-5 mt-2">
                <?php if($v['file_bap_project'] != ""): ?>

                <a target="_BLANK" href="<?= base_url().'uploads/files/'.$v['file_bap_project'] ?>" class="btn btn-success mr-2">Download</a>
                <a href="<?= base_url().'pic/delete_surat/input/file_bap_project/'.$v['id_project'] ?>" class="btn btn-danger">Hapus</a>

                <?php endif; ?>
            </div>
            <!-- END BAP -->



            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <a href="<?= base_url().'pic/tambah_project/'.$v['id_project'] ?>" class="btn btn-secondary w-24">Previous</a>
                <button class="btn btn-primary w-24 ml-2" type="submit">Next</button>
            </div>
        </form>
    </div>
</div>
<!-- END: Wizard Layout -->

