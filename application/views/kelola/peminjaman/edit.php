<div class="main-content-inner">
    <div class="container">
        <div class="row">
            <div class="card border-success mb-3 mt-3 mx-auto center" style="min-width:25em;">
                <div class="card-header bg-transparent border-success"><h3>Edit Data Peminjaman Buku</h3></div>
                    <div class="card-body text-success">
                        <p class="card-text">
                        <form method="POST" action="<?= base_url();?>kelola/editpeminjaman/<?= $pinjam['id_pinjam'];?>">
                            <div class="form-group">
                                <label for="buku">Nama Buku :</label>
                                <select class="form-control" name="buku">
                                <?php foreach($buku->result_array() as $b): ?>
                                    <option value="<?= $b['kode_buku'];?>" <?php if($pinjam['kode_buku']==$b['kode_buku']){echo 'selected';} ?>><?= $b['judul'];?>-|-<?= $b['pengarang'];?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nim">Nama Mahasiswa / NIM :</label>
                                <select class="form-control" name="nim">
                                <?php foreach($nim->result_array() as $n): ?>
                                    <option value="<?= $n['nim'];?>" <?php if($pinjam['nim']==$n['nim']){echo 'selected';}?>><?= $n['nama_mahasiswa'];?>-|-<?= $n['nim'];?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pinjam">Tanggal Peminjaman :</label>
                                <input type="date" class="form-control" name="pinjam" value="<?= $pinjam['tgl_pinjam'];?>">
                                <?= form_error('pinjam','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="kembali">Tanggal Pengembalian :</label>
                                <input type="date" class="form-control" name="kembali" value="<?= $pinjam['tgl_kembali'];?>">
                                <?= form_error('kembali','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>