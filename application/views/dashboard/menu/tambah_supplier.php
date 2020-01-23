<div class="card mb-4 m-4 ">

    <div class="card ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
        </div>
        <div class="card-body">
            <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
            <div class="row">
                <div class="col-4">
                    <form action="<?= base_url('dashboard/new_supp') ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputEmail4">Kode Supplier</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="01**" disabled>
                                <small>Kode otomatis ketika data di masukan</small>
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="form-group col">
                                <label for="">Nama Supplier</label>
                                <input type="text" class="form-control" placeholder="TOKO BUDIMAN" name="nama_supp" required>
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat_supp" placeholder="jln pramuka no 10" name="nama_supp" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">Telp Supplier</label>
                                <input type="text" class="form-control" placeholder="082169072681" name="telp_supp">
                            </div>
                        </div>



                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('dashboard/produk') ?>" class="btn btn-warning">Kembali</a>
                    </form>
                </div>
                <div class=" col">
                    <small>Data kategori akan mempengaruhi tampilan produk</small>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Alamat</th>
                                <th>Perintah</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($list_supplier as $r) : ?>
                                <tr>
                                    <th><?= $no; ?></th>
                                    <th><?= $r['nama_supplier'] ?></th>
                                    <th><?= $r['alamat_supplier'] ?></th>
                                    <th><?= $r['telp_supplier'] ?></th>

                                    <th> <a href="<?= base_url('dashboard/hapus_supplier/' . $r['kd_supplier']) ?>"><i class="fas fa-trash-alt fa-fw mr-1" onClick="return confirm('Anda akan menghapus data ?')"></a></th>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>


                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>