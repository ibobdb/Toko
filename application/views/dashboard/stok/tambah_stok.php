<div class="card mb-4 m-4">

    <div class="card ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>

    </div>
    <div class="container">
        <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
    </div>
    <div class="table">
        <div class="container">
            <form action="<?= base_url('dashboard/addStok') ?>" method="post">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="inputEmail4">Kode Stok Masuk</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="01**" disabled>
                        <small>Kode otomatis ketika data di masukan</small>
                    </div>
                    <div class="form-group col">
                        <label for="">Kode Produk</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <a href="" class="input-group-text" data-toggle="modal" data-target="#cari-kode"><i class="fas fa-search fa-fw "></i></a>
                            </div>

                            <input type="text" class="form-control" id="id" placeholder="Masukan kode produk" name="kode_produk" autofocus required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col">
                        <label for="">Tanggal barang masuk</label>
                        <input type="date" class="form-control" placeholder="-" name="tgl_masuk" required>
                    </div>
                    <div class="form-group col">
                        <label for="">Nama Produk</label>
                        <input type="text" class="form-control" placeholder="" readonly id="nama_produk">
                    </div>

                </div>
                <div class="form-row">

                    <div class="form-group col">
                        <label for="">Nama Supplier</label>
                        <select class="form-control" id="" name="nm_supplier" required>
                            <option value="">Pilih Supplier</option>
                            <?php foreach ($list_supplier as $r) : ?>
                                <option value="<?= $r['kd_supplier'] ?>"><?= $r['nama_supplier'] ?></option>
                            <?php endforeach; ?>


                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="">Qty</label>
                        <input type="text" class="form-control" placeholder="0" name="total_masuk">
                    </div>

                </div>




                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('dashboard/stok_masuk') ?>" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>
</div>

</div>