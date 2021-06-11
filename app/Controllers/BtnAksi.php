<?php

namespace App\Controllers;

use App\Models\UserViewModel;

use App\Controllers\BaseController;

class BtnAksi extends BaseController
{

	public function __construct()
	{
		$this->UserViewModel = new UserViewModel();
	}

	public function add_menu()
	{
		$data = [
			'name_menu' => $this->request->getVar('menu'),
			'icons' => $this->request->getVar('logo_user'),
			'stts' => $this->request->getVar('role'),

		];

		$pesan = $this->UserViewModel->tambah_menu($data);
		session()->setFlashdata('pesan', "<div class='alert alert-success col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/home/menu');
	}

	public function delete_menu($id)
	{
		$pesan = $this->UserViewModel->hapus_menu($id);
		session()->setFlashdata('pesan', "<div class='alert alert-warning col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/home/menu');
	}



	public function add_submenu()
	{
		$data = [
			'id_menu' => $this->request->getVar('menu_id'),
			'name_sub_menu' => $this->request->getVar('title'),
			'url' => $this->request->getVar('url'),
		];

		$pesan = $this->UserViewModel->tambah_submenu($data);
		session()->setFlashdata('pesan', "<div class='alert alert-warning col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/home/menu');
	}

	public function add_kategori()
	{
		$data = [
			'nama_kategori' => $this->request->getVar('name_kategori'),
		];

		$pesan = $this->UserViewModel->tambah_kategori($data);
		session()->setFlashdata('pesan', "<div class='alert alert-warning col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/home/barang');
	}

	public function add_barang()
	{
		$imageCrop = \Config\Services::image();
		$width = 100;
		$height = 100;
		if ($this->validate([
			'image' => [
				'rules'  => 'max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => '{field} ukuran foto kamu lebih dari 2 MB ...',
					'is_image' => '{field} file kamu bukan gambar ...',
					'mime_in' => '{field} file kamu bukan gambar...'
				]
			]
		])) {
			$image = $this->request->getFile('image');
			$path = './assets/foto_barang/';
			$gambar = service('image');



			// if ($imageLama != 'user.jpg') {
			// 
			// }
			$nameFile = $image->getRandomName();
			$image->move($path, $nameFile);


			$gambar->withFile($path . '/' . $nameFile)
				->fit(400, 400, "center")
				->save($path . "/" . $nameFile);

			$data = [
				'nama_barang' => $this->request->getVar('nama_barang'),
				'id_kategori' => $this->request->getVar('id_kategori'),
				'harga' => $this->request->getVar('harga'),
				'deskripsi' => $this->request->getVar('deskripsi'),
				'image' => $nameFile,
			];


			if ($this->UserViewModel->tambah_barang($data)) {
				session()->setFlashdata('pesan', "<div class='alert alert-success col-lg-12' role='alert'>data sudah diperbarui...</div>");
				return redirect()->to('/home/barang');
			} else {
				session()->setFlashdata('pesan', "<div class='alert alert-danger col-lg-12' role='alert'>data gagal diperbarui...</div>");
				return redirect()->to('/home/barang');
			}

			dd($data);
		} else {
			$errors = \Config\Services::validation();
			$err = $errors->getError('image');

			session()->setFlashdata('pesan', "<div class='alert alert-danger col-lg-12' role='alert'>$err</div>");
			return redirect()->to('/home/barang');
		}
	}



	public function delete_submenu($id)
	{
		$pesan = $this->UserViewModel->hapus_submenu($id);
		session()->setFlashdata('pesan', "<div class='alert alert-warning col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/home/menu');
	}

	public function delete_barang($id)
	{
		$pesan = $this->UserViewModel->hapus_barang($id);
		session()->setFlashdata('pesan', "<div class='alert alert-warning col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/home/barang');
	}

	public function add_keranjang($id)
	{
		$user = session()->get('user');

		// dd($user);
		$data = [
			'id_barang' => $id,
			'id_users' => $user['data_user']['id']
		];
		$pesan = $this->UserViewModel->tambah_keranjang($data);
		session()->setFlashdata('pesan', "<div class='alert alert-warning col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/posuser');
	}

	public function pesan()
	{
		$user = session()->get('user');

		// dd($user);
		$data = [
			'id_barang' => $this->request->getVar('id_barang'),
			'id_users' => $user['data_user']['id'],
			'nama' => $user['data_user']['name'],
			'alamat' => $this->request->getVar('alamat'),
			'no_phone' => $this->request->getVar('no_hp'),
			'stts' => "Belum di bayar",
			'jumlah' => $this->request->getVar('jumlah'),
		];
		$pesan = $this->UserViewModel->bayar($data);
		session()->setFlashdata('pesan', "<div class='alert alert-warning col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/posuser');
	}

	public function setujui($id)
	{

		$pesan = $this->UserViewModel->setujui_add($id);
		session()->setFlashdata('pesan', "<div class='alert alert-success col-lg-12' role='alert'>$pesan</div>");
		return redirect()->to('/home/pesanan');
	}
}
