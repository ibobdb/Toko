<div class="card mb-4 m-4">

    <div class="card ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $table_heading ?></h6>
        </div>
        <div class="card-body ml-auto">
            <a href="<?= base_url('dashboard/tambah_produk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-4"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i> Produk</a>
            <a href="<?= base_url('dashboard/kategori_produk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-4"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Kategori</a>
            <a href="<?= base_url('dashboard/tambah_supplier') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-4"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Supplier</a>


        </div>
        <div class="container">
            <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
        </div>
        <div class="table-responsive">
            <div class="container">
                <table class="table table-bordered table-sm" id="data-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Supplier</th>
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
                                <th><?= $r['nama_kategori'] ?></th>
                                <th><?= $r['nama_supplier'] ?></th>
                                <th><a href="" id="btn-detail" data-kode="<?= $r['kd_produk'] ?>" data-nm="<?= $r['nama_produk'] ?>" data-kt="<?= $r['nama_kategori'] ?>" data-spp="<?= $r['nama_supplier'] ?>" data-imgP="<?= $r['foto_produk'] ?>" data-hrg="<?= $r['harga_produk'] ?>" data-st="<?= $r['stok'] ?>" data-toggle="modal" data-target="#detail-produk"><i class="fas fa-eye fa-fw mr-1"></i></a>
                                    <a href="<?= base_url('dashboard/hapus_produk/' . $r['kd_produk']) ?>"><i class="fas fa-trash-alt fa-fw mr-1" onClick="return confirm('Anda akan menghapus data ?')"></a></th>
                                <?php $no++; ?>
                            </tr>
                        <?php endforeach ?>


                    </tbody>
            </div>
            </table>
        </div>
    </div>
</div>
</div>

</div>