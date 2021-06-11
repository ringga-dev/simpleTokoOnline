<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('tamplate/admin') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('tamplate/admin') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('tamplate/admin') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- my style-->
    <link rel="stylesheet" href="<?= base_url('tamplate/my_style/my_css.css') ?>">


</head>

<body class="hold-transition login-page">

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
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <?= session()->getFlashdata('pesan') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- loding end -->

    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url('tamplate/admin') ?>/index2.html">
                <b> Wellcome </b>USER</a>
        </div>
        <!--/.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"> Silakan Login </p>


                <form action="<?= base_url() ?>/auth/cek_login" method="POST">

                    <div class="input-group mb-3">
                        <input type="email" class="form-control <?= ($validation->hasError('email_user') ? 'is-invalid' : '') ?>" placeholder="Email" name="email_user" id="email_user" autofocus value="<?= old('email_user') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope">
                                </span>
                            </div>
                        </div>
                        <div class="invalid-feedback pl-3">
                            <?= $validation->getError('email_user') ?> </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control <?= ($validation->hasError('pass') ? 'is-invalid' : '') ?>" placeholder="Password" name="pass" id="pass" autofocus value="<?= old('pass') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock" onclick="klik()" id="viewPass">
                                </span>
                            </div>
                        </div>
                        <div class="invalid-feedback pl-3">
                            <?= $validation->getError('pass') ?> </div>
                    </div>
                    <div class="row">
                        <div class="col-8">

                        </div>
                        <!--/.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block"> Sign In </button>
                        </div>
                        <!--/.col -->
                    </div>
                </form>


                <p class="mb-0">
                    <a href="<?= base_url() ?>/auth/register" class="text-center"> Register a new membership </a>
                </p>
            </div>
            <!--/.login-card-body -->
        </div>
    </div>
    <!--/.login-box -->

    <!--jQuery-->
    <script src="<?= base_url('tamplate/my_style/js/jquery.js') ?>">
    </script>
    <!--Bootstrap 4-->
    <script src="<?= base_url('tamplate/admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <!--AdminLTE App-->
    <script src="<?= base_url('tamplate/admin') ?>/dist/js/adminlte.min.js">
    </script>
    <script src="<?= base_url('tamplate/my_style/js/my_js.js') ?>"> </script>
    <script src="<?= base_url('tamplate/my_style/js/process.js') ?>"> </script>

</body>

</html>