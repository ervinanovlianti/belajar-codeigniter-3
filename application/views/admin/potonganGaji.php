<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <a href="<?php echo base_url('admin/potonganGaji/tambahData') ?>" class="btn btn-sm btn-success mb-2 mt-2"><i class="fas fa-plus"></i> Tambah Data</a>
    <table class="table table-border table-striped">
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Jenis Potongan</th>
            <th class="text-center">Jumlah Potongan</th>
            <th class="text-center">Action</th>
        </tr>
        <?php $no=1; foreach($pot_gaji as $p) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->potongan ?></td>
                <td>Rp. <?php echo number_format($p->jml_potongan,0,',','.') ?></td>
                <td>
                    <center>
                        <a href="<?php echo base_url('admin/potonganGaji/updateData/'.$p->id) ?>" 
                        class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Yakin Hapus?')" href="<?php echo base_url('admin/potonganGaji/deleteData/'.$p->id) ?>" 
                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>