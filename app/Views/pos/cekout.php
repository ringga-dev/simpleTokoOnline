<?= $this->extend('base_ui/ui_pos'); ?>
<?= $this->section('conten') ?>

<section class="content">

    <div class="col-lg-8 p-6 ml-3">
        <form class="m-2 p-2 was-validated" action="<?= base_url() ?>/btnaksi/pesan" method="POST">

            <div class="card" style="width: 52rem;">
                <img class="card-img-top" src="<?= base_url('assets/foto_barang') . "/" . $barang['image'] ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">
                    <h4><?= $barang['nama_barang'] ?></h4>
                    </p>
                    <p class="card-text">
                    <h3 class="text-danger"><?= number_to_currency($barang['harga'], "IDR") ?></h3>
                    </p>
                    <p class="card-text"><?= $barang['deskripsi'] ?></p>
                </div>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?= $barang['id_barang'] ?>" required hidden>
            </div>

            <div class="form-group">
                <label for="alamat">Address</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomer hp</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>


            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

</section>

<?= $this->endSection() ?>