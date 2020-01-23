<div class="container">
    <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
</div>
<div class="table-responsive">
    <div class="container">
        <table class="table table-bordered table-sm table-light" id="data-table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>Tanggal transaksi</th>
                    <th>Nama Pengguna</th>
                    <th>Bank</th>
                    <th>Total</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php
                foreach ($req as $r) : ?>
                    <tr>
                        <th><?= $r['kd_transaksi'] ?></th>
                        <th><?= $r['tgl_transaksi'] ?></th>
                        <th><?= $r['username'] ?></th>
                        <th><?= $r['bank'] ?></th>
                        <th><?= $r['total_bayar'] ?></th>
                        <th><?= $r['bukti_tf'] ?></th>
                        <th><a href=""><i class="fas fa-eye fa-fw"></i></a></th>

                    </tr>


                <?php endforeach; ?>


            </tbody>
    </div>
    </table>
</div>