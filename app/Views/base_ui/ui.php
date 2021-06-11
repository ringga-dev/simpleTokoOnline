<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('tamplate/admin') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('tamplate/admin') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- my style-->
    <link rel="stylesheet" href="<?= base_url('tamplate/my_style/my_css.css') ?>">
    <?php $user = session()->get('user'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- loding start -->
    <div class="pre-loader">
        <div class="pre-loader-box">
            <script src="<?= base_url('tamplate/my_style/js/lottie-player.js') ?>"></script>
            <lottie-player src="<?= base_url('tamplate/my_style/animasi/43887-secure-payments.json') ?>" mode="" background="" speed="1" style="width: 400px; height: 400px;" hover loop autoplay></lottie-player>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                tunggu ya saya lakukan...

            </div>
        </div>
    </div>
    <!-- loding end -->

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('home') ?>" class="nav-link">Home</a>
                </li>

            </ul>




        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url('tamplate/admin') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('tamplate/admin') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $user['data_user']['name'] ?></a>
                    </div>
                </div>

                <!-- menu start -->
                <?= $this->renderSection('menu'); ?>
                <!-- menu end -->


            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <?= session()->getFlashdata('pesan') ?>
                        <?php endif; ?>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->

            <!-- conten start -->
            <?= $this->renderSection('conten'); ?>
            <!-- conten end -->


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->


    <script src="<?= base_url('tamplate/my_style/js/jquery.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('tamplate/admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('tamplate/admin') ?>/dist/js/adminlte.min.js"></script>

    <script src="<?= base_url('tamplate/my_style/js/my_js.js') ?>"> </script>
    <script src="<?= base_url('tamplate/my_style/js/process.js') ?>"> </script>
    <script src="<?= base_url('tamplate/saya.js') ?>"></script>
</body>

</html>