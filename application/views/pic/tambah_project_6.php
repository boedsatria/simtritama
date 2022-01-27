    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
        <form method="POST" class="grid grid-cols-12 gap-4 gap-y-5" enctype="multipart/form-data" action="<?= base_url(); ?>pic/tambah_project_5_action">
            <div class="col-span-6 sm:col-span-12">
                <label for="input-wizard-2" class="form-label">Judul Kegiatan</label>
                <input id="input-wizard-2" type="text" value="<?= $v['nama_project']; ?>" class="form-control" placeholder="Judul Kegiatan" readonly>
                <input type="hidden" name="parent_pp" value="<?= $v['id_project']; ?>">
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label for="input-wizard-3" class="form-label">Nomer Kegiatan</label>
                <input id="input-wizard-3" type="text" value="<?= $v['no_project']; ?>" class="form-control" readonly>
            </div>

            <?php foreach(get_produksi($v['id_project']) as $gp): ?>

            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Judul Produksi</label>
                <input type="text" value="<?= $gp['judul_pp']; ?>" class="form-control" name="judul_pp">
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Nilai Kontrak</label>
                <input type="text" value="<?= number_format($gp['cost_pp'], 0); ?>" class="form-control" name="cost_pp">
            </div>
            <div class="col-span-12 sm:col-span-12">
                <label class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" name="desc_pp"><?= $v['desc_pp']; ?></textarea>
            </div>

            <div class="border-t border-gray-200 dark:border-dark-5 col-span-12"></div>

            <?php endforeach; ?>

            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Judul Produksi</label>
                <input type="text" class="form-control" name="judul_pp">
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Nilai Kontrak</label>
                <input type="text" class="form-control" name="cost_pp">
            </div>
            <div class="col-span-12 sm:col-span-12">
                <label class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" name="desc_pp"></textarea>
            </div>
            <div class="col-span-12 sm:col-span-12">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>


            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <a href="<?= base_url().'pic/tambah_project_3/'.$v['id_project'] ?>" class="btn btn-secondary w-24">Previous</a>
                <button type="submit" class="btn btn-primary w-24 ml-2">Next</a>
            </div>
        </form>
    </div>
</div>
<!-- END: Wizard Layout -->

