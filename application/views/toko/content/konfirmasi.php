<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="form form-konfirmasi">
            <form action="<?= base_url('toko/transaksi') ?>" method="post" ">
            <input type=" text" class="form-control" value="TF-<?= $nota ?> " name="kd_transaksi" hidden>
                <input type=" text" class="form-control" value="<?= date(DATE_ATOM, time()) ?> " name="tgl" hidden>
                <label for="">Total Pembayaran</label>
                <?php foreach ($total as $r) : ?>
                    <input type=" text" class="form form-control" name="total_bayar" value="<?= $r['total_tmp'] ?>" readonly>
                <?php endforeach; ?>

                <?php foreach ($bank as $r) : ?>
                    <label for="">Kirim pembayaran ke Rekening <?= $r['nama_bank'] ?></label>
                    <div class="form-group">
                        <div class="form-row">

                            <div class="col-8">
                                <input type="text" class="form form-control" value="<?= $r['no_rek'] ?>" readonly>

                            </div>
                            <div class="col-2">
                                <input type="text" class="form form-control" value="<?= $r['nama_rek'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <label for=""> Upload bukti pembayaran</label>
                <input type="file" class="form form-control-file" name="bukti" required>
                <small>Transaksi akan di konfirmasi 1 x 24</small><br>
                <button type="submit" class="btn btn-primary" id="kirim"> Kirim</button>
            </form>

        </div>
    </div>
    <div class="col-3"></div>
</div>