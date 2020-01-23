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
    <div class="box p-4">
        <h2 class="text-weight-bold"> Selamat datang di Toko AYANG COLLECTION</h2>
        <form method="post" action="">
            <div class="form-group ">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
        </form>
        <div class="message mt-2"> <?= $this->session->flashdata('message'); ?></div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>