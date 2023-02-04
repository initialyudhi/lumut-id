 
<table id="table-pengguna" class="table table-striped"  >
    <thead>
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Nama</th> 
            <th>Role</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($resultData as $key => $value):?>
            <tr>
                <td><?= $no;?>.</td>
                <td><?= $value->username;?></td>
                <td><?= $value->name;?></td> 
                <td><?= $value->role;?></td> 
                <td><a href="<?=base_url('account/edit/'.$value->username);?>" class="btn btn-sm btn-primary pengguna-barang" data-id="<?=$value->username;?>">edit</a></td>
            </tr>
        <?php $no++; endforeach; ?>
    </tbody>
</table>
             