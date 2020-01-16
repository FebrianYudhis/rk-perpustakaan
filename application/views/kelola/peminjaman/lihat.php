<div class="main-content-inner">
    <div class="container">
        <div class="row mt-4 ml-4">
            <table class="table table-striped table-bordered" id="datatable">
                <thead>
                    <tr class="thead-dark">
                        <th>#</th>
                        <th>Id Pinjaman</th>
                        <th>Kode Buku</th>
                        <th>NIM</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($pinjam->result_array() as $p):
                    ?>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?= $p['id_pinjam'];?></td>
                        <td><?= $p['kode_buku'];?></td>
                        <td><?= $p['nim'];?></td>
                        <td><?= $p['tgl_pinjam'];?></td>
                        <td><?= $p['tgl_kembali'];?></td>
                        <td>
                            <a href="<?= base_url();?>kelola/editpeminjaman/<?= $p['id_pinjam'];?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="<?= base_url();?>kelola/hapuspeminjaman/<?= $p['id_pinjam'];?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        <?php $no++; endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>