<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/toko/') ?>css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/toko/') ?>css/style.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/toko/') ?>css/fontawesome/css/all.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Rock+Salt&display=swap" rel="stylesheet">
    <title>Ecommere</title>
</head>

<body id="body">

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a href="<?= base_url('toko/index') ?>" class="navbar-brand "><i class="fas fa-home mr-2"></i>Ayang collection</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <ul class="navbar-nav ml-auto">
                <?php if ($user) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('toko/Keranjang') ?>">
                            Keranjang
                            <span class="badge badge-primary badge-pill ml-2"><?= $count_tmp->num_rows() ?></span>
                            <i class="fas fa-shopping-cart fa-fw "></i></a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <img src="<?= base_url('assets/toko/img/') . $user['img_profile'] ?>" class="rounded-circle ml-2" style="width:25px;height:25px; float:right; " alt="">
                                <?= $user['username'] ?></a>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Profile<i class="fas fa-user fa-fw float-right"></i></a>
                                <a class="dropdown-item" href="#"></i>Riwayat<i class="fas fa-history fa-fw float-right"></i></a>
                                <a class="dropdown-item" href="<?= base_url('toko/keluar') ?>"> Keluar<i class="fas fa-sign-out-alt fa-fw float-right"></i></a>
                            </div>
                        </div>
                    </li>
                <?php else : ?>
                    <a href="<?= base_url('toko/login') ?>" class="btn btn-warning btn-sm mr-2">Login</a>
                    <a href="<?= base_url('toko/daftar') ?>" class="btn btn-light btn-sm">Daftar</a>
                <?php endif; ?>



            </ul>


        </div>

    </nav>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-2 mr-auto mt-4">
                    <div class="pencarian">
                        <label class="sr-only" for="inlineFormInputGroup">Pencarian</label>
                        <div class="input-group mb-2 ">

                            <div class="input-group-prepend ">
                                <form action="">
                                    <button type="submit" class="form-control input-group-text">
                                        <i class="fas fa-search fa-fw"></i></button>
                            </div>
                            <input type="text" class="form-control " id="inlineFormInputGroup" placeholder="Pencarian">
                            </form>
                        </div>
                        <ul class="link ">

                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('toko/index') ?>"></i>Home</a>
                            </li>

                            <li class="nav-item">
                                <div class="dropdown katalog">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Katalog
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="" class="dropdown-item">Baju wanita</a>
                                        <a href="" class="dropdown-item">Baju pria</a>
                                        <a href="" class="dropdown-item">Accesoris</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="col ">
                    <h1><span> Ayang </span>collection</h1>
                </div>
            </div>

        </div>

    </div>
    <div class="wrapper">
        <div class="container">