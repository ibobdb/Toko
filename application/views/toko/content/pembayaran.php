<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="form form-pembayaran">
            <form action="<?= base_url('toko/lanjut') ?>" method="post">

                <label for="">Username</label>
                <input type="text" class="form-control" readonly value="<?= $this->session->userdata('username') ?>">
                <label for=""> Pilih Kurir</label>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Pilih</option>
                    <option value="JNE">JNE</option>
                    <option value="J&T">J&T</option>
                    <option value="TIKI">TIKI</option>
                </select>
                <label for="">Metode bayar</label>
                <select class="custom-select" id="inputGroupSelect01" name="bank">
                    <option selected>Pilih</option>
                    <?php foreach ($bank as $r) : ?>
                        <option value="<?= $r['kd_bank'] ?>"><?= $r['nama_bank'] ?></option>

                    <?php endforeach; ?>
                </select>
                <label for=""> Total pembayaran</label>
                <?php foreach ($total as $r) : ?>
                    <input type="text" class="form-control" value="<?= number_format($r['total_tmp']) ?>" readonly>
                <?php endforeach; ?>
                <button class="btn btn-primary" type="sumbit" name="lanjutkan"> Lanjutkan</button>
            </form>
        </div>
    </div>
    <div class="col-4"></div>
</div>