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
                <div class="col-span-6 sm:col-span-12">
                                        <label class="form-label">Total Biaya Produksi</label>
                                        <input id="nilai_project" type="text" class="form-control" name="harga_pp" required>
                                    </div>
                <div class="col-span-6">
                                        <label class="form-label">Vendor Produksi</label>
                                        <select class="form-select" name="vendor_pp">
                                            <?php foreach($vendor as $vp): ?>
                                            <option value="<?= $vp['id_vendor'] ?>"><?= $vp['nama_vendor'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
            </div>

            <div class="col-span-12 py-5 overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                            <th class="whitespace-nowrap">Judul Versi</th>
                            <th class="whitespace-nowrap">Kategori</th>
                            <th class="whitespace-nowrap">Deadline</th>
                            <th class="whitespace-nowrap">Deskripsi</th>
                            <th class="whitespace-nowrap">Status</th>
                            <th class="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(count($v['produksi']) == 0) echo '<tr><td colspan="5" align="center">No Data</td></tr>';
                        foreach($v['produksi'] as $p): 
                        ?>
                        <tr class="intro-x">
                            <td class="border-b dark:border-dark-5 whitespace-nowrap"><?= $p['judul_pp']; ?></td>
                            <td class="border-b dark:border-dark-5 whitespace-nowrap"><?= $p['nama_vendor']; ?></td>
                            <td class="border-b dark:border-dark-5 whitespace-nowrap"><?= $p['nama_pc']; ?></td>
                            <td class="border-b dark:border-dark-5 whitespace-nowrap"><?= tgl_indo($p['deadline_pp']); ?></td>
                            <td class="border-b dark:border-dark-5"><?= $p['desc_pp']; ?></td>
                            <td class="border-b dark:border-dark-5">
                                <?php
                                    if($p['status_pp'] == 1):
                                        echo '<div class="py-2 px-2 rounded-full text-xs bg-theme-1 text-white cursor-pointer font-medium">Diajukan</div>';
                                    elseif($p['status_pp'] == 2):
                                        echo '<div class="py-2 px-2 rounded-full text-xs bg-theme-6 text-white cursor-pointer font-medium">Dikoreksi</div>';
                                    else:
                                        echo '<div class="py-2 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">Disetujui</div>';
                                    endif;
                                ?>
                            </td>
                            <td class="border-b dark:border-dark-5 whitespace-nowrap">
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
                
            <div class="col-span-12 sm:col-span-12 mt-4">
                <a class="btn btn-success" data-toggle="modal" data-target="#button-modal-preview">Tambah</a>
            </div>


            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <a href="<?= base_url().'pic/tambah_project_4/'.$v['id_project'] ?>" class="btn btn-secondary w-24">Previous</a>
                <a href="<?= base_url().'pic/tambah_project_6/'.$v['id_project'] ?>" class="btn btn-primary w-24 ml-2">Next</a>
            </div>


            <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <a data-dismiss="modal" class="cursor-pointer"> 
                            <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
                        </a>
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>pic/tambah_project_produksi_action">
                            <div class="modal-body p-0">
                                <div class="p-5 text-left grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                        <label class="form-label">Judul Versi</label>
                                        <input type="text" class="form-control" name="judul_pp" required>
                                        <input type="hidden" name="parent_pp" value="<?= $v['id_project']; ?>">
                                        <input type="hidden" name="nama_project" value="<?= $v['nama_project']; ?>">
                                        <input type="hidden" name="no_project" value="<?= $v['no_project']; ?>">
                                        <input type="hidden" name="jenis_project" value="<?= $v['jenis_project']; ?>">
                                    </div>
                                    <div class="col-span-6 sm:col-span-12">
                                        <label class="form-label">Tanggal Deadline</label>
                                        <div class="relative ">
                                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                                                <i data-feather="calendar" class="w-4 h-4"></i>
                                            </div>
                                            <input type="text" value="" class="datepicker form-control pl-12" name="deadline_pp" data-single-mode="true">
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label class="form-label">Jenis Produksi</label>
                                        <select class="form-select" name="kategori_pp">
                                            <?php foreach($cat as $cp): ?>
                                            <option value="<?= $cp['id_pc'] ?>"><?= $cp['nama_pc'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label class="form-label">Deskripsi (Durasi, Format, Link Sample jika ada)</label>
                                        <textarea type="text" class="form-control" name="desc_pp"></textarea>
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

