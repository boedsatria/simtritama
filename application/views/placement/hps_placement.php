<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        PENGAJUAN PLACEMENT DAN LOGPROOF
    </h2>
</div></br>

<div> <label>PILIH NOMOR RINGKOS</label>
    <div class="mt-2">
        <select data-placeholder="Select your favorite actors" name="ringkos" class="tom-select w-full">
            <option value="1">123/456/2020</option>
            <option value="2">124/456/2020</option>
            <option value="3">125/456/2020</option>
            <option value="4">126/456/2020</option>
            <option value="5">127/456/2020</option>
        </select>
    </div>
</div>
<form method="post">
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div id="input" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="regular-form-1" class="form-label">Nama Media</label>
                            <input id="regular-form-1" name="nama_media" type="text" class="form-control" placeholder="Input biaya talent">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Lokasi</label>
                            <input id="regular-form-1" name="lokasi" type="text" class="form-control" placeholder="Input biaya sewa venue">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Jam Tayang</label>
                            <input id="regular-form-1" name="jam_tayang" type="text" class="form-control" placeholder="Input biaya sewa alat">
                        </div></br>
                    </div>
                </div>
            </div>
            <!-- END: Input -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div id="input" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya media</label>
                            <input id="regular-form-1" name="biaya_media" type="text" class="form-control" placeholder="Input biaya transportasi">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">TOTAL BIAYA PLACEMENT</label>
                            <input id="regular-form-1" name="total_biaya" type="text" class="form-control" placeholder="otomatis submit" disabled>
                        </div></br>
                    </div>
                </div>
            </div>
            <!-- END: Input -->
        </div>

        <table class="table">
            <thead class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                <tr>
                    <th>No.</th>
                    <th>No. Ringkos</th>
                    <th>Nama Media</th>
                    <th>Lokasi</th>
                    <th>Jam Tayang</th>
                    <th>Biaya Media</th>
                    <th>Total Biaya Placement</th>
                </tr>
            </thead>
            <tbody class="border-b whitespace-nowrap">
                <tr>
                    <td>1</td>
                    <td>123456789</td>
                    <td>SCTV</td>
                    <td>Bandung</td>
                    <td>17 Mei 2021 21:30 wib</td>
                    <td>Rp.120.000.000,-</td>
                    <td></td>
                </tr>
            </tbody>
            <tbody class="border-b whitespace-nowrap">
                <tr>
                    <td>2</td>
                    <td>0987654321</td>
                    <td>RCTI</td>
                    <td>Surabaya</td>
                    <td>19 Mei 2021 21:30 wib</td>
                    <td>Rp.90.000.000,-</a></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody class="border-b whitespace-nowrap">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></a></td>
                    <td>Rp.210.000.000,-</td>
                </tr>
            </tbody>
        </table>

        <!-- Button -->
        <div class="intro-y col-span-12">
            <button class="btn btn-success mr-2" type="submit">add</button>
            <button class="btn btn-primary mr-2" type="submit">save</button>
            <button class="btn btn-warning" type="reset">Cancel</button>
        </div>
    </div>
</form>