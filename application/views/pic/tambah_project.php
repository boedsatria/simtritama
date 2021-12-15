    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
        <form method="POST" class="grid grid-cols-12 gap-4 gap-y-5" action="<?= base_url(); ?>pic/tambah_project_action">
            <div class="col-span-12 sm:col-span-6">
                <label for="input-wizard-1" class="form-label">Jenis Kegiatan</label>
                <div class="flex flex-col sm:flex-row mt-2">
                    <div class="form-check mr-2"> <input id="radio-switch-4" class="form-check-input" type="radio" name="jenis_project" value="1" <?= ($v['jenis_project'] == 1 ? "checked" : "") ?>> <label class="form-check-label" for="radio-switch-4">Produksi</label> </div>
                    <div class="form-check mr-2 mt-2 sm:mt-0"> <input id="radio-switch-5" class="form-check-input" type="radio" name="jenis_project" value="2" <?= ($v['jenis_project'] == 2 ? "checked" : "") ?>> <label class="form-check-label" for="radio-switch-5">Placement</label> </div>
                    <div class="form-check mr-2 mt-2 sm:mt-0"> <input id="radio-switch-6" class="form-check-input" type="radio" name="jenis_project" value="3" <?= ($v['jenis_project'] == 3 ? "checked" : "") ?>> <label class="form-check-label" for="radio-switch-6" >Produksi dan Placement</label> </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-12">
                <label for="input-wizard-2" class="form-label">Judul Kegiatan</label>
                <input id="input-wizard-2" type="text" value="<?= $v['nama_project']; ?>" class="form-control" placeholder="Judul Kegiatan" name="nama_project" required>
                <input type="hidden" name="id_project" value="<?= $v['id_project']; ?>">
            </div>
            <div class="col-span-12 sm:col-span-12">
                <label class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" name="desc_project"><?= $v['desc_project']; ?></textarea>
            </div>
            
            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <button class="btn btn-primary w-24 ml-2" type="submit">Next</button>
            </div>
        </form>
    </div>
</div>
<!-- END: Wizard Layout -->
