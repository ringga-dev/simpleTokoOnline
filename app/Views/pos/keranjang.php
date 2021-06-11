<?= $this->extend('base_ui/ui_pos'); ?>
<?= $this->section('conten') ?>

<section class="content">


    <div class="content ">

        <div class="container">
            <div class="thickline"></div>
        </div>





        <div class="p-2 m-2">
            <table class="data-table table hover multiple-select-row nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Nomor</th>
                        <th>Image</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>aksi</th>
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
                            <td><?= number_to_currency($m['harga'], "IDR"); ?></td>
                            <td>
                                <a href="<?= base_url() . '/btnaksi/delete_submenu/' . $m['id']; ?>" class="badge badge-danger text-warning sm"><i class="fas fa-trash-alt fa-3x"></i></a>
                                <a href="<?= base_url() . '/posuser/cekout/' . $m['id']; ?>" class="badge badge-success  sm"><i class="fas fa-money-check-alt fa-3x"></i></a>
                            </td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </div>


</section>

<?= $this->endSection() ?>