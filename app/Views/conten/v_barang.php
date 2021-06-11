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
                                        <form action="" method="POST" class="col-md-12 text-right ml-5 mt-2 mb-2">
                                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-ad"></i> Add New Kategori</a>
                                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-ad"></i> Add New Barang</a>
                                        </form>
                                        <div class="p-2 m-2">
                                            <table class="data-table table hover multiple-select-row nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="table-plus datatable-nosort">Nomor</th>
                                                        <th>Image</th>
                                                        <th>Nama</th>
                                                        <th>Kategory</th>
                                                        <th>harga</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($barang as $m) : ?>
                                                        <tr>
                                                            <td class="table-plus"><?= $i++ ?></td>
                                                            <td>
                                                                <img src="<?= base_url('assets/foto_barang') . "/" .  $m['image'] ?>" width="250px">
                                                            </td>
                                                            <td><?= $m['nama_barang'] ?></td>
                                                            <td><?= $m['nama_kategori'] ?></td>
                                                            <td><?= $m['harga'] ?></td>
                                                            <td>
                                                                <a href="<?= base_url() . '/btnaksi/delete_barang/' . $m['id']; ?>" class="badge badge-danger text-warning sm"><i class="fas fa-trash-alt fa-2x"></i></a>
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

                <!-- modal menu start-->
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form class="m-2 p-2 was-validated" action="<?= base_url() ?>/btnaksi/add_kategori" method="POST">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Kategori</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Kategori :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control " id="name_kategori" name="name_kategori" placeholder="name kategori" required>
                                            <div class="invalid-feedback">
                                                Nama Kategori...
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- skill modal end -->

                <!-- modal menu start-->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form class="m-2 p-2 was-validated" action="<?= base_url() ?>/btnaksi/add_barang" method="POST" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Barang</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="url" class="col-sm-2 col-form-label">Kategori :</label>
                                        <div class="col-sm-10">
                                            <select type="text" class="form-control" name="id_kategori" id="id_kategori">
                                                <?php foreach ($kategori as $j) : ?>
                                                    <option value="<?= $j['id']; ?>"><?= $j['nama_kategori']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control " id="nama_barang" name="nama_barang" placeholder="Nama barang" required>
                                            <div class="invalid-feedback">
                                                Nama barang belum di isi...
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga :</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control " id="harga" name="harga" placeholder="Harga" required>
                                            <div class="invalid-feedback">
                                                Harga Barang Belum di isi...
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control " id="deskripsi" name="deskripsi" placeholder="Deskripsi" required>
                                            <div class="invalid-feedback">
                                                Deskripsi beum di isi...
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image" onchange="lihat()">
                                            <label class="custom-file-label">Pilih Gambar Ya...</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- skill modal end -->

            </div>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->

</section>

<?= $this->endSection() ?>