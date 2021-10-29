<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        PENGAJUAN PRODUKSI
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
                            <label for="regular-form-1" class="form-label">Biaya Talent</label>
                            <input id="regular-form-1" name="b_talent" type="text" class="form-control" placeholder="Input biaya talent">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya Sewa Venue</label>
                            <input id="regular-form-1" name="b_venue" type="text" class="form-control" placeholder="Input biaya sewa venue">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya Alat</label>
                            <input id="regular-form-1" name="b_alat" type="text" class="form-control" placeholder="Input biaya sewa alat">
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
                            <label for="regular-form-1" class="form-label">Biaya Transportasi</label>
                            <input id="regular-form-1" name="b_transportasi" type="text" class="form-control" placeholder="Input biaya transportasi">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">Biaya Pasca Produksi</label>
                            <input id="regular-form-1" name="b_pasca" type="text" class="form-control" placeholder="Input biaya sewa venue">
                        </div></br>
                        <div>
                            <label for="regular-form-1" class="form-label">TOTAL BIAYA PRODUKSI</label>
                            <input id="regular-form-1" name="total_biaya" type="text" class="form-control" placeholder="otomatis submit" disabled>
                        </div></br>
                    </div>
                </div>
            </div>
            <!-- END: Input -->
        </div>

        <!-- Button -->
        <div class="intro-y col-span-12">
            <button class="btn btn-primary mr-2" type="submit">Save</button>
            <button class="btn btn-warning" type="reset">Cancel</button>
        </div>
    </div>
</form>