<div class="row">
    <div class="col d-flex justify-content-center">

        <div class="card  ">
            <div class="card-header py-3">
                <a href="<?= base_url('dashboard/produk') ?>"><i class="fas fa-home "></i></a>
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body ">
                <div class="container">
                    <div class="detail-produk row">
                        <div class="col-4">
                            <h6 style="font-weight:bold;">Kode produk</h6>
                            <hr>
                            <h6>Nama Produk produk</h6>
                            <hr>
                            <h6>Nama Kategori</h6>
                            <hr>
                            <h6>Nama Supplier</h6>
                            <hr>
                            <h6>Harga /pcs</h6>
                            <hr>
                            <h6>Total Stok</h6>
                        </div>
                        <div class="col-4">
                            <?php foreach ($d_produk as $r) : ?>
                                <h6 style="font-weight:bold;"><?= $r['kd_produk'] ?></h6>
                                <hr>
                                <h6><?= $r['nama_produk'] ?></h6>
                                <hr>
                                <h6><?= $r['nama_kategori'] ?></h6>
                                <hr>
                                <h6><?= $r['nama_supplier'] ?></h6>
                                <hr>
                                <h6><?= $r['harga_produk'] ?></h6>
                                <hr>
                                <h6><?= $r['stok'] ?></h6>

                        </div>
                        <div class="col">
                            <img class="mt-4" src="<?= base_url('assets/upload_img/') . $r['foto_produk'] ?>" alt="<?= $r['foto_produk'] ?>" width="150px">
                            <small>Foto Produk <?= $r['foto_produk'] ?></small>
                            <span>Keterangan</span>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <a href="" class="btn btn-primary btn-sm mt-3 ml-auto">Edit Data Produk</a>
                </div>


            </div>


        </div>
    </div>
</div>