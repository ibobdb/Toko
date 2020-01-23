<!-- Modal -->
<!-- Cari produk -->
<div class="modal fade" id="cari-kode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari Kode Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm" id="data-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Total Stok</th>
                            <th>Perintah</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($tabel_produk as $r) : ?>
                            <tr>
                                <th><?= $no ?></th>
                                <th><?= $r['kd_produk'] ?></th>
                                <th><?= $r['nama_produk'] ?></th>
                                <th><?= $r['stok'] ?></th>
                                <th>
                                    <button class="btn btn-sm btn-primary" type="button" data-kode="<?= $r['kd_produk'] ?>" data-nama="<?= $r['nama_produk'] ?>" data-harga="<?= $r['harga_produk'] ?>" id="select">
                                        <i class="fas fa-plus fa-fw"></i></button>
                                </th>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>




                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
<!-- Detail-produk -->
<div class="modal fade" id="detail-produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h6 style="font-weight:bold;">Kode produk</h6>
                        <hr>
                        <h6>Nama Produk </h6>
                        <hr>
                        <h6>Nama Kategori</h6>
                        <hr>
                        <h6>Nama Supplier</h6>
                        <hr>
                        <h6>Harga /pcs</h6>
                        <hr>
                        <h6>Total Stok</h6>
                    </div>
                    <div class="col-6">
                        <h6 style="font-weight:bold;" id="kd"></h6>
                        <hr>
                        <h6 id="nm"></h6>
                        <hr>
                        <h6 id="kt"></h6>
                        <hr>
                        <h6 id="spp"></h6>
                        <hr>
                        <h6 id="hrg"></h6>
                        <hr>
                        <h6 id="st"></h6>



                    </div>
                </div>


            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
<!-- Jumlah Bayar-->
<div class="modal fade" id="jumlah-bayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">

                        <form action="<?= base_url('kasir/bayar') ?>" method="post">
                            <!-- HIDDEN -->
                            <input type="text" class="form-control-sm" value="IDB<?= $nota ?>" name="nota" hidden>
                            <input type="text" class="form-control-sm" value="<?= date(DATE_ATOM, time()) ?>" name="tgl" hidden>
                            <?php foreach ($total as $r) : ?>
                                <label for="">Total Harga</label>
                                <input type="text" class="form-control" value="<?= $r['total_tmp'] ?>" name="total" id="total-harga" readonly>
                                <label for="">Jumlah Bayar</label>
                                <input type="text" class="form-control" value="" name="bayar" id="bayar">
                                <label for=""> Kembalian</label>
                                <input type="text" class="form-control" value="" name="kembalian" id="kembalian" readonly>
                            <?php endforeach; ?>

                            <button href="" class="btn btn-info mt-2">Bayar</button>

                        </form>

                    </div>
                </div>


            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>





<!-- Pending request-->
<div class="modal fade" id="jumlah-bayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h6 style="font-weight:bold;"></h6>
                            <hr>
                            <h6>Kode transaksi</h6>
                            <hr>
                            <h6>Tanggal Trasaksi</h6>
                            <hr>
                            <h6>Nama Pengguna</h6>
                            <hr>
                            <h6>Bank</h6>
                            <hr>
                            <h6>Total</h6>
                            <hr>
                            <h6>Bukti</h6>
                            <hr>
                            <h6>Perintah</h6>
                        </div>
                        <div class="col-6">
                            <h6 style="font-weight:bold;" id="kd"></h6>
                            <hr>
                            <h6 id="kd_transaksi"></h6>
                            <hr>
                            <h6 id="tgl_transaksi"></h6>
                            <hr>
                            <h6 id="nama"></h6>
                            <hr>
                            <h6 id="bank"></h6>
                            <hr>
                            <h6 id="total"></h6>
                            <hr>
                            <h6 id="Bukti"></h6>
                            <a href="">Konfirmasi</a>



                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>