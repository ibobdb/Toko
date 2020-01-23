<div class="card mb-4 m-4">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card p-4 mt-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">Transaksi</h6>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('kasir/tmp') ?>" method="post">
                            <div class="form-group">
                                <label for="">Cari Barang</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <a href="" class="input-group-text" data-toggle="modal" data-target="#cari-kode"><i class="fas fa-search fa-fw "></i></a>
                                    </div>
                                    <input type="text" class="form-control" id="id" placeholder="Masukan kode produk" name="kode_produk" autofocus>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                                <label for="">Nama Barang</label>
                                <input type="text" placeholder="0" name="nama_produk" class="form-control form-control-sm" id="nama_produk" readonly>
                                <label for="">Harga</label>
                                <input type="text" placeholder="0" name="harga" class="form-control form-control-sm" id="harga" readonly>
                                <label for="">Qty</label>
                                <input type="text" placeholder="0" name="qty" class="form-control form-control-sm" id="qty">
                                <label for="">Total harga</label>
                                <input type="text" placeholder="0" name="total" class="form-control form-control-sm" id="total" readonly>


                            </div>

                            <button type="submit" href="" class="btn btn-sm btn-info"><i class="fas fa-plus fa-fw"></i>Tambah</button>



                        </form>
                    </div>

                </div>
            </div>
            <div class="col-8">
                <div class="card p-4 mt-4">
                    <div class="card-header">
                        <strong>NOTA :</strong>
                        <input type="text" class="form-control-sm" disabled value="IDB<?= $nota ?>">

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <h6>Kasir</h6>
                                <h6>Tanggal</h6>

                            </div>
                            <div class="col-3">
                                <h6><?= $user['username'] ?></h6>
                                <h6><?= date('d, m, Y') ?></h6>
                                <h6><?= date('H:i:s a') ?></h6>
                            </div>

                            <div class="col-6">
                                <h4 class=" text-right">Total harga</h4>

                                <?php foreach ($total as $r) : ?>
                                    <h4 class=" text-right"><?= $r['total_tmp'] ?></h4>
                                <?php endforeach; ?>

                            </div>
                            <button href="" data-toggle="modal" data-target="#jumlah-bayar" class="btn btn-info">Bayar</button>
                        </div>
                    </div>

                </div>
                <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <table class="table table-bordered table-sm mt-4" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama barang</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tmp as $r) : ?>
                            <tr>
                                <td><?= $r['nama_produk'] ?></td>
                                <td id="hrg_tmp"><?= number_format($r['harga_produk']) ?></td>
                                <td id="qty_tmp"><?= $r['qty_beli'] ?></td>
                                <td id="total_tmp"><?= $r['harga_produk'] * $r['qty_beli'] ?></td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>


                </table>
            </div>
        </div>
    </div>