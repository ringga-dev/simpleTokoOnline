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
                                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="icon-copy dw dw-folder-2"></i> Add New Menu</a>
                                        </form>
                                        <div class="p-2 m-2">
                                            <table class="data-table table hover multiple-select-row nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="table-plus datatable-nosort">Nomor</th>
                                                        <th>User Menu</th>
                                                        <th>Logo</th>
                                                        <th>STTS</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($menu['list_menu'] as $m) : ?>
                                                        <tr>
                                                            <td class="table-plus"><?= $i++ ?></td>
                                                            <td><?= $m['name_menu'] ?></td>
                                                            <td><?= $m['icons'] ?></td>
                                                            <td><?= $m['stts'] ?></td>
                                                            <td>
                                                                <a href="<?= base_url() . '/btnaksi/delete_menu/' . $m['id']; ?>" class="badge badge-danger text-warning sm"><i class="fas fa-trash-alt fa-2x"></i></a>
                                                            </td>
                                                        <?php endforeach; ?>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card bg-secondary mb-8" style="max-width: 1000px;">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 bg-secondary">
                                        <form action="" method="POST" class="col-md-12 text-right ml-5 mt-2 mb-2">
                                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2"><i class="icon-copy dw dw-folder-2"></i> Add New Sub-Menu</a>
                                        </form>
                                        <div class="p-2 m-2">
                                            <table class="data-table table hover multiple-select-row nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="table-plus datatable-nosort">Nomor</th>
                                                        <th>Sub Menu</th>
                                                        <th>Menu</th>
                                                        <th>URL</th>
                                                        <th>aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($menu['list_sub_menu'] as $m) : ?>
                                                        <tr>
                                                            <td class="table-plus"><?= $i++ ?></td>
                                                            <td><?= $m['name_sub_menu'] ?></td>
                                                            <td><?= $m['name_menu'] ?></td>
                                                            <td><?= $m['url'] ?></td>
                                                            <td>
                                                                <a href="<?= base_url() . '/btnaksi/delete_submenu/' . $m['id']; ?>" class="badge badge-danger text-warning sm"><i class="fas fa-trash-alt fa-2x"></i></a>
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
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form class="m-2 p-2 was-validated" action="<?= base_url() ?>/btnaksi/add_menu" method="POST">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Menu</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="menu" class="col-sm-2 col-form-label">Menu :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control " id="menu" name="menu" placeholder="Menu (gunakan simbol - atau _ sebagai pemisah)" required>
                                            <div class="invalid-feedback">
                                                Apa menu nya...
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="url" class="col-sm-2 col-form-label">Role Menu :</label>
                                        <div class="col-sm-10">
                                            <select type="text" class="form-control" name="role" id="role">
                                                <option value="ADMIN">ADMIN</option>
                                                <option value="USER">USER</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="logo_user" class="col-sm-2 col-form-label">Icon :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control " id="logo_user" name="logo_user" placeholder="Icon" required>
                                            <div class="invalid-feedback">
                                                Icon/logo mana...
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


                <!-- Modal 2 -->
                <!-- modal menu start-->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form class="m-2 p-2 was-validated" action="<?= base_url() ?>/btnaksi/add_submenu" method="POST">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Sub Menu</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="url" class="col-sm-2 col-form-label">Role Menu :</label>
                                        <div class="col-sm-10">
                                            <select type="text" class="form-control" name="menu_id" id="menu_id">
                                                <?php foreach ($menu['list_menu'] as $j) : ?>
                                                    <option value="<?= $j['id']; ?>"><?= $j['name_menu']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="url" class="col-sm-2 col-form-label">url :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control " id="url" name="url" placeholder="url (admin/submenu)" required>
                                            <div class="invalid-feedback">
                                                pilih alamat sub menu...
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control " id="title" name="title" placeholder="title" required>
                                            <div class="invalid-feedback">
                                                Nama sub menu...
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

            </div>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->

</section>

<?= $this->endSection() ?>