<?= $this->extend("layouts/template-page") ?>

<?= $this->section("content") ?>

<div class="row">
    <div class="col-md-12">
        <h2>Pengeluaran Barang</h2>
        <hr>

        <form id="fm-pengeluaran" action="" method="POST">
            <input type="hidden" name="id" id="hd-id" value="<?= $barangObj->id;?>">
            <div class="form-group  my-2">
                <label for="nama-produk" class="form-label">Nama Barang</label>
                <input type="text" name="nama" class="form-control " id="nama-produk" value="<?= $barangObj->barang;?>" disabled>

            </div>
            <div class="form-group  my-2">
                <label for="qty-barang" class="form-label">Qty Out</label>
                <input type="number" name="qty" class="form-control " id="qty-barang" value="<?= !old('qty')?'':old('qty');?>" required>

            </div>

            <div class="form-group  my-2">
                <button type="button" class="btn btn-primary" id="btn-kirim-pengeluaran">Keluarkan Barang</button>
            </div>
        </form>

    </div>
</div>
<script src="<?php echo base_url().JSASSET; ?>barang.js?ver=<?= microtime();?>"></script> 
<?= $this->endSection() ?>