<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserViewModel;

class PosUser extends BaseController
{

	public function __construct()
	{

		$this->UserViewModel = new UserViewModel();
	}

	public function index($id = 0)
	{
		$data = [
			'title' => "Stok Barang",
			'barang' => $this->UserViewModel->get_barang($id),
			'kategori' => $this->UserViewModel->get_kategori(),
		];

		return view('pos/toko', $data);
	}

	public function keranjang()
	{
		$data = [
			'title' => "Stok Barang",
			'kategori' => $this->UserViewModel->get_kategori(),
			'keranjang' => $this->UserViewModel->get_keranjang(),
		];
		// dd($data);
		return view('pos/keranjang', $data);
	}

	public function cekout($id)
	{
		$data = [
			'title' => "Stok Barang",
			'kategori' => $this->UserViewModel->get_kategori(),
			'barang' => $this->UserViewModel->getOneBarang($id),
			'id_keranjang' => $id
		];
		// dd($data);

		// dd($data);
		return view('pos/cekout', $data);
	}

	public function pesanan()
	{
		$data = [
			'title' => "Stok Barang",
			'kategori' => $this->UserViewModel->get_kategori(),
			'keranjang' => $this->UserViewModel->getPesanan(),

		];
		// dd($data);

		return view('pos/pesanan', $data);
	}
}
