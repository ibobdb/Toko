<div class="row mt-4">
    <div class="col-8 ">
        <div class="card">
            <div class="card-header">
                <strong>Keranjang</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>

                            <th>Nama Barang</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Perintah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($keranjang as $r) :
                            ?>

                            <tr>

                                <th><?= $r['nama_produk'] ?></th>
                                <th> <img src="<?= base_url('assets/upload_img/') . $r['foto_produk'] ?>" alt="" style="width:5rem;"></th>
                                <th><?= $r['harga_produk'] ?></th>
                                <th><?= $r['qty_beli'] ?></th>
                                <th><?= $r['qty_beli'] * $r['harga_produk']; ?> </th>

                                <th><a href="" class=" "> <i class="fas fa-trash fa-fw"></i></a>
                                </th>
                            </tr>

                        <?php
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-nav">
            <a href=" <?= base_url('toko/index') ?>" class="btn btn-primary"> <i class="fas fa-plus fa-fw"></i> Tambah Belanja</a>
            <a href=" <?= base_url('toko/reset') ?>" class="btn btn-primary"> <i class="fas fa-plus fa-fw"></i>Reset</a>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <strong>Rincian belanja</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <p>Diskon</p>
                        <p>Sub total</p>
                        <h3>Total</h3>
                    </div>
                    <div class="col">
                        <p>0%</p>
                        <p>Rp.0</p>
                        <?php foreach ($total as $r) : ?>
                            <h3><?= $r['total_tmp'] ?></h3>
                        <?php endforeach; ?>
                    </div>
                </div>


            </div>
            <div class="card">
                <a href="<?= base_url('toko/pembayaran') ?>" class="btn btn-primary"> Lanjutkan Pembayaran</a>
            </div>
        </div>
    </div>
</div>