<div class=''>
	
	<div style="margin-top:100px;">
		<h2 style="margin-bottom: 20px; width: 100%;text-decoration: underline;">PENGADUAN JALAN BERLUBANG</h2>

		<table width="100%" class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Wilayah</th>
					<th>Deskripsi</th>
					<th>Pelapor</th>
					<th>Material</th>
					<th>TIM URC</th>
					<th>FOTO 0%</th>
					<th>FOTO 50%</th>
					<th>FOTO 100%</th>
					<th>Tindak Lanjut</th>
					<th>Keterangan</th>
					<th>Tanggal <br>Tindak<br> Lanjut</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$pengaduan = 0;
				$selesai = 0;
				$revisi = 0;
				$no = 1;
				foreach($laporan as $k => $v): ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= tgl_indo2($v['dibuat_laporan']); ?></td>
					<td><?= $v['jalan_laporan']; ?><br>Kelurahan <?= $v['nama_kelurahan']; ?><br>Kecamatan <?= $v['nama_kecamatan']; ?></td>
					<td><?= $v['deskripsi_laporan']; ?></td>
					<td><?= $v['nama_user']; ?></td>
					<td style="white-space: nowrap;">
						<ul>
							<?php foreach(get_material_laporan($v['id_laporan']) as $ml): ?>
								<li><?= $ml['nama_material']; ?><br><?= $ml['volume_laporan_material']; ?><br><br></li>
							<?php endforeach; ?>
						</ul>
					</td>
					<td style="white-space: nowrap;">
						<ul>
							<?php foreach(get_tim_laporan($v['id_laporan']) as $tl): ?>
								<li><?= $tl['nama_user']; ?> - <?= $tl['nama_role']; ?></li>
							<?php endforeach; ?>
						</ul>
					</td>
					<td>
						<?php if (get_images_laporan($v['id_laporan'])[0]['source_laporan_photo'] != ""): ?>
							<?php foreach(get_images_laporan($v['id_laporan']) as $img): ?>
								
								<?php if($img['status_laporan_photo'] == 1): ?>
									<img style="max-width:100px;" src="<?= base_url()."uploads/laporan/".$img['source_laporan_photo']; ?>">
								<?php endif; ?> 
							
							<?php endforeach; ?>
						<?php endif; ?>
					</td>
					<td>
						<?php if (get_images_laporan($v['id_laporan'])[0]['source_laporan_photo'] != ""): ?>
							<?php foreach(get_images_laporan($v['id_laporan']) as $img): ?>
								
								<?php if($img['status_laporan_photo'] == 2): ?>
									<img style="max-width:100px;" src="<?= base_url()."uploads/laporan/".$img['source_laporan_photo']; ?>">
								<?php endif; ?>
								
							<?php endforeach; ?>
						<?php endif; ?>
					</td>
					<td>
						<?php if (get_images_laporan($v['id_laporan'])[0]['source_laporan_photo'] != ""): ?>
							<?php foreach(get_images_laporan($v['id_laporan']) as $img): ?>
								
								<?php if($img['status_laporan_photo'] == 3): ?>
									<img style="max-width:100px;" src="<?= base_url()."uploads/laporan/".$img['source_laporan_photo']; ?>">
								<?php endif; ?>
								
							<?php endforeach; ?>
						<?php endif; ?>
					</td>


					<td><?= $v['tindak_lanjut_laporan']; ?></td>
					<td><?= $v['keterangan_laporan']; ?></td>
					<td><?= tgl_indo2($v['selesai_laporan']); ?></td>
				</tr>
				<?php 
				if($v['status_laporan'] == 2){
					$selesai++;
				} elseif($v['status_laporan'] == 3){
					$revisi++;
				}
				$pengaduan++;
				$no++;
				endforeach; ?>
			</tbody>
		</table>

		<h4>Jumlah Pengaduan <?= $pengaduan; ?></h4>
		<ul>
			<li>Sudah dilakukan Penanganan URC : <?= $selesai; ?> Laporan</li>
			<li>Laporan dialihkan : <?= $revisi; ?> Laporan</li>
		</ul>

	</div>
</div>