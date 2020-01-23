<div class="card mb-4 m-4 ">

    <div class="card ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
        </div>
        <div class="card-body">
            <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
            <div class="row">
                <div class="col-4">
                    <form method="post" action="<?= base_url('dashboard/new_kategori') ?>">

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="inputEmail4">Kode Kategori</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="01**" disabled>
                                <small>Kode otomatis ketika data di masukan</small>
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="form-group col-12">
                                <label for="inputAddress">Nama Kategori</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Baju" required name="nama_kategori">
                            </div>

                        </div>




                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('dashboard/produk') ?>" class="btn btn-warning">Kembali</a>
                    </form>

                </div>
                <div class=" col-8">
                    <small>Data kategori akan mempengaruhi tampilan produk</small>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Perintah</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($list_kategori as $r) : ?>
                                <tr>
                                    <th><?= $no; ?></th>
                                    <th><?= $r['kd_kategori'] ?></th>
                                    <th><?= $r['nama_kategori'] ?></th>
                                    <th> <a href="<?= base_url('dashboard/hapus_kategori/' . $r['kd_kategori']) ?>"><i class="fas fa-trash-alt fa-fw mr-1" onClick="return confirm('Anda akan menghapus data ?')"></a></th>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>


                        </tbody>
                </div>

            </div>

        </div>
    </div>
</div>