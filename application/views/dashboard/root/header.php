<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/fontawesome/css/all.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title><?php echo "$tittle" ?></title>
</head>

<body id="body" class="basic">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand m-auto" href="#">
                <h2>TOKO AYANG COLLECTION</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </nav>
    <div class="top-bar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">

                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url('dashboard') ?>"><i class="fas fa-home fa-fw mr-1"></i> Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-warehouse fa-fw mr-1"></i> Inventory
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="<?= base_url('dashboard/produk') ?>">Manajemen Produk</a>
                            <a class="dropdown-item" href="<?= base_url('dashboard/stok_masuk') ?>">Manajemen Stok</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-shopping-basket fa-fw mr-1"></i> Transaksi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Transaksi Masuk</a>
                            <a class="dropdown-item" href="#">Transaksi Keluar</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url('kasir') ?>"><i class="fas fa-calendar-alt fa-fw mr-1"></i>Kasir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><i class="fas fa-calendar-alt fa-fw mr-1"></i>Laporan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user fa-fw mr-1"></i> User
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="<?= base_url('toko/keluar') ?>">Keluar</a>

                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $sub_tittle ?></h1>

            </div>