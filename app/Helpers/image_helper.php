<?php

function src($fileName, $type = "full")
{
    $path = './img/profile_user/';


    if ($type != 'full')
        $path .= $type . '/';
    return $path . $fileName;
}

function admin_menu()
{
    $role = session()->get('stts');
    if ($role < "ADMIN") {
        $data = false;
    } else {
        $data = true;
    }
    return $data;
}

function cek_akses($role_id, $menu_id)
{
    $db = \Config\Database::connect();
    $cek = $db->table('user_menu_akses')->where(['role_id' => $role_id, 'menu_id' => $menu_id])->get()->getResultArray();
    if ($cek != null) {
        return "<i class='icon-copy dw dw-unlock1'></i> Kunci";
    } else {
        return "<i class='icon-copy dw dw-user-13'></i> Tampilkan";
    }
}
