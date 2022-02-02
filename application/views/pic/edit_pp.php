<div class="box pb-10 mt-5">
    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
        <form method="POST" class="grid grid-cols-12 gap-4 gap-y-5" enctype="multipart/form-data" action="<?= base_url(); ?>pic/edit_pp_action">

            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Judul Versi</label>
                <input type="text" class="form-control" name="judul_pp" value="<?= $gp['judul_pp'] ?>">
                <input type="text" hidden class="form-control" name="id_pp" value="<?= $gp['id_pp'] ?>">
                <input type="text" hidden class="form-control" name="parent_pp" value="<?= $gp['parent_pp'] ?>">
            </div>
            <div class="col-span-6 sm:col-span-12">
                <label class="form-label">Tanggal Deadline</label>
                <div class="relative ">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                    </div>
                    <input type="text" value="" class="datepicker form-control pl-12" name="deadline_pp" data-single-mode="true" value="<?= ($gp['deadline_pp'] == "0000-00-00" ? "" : $gp['deadline_pp']) ?>">
                </div>
            </div>
            <div class="col-span-12">
                <label class="form-label">Jenis Produksi</label>
                <select class="form-select" name="kategori_pp">
                    <?php foreach($cat as $cp): 
                        $selected = ($cp['id_pc'] == $gp['kategori_pp'] ? "selected" : "");
                    ?>
                    <option value="<?= $cp['id_pc'] ?>" <?= $selected ?>><?= $cp['nama_pc'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-span-12 sm:col-span-12">
                <label class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" name="desc_pp"><?= $gp['desc_pp'] ?></textarea>
            </div>

            
            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <a href="<?= base_url().'pic/tambah_project_5/'.$gp['parent_pp'] ?>" class="btn btn-secondary w-24">Previous</a>
                <button type="submit" class="btn btn-primary w-24 ml-2">Save</a>
            </div>
        </form>
    </div>
</div>
<!-- END: Wizard Layout -->

