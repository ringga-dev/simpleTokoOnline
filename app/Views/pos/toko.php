<?= $this->extend('base_ui/ui_pos'); ?>
<?= $this->section('conten') ?>

<section class="content">


    <div class="content">

        <div class="container">
            <div class="thickline"></div>
        </div>



        <div class="container">

            <div class="row">


                <section class="col-12 products" data-products="limit:6 page:0 id:1679,807,786,1597">

                    <div class="row">
                        <?php foreach ($barang as $b) : ?>
                            <div class="col-md-3" data-product>
                                <article class="product">
                                    <a href="product.html" data-url>
                                        <img src="<?= base_url('assets/foto_barang') . "/" . $b['image'] ?>" class="img-fluid p-3">
                                    </a>
                                    <h3>
                                        <a href="product.html" data-product-url data-name data-url><?= $b['nama_barang'] ?></a>
                                    </h3>

                                    <div class="prce">
                                        <span class="currency" data-currency></span> <span data-price><?= number_to_currency($b['harga'], "IDR") ?></span>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?= base_url('btnaksi/add_keranjang/' . $b['id']) ?>" class="btn btn-sm btn-secondary">
                                            <i class="fa fa-shopping-cart"></i> Add to Cart
                                        </a>
                                    </div>
                                </article><!-- product -->

                            </div> <!-- col-md -->
                        <?php endforeach ?>


                    </div><!-- row -->



                </section> <!-- products -->



            </div>
        </div>

    </div>

</section>

<?= $this->endSection() ?>