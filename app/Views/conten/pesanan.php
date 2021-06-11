<?= $this->extend('base_ui/ui'); ?>
<?= $this->extend('base_ui/menu'); ?>
<?= $this->section('conten') ?>

<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <?= $title ?>
            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="main-container">
                <div class="pd-ltr-20 xs-pd-20-10">
                    <div class="min-height-200px">

                        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                            <div class="card bg-secondary mb-8 mb-5" style="max-width: 1000px;">
                                <div class="row no-gutters">
                                    <div class="col-lg-12  bg-secondary">

                                        <div class="p-2 m-2">

                                            <table class="data-table table hover multiple-select-row nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="table-plus datatable-nosort">Nomor</th>
                                                        <th>Image</th>
                                                        <th>Nama</th>
                                                        <th>Harga</th>
                                                        <th>alamat</th>
                                                        <th>status</th>
                                                        <th>jumlah</th>
                                                        <th>setujui</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($keranjang as $m) : ?>
                                                        <tr>
                                                            <td class="table-plus"><?= $i++ ?></td>
                                                            <td>
                                                                <img src="<?= base_url('assets/foto_barang') . "/" .  $m['image'] ?>" width="250px">
                                                            </td>
                                                            <td><?= $m['nama_barang'] ?></td>
                                                            <td><?= number_to_currency($m['harga'] * $m['jumlah'], "IDR") ?></td>
                                                            <td><?= $m['alamat'] ?></td>
                                                            <td><?= $m['stts'] ?></td>
                                                            <td><?= $m['jumlah'] ?></td>
                                                            <td>
                                                                <a href="<?= base_url() . '/btnaksi/setujui/' . $m['id']; ?>" class="badge badge-success text-warning sm"><i class="fas fa-thumbs-up fa-2x"></i></a>
                                                            </td>

                                                        <?php endforeach; ?>
                                                        </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->

</section>

<?= $this->endSection() ?>