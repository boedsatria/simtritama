    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
        <div class="grid grid-cols-12 gap-4 gap-y-5">
            <div class="col-span-6 sm:col-span-12">
                    <label for="input-wizard-2" class="form-label">Judul Kegiatan</label>
                    <input id="input-wizard-2" type="text" value="<?= $v['nama_project']; ?>" class="form-control" placeholder="Judul Kegiatan" readonly>
                    <input type="hidden" name="parent_pp" value="<?= $v['id_project']; ?>">
                </div>
                <div class="col-span-6 sm:col-span-12">
                    <label for="input-wizard-3" class="form-label">Nomer RINGKOS Kegiatan</label>
                    <input id="input-wizard-3" type="text" value="<?= $v['no_project']; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="col-span-12 py-5">
                <table class="table">
                    <thead>
                        <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                            <th class="whitespace-nowrap">Judul</th>
                            <th class="whitespace-nowrap">Kategori</th>
                            <th class="whitespace-nowrap">Jenis</th>
                            <th class="whitespace-nowrap">Wilayah</th>
                            <th class="whitespace-nowrap">Alamat</th>
                            <th class="whitespace-nowrap">Harga Tayang</th>
                            <th class="whitespace-nowrap">Diskon</th>
                            <th class="whitespace-nowrap">Deskripsi</th>
                            <th class="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(count($v['placement']) == 0) echo '<tr><td colspan="9" align="center">No Data</td></tr>';
                        foreach($v['placement'] as $p): 
                        ?>
                        <tr class="intro-x">
                            <td class="border-b dark:border-dark-5"><?= $p['judul_pp']; ?></td>
                            <td class="border-b dark:border-dark-5"><?= $p['nama_media_category']; ?></td>
                            <td class="border-b dark:border-dark-5"><?= $p['nama_media_type']; ?></td>
                            <td class="border-b dark:border-dark-5"><?= $p['deadline_pp']; ?></td>
                            <td class="border-b dark:border-dark-5"><?= $p['desc_pp']; ?></td>
                            <td class="border-b dark:border-dark-5">
                                <a href="<?= base_url('pic/edit_pp/'.$p['id_pp']) ?>" class="btn btn-sm btn-primary py-1 px-2 mr-2">Edit </a>
                                <a data-toggle="modal" data-target="#delete-modal-<?= $p['id_pp'] ?>" class="btn btn-sm btn-danger py-1 px-2">Delete</a>
                                <!-- BEGIN: Modal DELETE -->
                                <div id="delete-modal-<?= $p['id_pp'] ?>" class="modal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="p-5 text-center"> 
                                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Are you sure?</div>
                                                    <div class="text-gray-600 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                                                </div>
                                                <div class="px-5 pb-8 text-center"> 
                                                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> 
                                                    <a href="<?= base_url() . 'pic/delete_pp/' . $p['id_pp'].'/'.$p['parent_pp'] ?>" class="btn btn-danger w-24">Delete</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- END: Modal DELETE -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            
            </div>
                
            <div class="col-span-12 sm:col-span-12">
                <a class="btn btn-success" data-toggle="modal" data-target="#button-modal-preview">Tambah</a>
            </div>


            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <a href="<?= base_url().'pic/tambah_project_4/'.$v['id_project'] ?>" class="btn btn-secondary w-24">Previous</a>
                <a href="<?= base_url().'pic/tambah_project_6/'.$v['id_project'] ?>" class="btn btn-primary w-24 ml-2">Next</a>
            </div>


            <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <a data-dismiss="modal" class="cursor-pointer"> 
                            <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                        </a>
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>pic/tambah_project_placement_action">
                            <div class="modal-body p-0">
                                <div class="p-5 text-left grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                        <label class="form-label">Judul Versi</label>
                                        <input type="text" class="form-control" name="judul_pm" required>
                                        <input type="hidden" name="parent_pm" value="<?= $v['id_project']; ?>">
                                        <input type="hidden" name="jenis_pm" value="<?= $v['jenis_project']; ?>">
                                    </div>
                                    <div class="col-span-6">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-select" name="kategori_pm">
                                            <?php foreach($cat as $cp): ?>
                                            <option value="<?= $cp['id_media_category'] ?>"><?= $cp['nama_media_category'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-span-6">
                                        <label class="form-label">Type</label>
                                        <select class="form-select" name="jenis_pm">
                                            <?php foreach($type as $tp): ?>
                                            <option value="<?= $tp['id_media_type'] ?>"><?= $tp['nama_media_type'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-span-12">
                                        <label class="form-label">Media</label>
                                        <select class="form-select" name="media_pm">
                                            <?php foreach($type as $tp): ?>
                                            <option value="<?= $tp['id_media_type'] ?>"><?= $tp['nama_media_type'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-span-12">
                                        <label class="form-label">Cost</label>
                                        <input type="text" class="form-control" name="cost_pm">
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea type="text" class="form-control" name="desc_pm"></textarea>
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="submit" class="btn btn-primary w-24">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Wizard Layout -->

