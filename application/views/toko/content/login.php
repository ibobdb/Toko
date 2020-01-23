<div class="row">
    <div class="col-3"></div>
    <div class="col-6 ">
        <div class=" form form-login">
            <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
            <form action="<?= base_url('toko/login') ?>" method="post">
                <h3>Masuk ke akun AYANG COLLECTION</h3>
                <label for="">Username</label>
                <input type="text" class="form-control" placeholder="Masukan username" name="username" autofocus>
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">

                <button class=" btn btn-primary " type="submit">Masuk</button>
                <a class="btn btn-secondary" type="button">Daftar</a>
            </form>
        </div>
    </div>
</div>