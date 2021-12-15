    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
        <form method="POST" class="grid grid-cols-12 gap-4 gap-y-5" enctype="multipart/form-data" action="<?= base_url(); ?>pic/tambah_project_4_action">
            <div class="col-span-6 sm:col-span-12">
                <label for="input-wizard-2" class="form-label">Judul Kegiatan</label>
                <input id="input-wizard-2" type="text" value="<?= $v['nama_project']; ?>" class="form-control" placeholder="Judul Kegiatan" name="nama_project" readonly>
                <input type="hidden" name="id_project" value="<?= $v['id_project']; ?>">
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label for="input-wizard-3" class="form-label">Nomer Kegiatan</label>
                <input id="input-wizard-3" type="text" value="<?= $v['no_project']; ?>" class="form-control" name="no_project" readonly>
            </div>

            <div class="col-span-12 sm:col-span-12">
                <label class="form-label">Pelaksana</label>
                <select data-placeholder="Pilih Pelaksana" class="form-control" name="pelaksana_project" autocomplete="off" required>
                    <?php 
                    foreach ($pelaksana as $p) : 
                    $selected = ($v['pelaksana_project'] == $p['id_penyelenggara'] ? "selected" : "");
                    ?>
                        <option value="<?= $p['id_penyelenggara']; ?>" <?= $selected; ?>><?= $p['nama_penyelenggara']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            

            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <a href="<?= base_url().'pic/tambah_project_3/'.$v['id_project'] ?>" class="btn btn-secondary w-24">Previous</a>
                <button class="btn btn-primary w-24 ml-2" type="submit">Next</button>
            </div>
        </form>
    </div>
</div>
<!-- END: Wizard Layout -->

