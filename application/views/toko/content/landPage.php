<div class="row">
    <div class="col">
        <div class="landing-page mt-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url('assets/toko/') ?>img/sample/c3 (1).jpg" alt="First slide">

                        <div class="carousel-caption d-none d-md-block">
                            <h5>Diskon Akhir tahun</h5>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('assets/toko/') ?>img/sample/c3 (2).jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Belanja hemat dan murah</h5>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('assets/toko/') ?>img/sample/c3 (3).jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Diskon Perlengkapan bayi</h5>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="container">
        <div class="content-heading">
            <h2>Promo</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class=" promo col-3" style="padding: 20px;">
        <h3>BIG SALE</h3>
        <img src="<?= base_url('assets/toko/') ?>img/sample/girl2.jpg" style="width: 15rem;" alt="">
        <a href="" class="btn btn-primary">Kunjungi</a>
        <img src="<?= base_url('assets/toko/') ?>img/sample/gallery2.jpg" style="width: 15rem;" alt="">
    </div>
    <div class=" main col">
        <div class="row">
            <?php foreach ($list as $r) : ?>

                <div class="col-4 mt-4">
                    <div class="card " style="width:16rem;">
                        <img class=" card-img-top" src="<?= base_url('assets/upload_img/') . $r['foto_produk'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $r['nama_produk'] ?></h5>
                            <p class="card-text">Rp <?= $r['harga_produk'] ?></p>
                            <?php if ($r['stok'] > 0) : ?>
                                <p class="card-text">Stok barang : <?= $r['stok'] ?></p>

                            <?php elseif ($r['stok'] <= 0) : ?>
                                <p class="card-text text-danger">Stok Kosong</p>
                            <?php endif; ?>


                            <a href="<?= base_url('toko/beli/') . $r['kd_produk'] ?>" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>


        </div>


    </div>
</div>