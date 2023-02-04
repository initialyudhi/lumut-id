<form class="needs-validation" action="<?=base_url()?>/account/simpan" method="post" novalidate>
    
    <div class="row">
        <div class="col-md-6">
            <h5>Data Pengguna</h5>
            <hr>
             
            <div class="row">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=$name?>" required>
                    <div class="invalid-feedback"> Harus diisi.</div>
                </div> 
                <div class="mb-3">
                    <label for="role" class="form-label">role</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?=$role?>" required> 
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <h5>Data Login</h5>
            <hr> 
            <div class="row">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?=$username?>" <?=($isAdd ? 'required': 'readonly')?> autocomplete="new-username">
                    <?=($isAdd ? '<div class="invalid-feedback"> Harus diisi.</div>' : '')?>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" <?=($isAdd ? 'required': '')?> autocomplete="new-password">
                    <?=($isAdd ? '<div class="invalid-feedback"> Harus diisi.</div>' : '<i>Biarkan kosong jika tidak ingin merubah password!</i>')?>
                </div>
                <div class="mb-3">
                    <label for="re-password" class="form-label">Ulangi Password</label>
                    <input type="password" class="form-control" id="re-password" name="re-password" <?=($isAdd ? 'required': '')?> autocomplete="new-re-password">
                    <?=($isAdd ? '<div class="invalid-feedback"> Harus diisi.</div>' : '<i>Biarkan kosong jika tidak ingin merubah password!</i>')?>
                </div>
            </div>
        </div>
        
    </div>
    
    <hr>
    <button type="submit" class="btn btn-success"><i class="bx bx-save"></i> Simpan</button>    
     
</form>