<div class="row mt-4">


    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>Detail Barang</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        <?php foreach ($beli as $r) : ?>
                            <div class="row">
                                <div class="col-3">
                                    <img src="<?= base_url('assets/upload_img/') . $r['foto_produk'] ?>" alt="" style="width:15rem;">
                                </div>
                                <div class="col-5">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" value="<?= $r['nama_produk'] ?>" readonly>
                                    <strong>Deskripsi</strong>
                                    <p>--</p>


                                </div>
                                <div class="col-4">
                                    <form action="<?= base_url('toko/addKeranjang') ?>" method="post">
                                        <input type="text" class="form-control " name="kd_produk" value="<?= $r['kd_produk'] ?> " hidden>
                                        <label for="">Harga</label>
                                        <input type="text" class="form-control " name="hrg_produk" id="hrga_produk" value="<?= $r['harga_produk'] ?> " readonly>
                                        <label for="" class="mt-2">Qty</label>
                                        <input type="text" class="form-control " name="qty" id="qty" placeholder="1" required>
                                        <label for="">Total harga</label>
                                        <input type="text" class="form-control " name="total_hrga" id="total_hrga" readonly>

                                        <button type="submit" href=" btn btn-primary" name="addKeranjang" class="btn btn-primary"> Tambah Keranjang</button>

                                        <a href=" btn btn-primary" class="btn btn-primary"> Pembayaran</a>
                                    </form>
                                </div>
                            </div>


                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>