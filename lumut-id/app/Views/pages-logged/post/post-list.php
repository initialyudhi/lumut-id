<?= $this->extend("layouts/template-page") ?>

<?= $this->section("content") ?>

<div class="row">
    <div class="col-md-12">
        <h2>List Permintaan</h2>
        <hr>
       <!--  <div class="row">
            <div class="col-md-6 offset-md-3"> -->
                <table id="table-permintaan" class="table table-striped"  >
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Barang</th> 
                            <th>Qty</th> 
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($resultData as $key => $value):?>
                            <tr>
                                <td><?= $no;?>.</td>
                                <td><?= $value->barang_id;?></td>
                                <td><?= $value->qty;?></td> 
                                <td></td>
                            </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            <!-- </div>
        </div> -->
        
        
    </div>
</div>

<script src="<?php echo base_url().JSASSET; ?>barang.js?ver=<?= microtime();?>"></script> 
<?= $this->endSection() ?>