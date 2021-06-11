<?= $this->extend('base_ui/ui'); ?>
<?= $this->section('menu') ?>

<?php
$db = \Config\Database::connect();
$role = session()->get();

$menu = $db->table('menu')
    ->select('menu.*')
    ->where(['stts' => "ADMIN"])
    ->orderBy('menu.id', 'ASC')
    ->get()
    ->getResultArray();
// dd($menu, $role);
?>

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <?php
        foreach ($menu as $m) : ?>
            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-<?= $m['icons']; ?>"></i>
                    <p>
                        <?= $m['name_menu']; ?>
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <?php
                $menuid = $m['id'];
                $submenu = $db->table('sub_menu')
                    ->select('sub_menu.*')
                    ->join('menu', 'sub_menu.id_menu = menu.id')
                    ->where(['sub_menu.id_menu' => $menuid])
                    ->orderBy('sub_menu.id', 'ASC')
                    ->get()
                    ->getResultArray();
                ?>
                <ul class="nav nav-treeview">
                    <?php foreach ($submenu as $sm) : ?>
                        <li class="nav-item">
                            <a href="<?= base_url($sm['url']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p><?= $sm['name_sub_menu'] ?></p>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </li>
        <?php endforeach; ?>

        <li class="nav-item">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Log Out
                    <span class="right badge badge-danger">Keluar</span>
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
<?php $this->endSection() ?>