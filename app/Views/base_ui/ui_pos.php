<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Vvveb">
    <!-- base href="/app/public/themes/default/" -->
    <base href="">
    <link rel="icon" href="../../favicon.ico">

    <title>Vvveb default theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('tamplate/pos') ?>/css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('tamplate/admin') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- link href="css/bootstrap.css" rel="stylesheet"-->
    <!-- link href="css/stylesheet.css" rel="stylesheet"-->
</head>

<body>
    <div class="page-container">

        <div id="top-nav" class="bg-light smaller-font-size text-muted">
            <nav class="navbar-expand-md container px-3">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </nav>
        </div>

        <header class="container mt-5">

            <div class="row">

                <div class="col-md-3">
                    <a href="index.html" class="logo">
                        <!-- img src="img/logo.png"-->
                        <h1 class="text-dark"><i class="text-secondary la la-plug"></i><span>shopping<span class="text-secondary">Fun</span></span></h1>
                        <small class="text-dark">Belanja mudah dan murah</small>

                    </a>
                </div>

                <div class="col-md-5">



                </div>

                <div class="col-md-4">

                    <div class="dropdown float-right" id="mini-cart">
                        <a href="<?= base_url('posuser/pesanan') ?>" class="fas fa-shipping-fast d-inline-block" style="font-size:42px">

                        </a>
                    </div>
                    <div class="dropdown float-right" id="mini-cart">
                        <a href="<?= base_url('posuser/keranjang') ?>" class="la la-shopping-cart d-inline-block" style="font-size:42px">

                        </a>&ensp;
                    </div>

                    <div class="dropdown float-right" id="mini-user">
                        <a href="<?= base_url('auth/logout') ?>" class="fas fa-sign-out-alt d-inline-block" style="font-size:42px">
                        </a>&ensp;
                        <div class="d-inline-block text-dark">
                            <span class="font-weight-bold">log out</span>
                        </div>
                    </div>

                </div>

            </div>


            <nav class="navbar navbar-light bg-white  rounded navbar-expand-md mt-4">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="containerNavbar">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown categories-dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-bars"></i>&ensp;Categories <i class="la la-angle-down float-right"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <?php
                                foreach ($kategori as $k) :
                                ?>
                                    <a class="dropdown-item" href="<?= base_url() ?>/posuser/index/<?= $k['id'] ?>"><?= $k['nama_kategori'] ?> </a>

                                <?php endforeach; ?>
                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                    </ul>
                </div>
            </nav>

        </header>

        <!-- conten start -->
        <?= $this->renderSection('conten'); ?>
        <!-- conten end -->

        <footer class="bg-faded text-muted py-5 mt-5">
            <div class="container">

                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
            </div>
        </footer>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
        $('#product-tabs a').click(function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
    <!-- script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script -->
    <script src="js/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?= base_url('tamplate/pos') ?>/js/jquery.min.js"><\/script>')
    </script>
    <!-- script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script -->
    <script src="<?= base_url('tamplate/pos') ?>/js/tether.min.js"></script>
    <script src="<?= base_url('tamplate/pos') ?>/js/bootstrap.min.js"></script>
</body>

</html>