<div class="row filter_seputar_brispot" id="filter_seputar_brispot" style="padding:10px;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-2">
        <div class="card border-primary">
            <form action="" method="post" id="form_filter">
                <?= form_input(array('type' => 'hidden', 'name' => 'save', 'value' => 'y')); ?>
                <div class="card-body">
                    <div class="container">
                        <h1 style="text-align:center;">Buat Survey</h1>
                        <p style="text-align:center;">Input detail survey berikut ini :</p>
                    </div><br>
                    <div class="row" style="padding:10px;">
                        <div class="col-lg-3 col-lg-3">
                            <label>Nama Survey <label style="color:red; font-style: italic;">( Harus diisi ) </label></label>
                        </div>
                        <div class="col-lg-9 col-lg-9">
                            <input type="text" id="nma_survey" name="nma_survey" maxlength="50" class="form-control nma_survey" placeholder="Nama Survey" required>
                            <p class="pesan-nma_survey" style="color:red; float:left; display: none;">Batas Max Nama Survey</p>
                            <p class="karakter-nma_survey" style="float:right"><span id="count-nma_survey">0</span>/50</p>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-lg-3 col-lg-3">
                            <label>Masa Berlaku Start <label style="color:red; font-style: italic;">( Harus diisi ) </label></label>
                        </div>
                        <div class="col-lg-9 col-lg-9">
                            <input type="date" class="form-control tgl_awal" name="tgl_awal">
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-lg-3 col-lg-3">
                            <label>Masa Berlaku End <label style="color:red; font-style: italic;">( Harus diisi ) </label></label>
                        </div>
                        <div class="col-lg-9 col-lg-9">
                            <input type="date" class="form-control tgl_akhir" name="tgl_akhir">
                        </div>
                    </div>

                    <div class="row" style="padding:10px;">
                        <div class="col-lg-3 col-lg-3">
                            <label>Mandatory <label style="color:red; font-style: italic;">( Harus diisi ) </label></label>
                        </div>
                        <div class="col-lg-2 col-lg-2" style="padding-left:30px;">
                            <input class="form-check-input" type="radio" name="public" id="exampleRadios1" value="1" required>
                            <label class="form-check-label" for="exampleRadios1">
                                Ya
                            </label>
                        </div>
                        <div class="col-lg-2 col-lg-2" style="padding-left:30px;">
                            <input class="form-check-input" type="radio" name="public" id="exampleRadios2" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-lg-3 col-lg-3">
                            <label>Dibuat oleh <label style="color:red; font-style: italic;">( Harus diisi ) </label></label>
                        </div>
                        <div class="col-lg-9 col-lg-9">
                            <input type="text" id="dibuat_oleh" name="dibuat_oleh" maxlength="50" class="form-control dibuat_oleh" placeholder="Dibuat oleh" required>
                            <p class="pesan-dibuat_oleh" style="color:red; float:left; display: none;">Batas Max Dibuat Oleh</p>
                            <p class="karakter-dibuat_oleh" style="float:right"><span id="count-dibuat_oleh">0</span>/50</p>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-lg-12 col-lg-12 text-right">
                            <button class="btn btn-success  btn-lg btn-save" name="simpan" id="btn-save" value="Simpan" type="submit" title="Klik di sini untuk simpan."><i class="fa fa-fw fa-save"></i> Simpan & Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>