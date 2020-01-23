<div class="card mb-4 m-4">

    <div class="card ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body m-auto">

            <a href="<?= base_url('dashboard/stok_masuk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-4"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Stok Masuk</a>
            <a href="<?= base_url('dashboard/stok_keluar') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-4"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Stok Keluar</a>


        </div>
        <div class="container">
            <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
        </div>
        <div class="table-responsive">
            <div class="container">
                <a href="<?= base_url('dashboard/tambah_stok') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-4"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Tambah</a>
                <table class="table table-bordered table-sm" id="data-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Masuk</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Nama Supplier</th>
                            <th>Stok Masuk</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($stok_masuk as $r) : ?>
                            <tr>
                                <th><?= $no ?></th>
                                <th><?= $r['tanggal_masuk'] ?></th>
                                <th><?= $r['kd_produk'] ?></th>
                                <th><?= $r['nama_produk'] ?></th>
                                <th><?= $r['nama_supplier'] ?></th>
                                <th><?= $r['stok_masuk'] ?></th>
                            </tr>

                        <?php $no++;
                        endforeach; ?>
                    </tbody>
            </div>
            </table>
        </div>
    </div>
</div>
</div>

</div>