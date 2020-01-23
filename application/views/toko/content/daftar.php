<div class="row">
    <div class="col-3"></div>
    <div class="col-6 ">
        <div class=" form form-login">
            <form action="<?= base_url('toko/Qdaftar') ?>" method="post">
                <h3>Isi Data lengkap</h3>
                <label for="">username</label>
                <input type="text" class="form-control" placeholder="Masukan nama" name="username">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukan nama" name="nama">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="***" name="password">
                <label for="">Nomor handphone</label>
                <input type="text" class="form-control" placeholder="+62" name="nohp">

                <button class=" btn btn-primary " type="submit">Daftar</button>

            </form>
        </div>
    </div>
</div>