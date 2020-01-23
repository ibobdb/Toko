<div class="card mb-4 m-4 ">

    <div class="card ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
        </div>
        <div class="card-body">
            <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
            <form method="post" action="<?= base_url('dashboard/new_produk') ?>" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Kode Produk</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="01**" disabled>
                        <small>Kode otomatis ketika data di masukan</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Kategori <a href="<?= base_url('dashboard/kategori_produk') ?>"><i class="fas fa-plus fa-fw ml-2"></i></a></label>
                        <select class="form-control" id="" name="nm_kategori" required>
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($list_kategori as $r) : ?>
                                <option value="<?= $r['kd_kategori'] ?>"><?= $r['nama_kategori'] ?></option>
                            <?php endforeach; ?>


                        </select>
                    </div>

                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="inputAddress">Nama Produk</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Kemeja flanel" name="nm_produk" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nama Supplier <a href="<?= base_url('dashboard/tambah_supplier') ?>"><i class="fas fa-plus fa-fw ml-2"></i></a></label>
                        <select class="form-control" id="" name="nm_supplier" required>
                            <option value="">Pilih Supplier</option>
                            <?php foreach ($list_supplier as $r) : ?>
                                <option value="<?= $r['kd_supplier'] ?>"><?= $r['nama_supplier'] ?></option>
                            <?php endforeach; ?>


                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Harga</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">Rp</span>
                            <input type="text" name="hrg_produk" class="form-control" id="validationDefaultUsername" placeholder="200.000" aria-describedby="inputGroupPrepend2" required>
                        </div>
                        <small>Harga/pcs</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlFile1">Tambahkan foto produk</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('dashboard/produk') ?>" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>