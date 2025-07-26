<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset 2'); ?>/gaya/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset 2'); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/register-custom.css'); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background: #21d1f8 !important;">
    <!-- Animated bubbles background -->
    <div class="bubbles">
        <span style="--i:1"></span>
        <span style="--i:2"></span>
        <span style="--i:3"></span>
        <span style="--i:4"></span>
        <span style="--i:5"></span>
        <span style="--i:6"></span>
        <span style="--i:7"></span>
        <span style="--i:8"></span>
        <span style="--i:9"></span>
        <span style="--i:10"></span>
        <span style="--i:11"></span>
        <span style="--i:12"></span>
        <span style="--i:13"></span>
        <span style="--i:14"></span>
        <span style="--i:15"></span>
        <span style="--i:16"></span>
        <span style="--i:17"></span>
        <span style="--i:18"></span>
        <span style="--i:19"></span>
        <span style="--i:20"></span>
    </div>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-auto col-lg-7">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-5">
                            <?php if ($validation = session()->getFlashdata('validation')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php
                                    foreach ($validation as $error) {
                                        echo $error . '<br>';
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form action="<?= base_url('register/proses') ?>" method="post" class="user">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" id="nama" placeholder="Masukan nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tempat_lahir" class="form-control form-control-user" id="tempatlahir" placeholder="tempat lahir">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="tanggal_lahir" class="form-control form-control-user" id="tanggallahir" placeholder="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_ktp" class="form-control form-control-user" id="noktp" placeholder="masukan nomor ktp" pattern="[0-9]{16}" maxlength="16">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-user" id="alamat" placeholder="masukan alamat tempat tinggal">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="no_telp" class="form-control form-control-user" id="notelp" placeholder="masukan nomor telp" pattern="[0-9]{12}" maxlength="15">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="konfirmasi_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Masukkan ulang Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Sekarang</button>
                                <hr>


                            </form>
                            <hr>
                            <div class="text-center">

                            </div>
                            <div class="text-center">
                                <a class="small" href="auth">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset 2'); ?>/gaya/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset 2'); ?>/gaya/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset 2'); ?>/gaya/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset 2'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>