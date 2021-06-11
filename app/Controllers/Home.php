<?php

namespace App\Controllers;

use App\Models\UserViewModel;

class Home extends BaseController
{
	public function __construct()
	{

		$this->UserViewModel = new UserViewModel();
	}

	public function index()
	{
		if (session()->get('stts') != "ADMIN") {
			return redirect()->to('PosUser');
		}
		return view('conten/home');
	}

	public function menu()
	{
		if (session()->get('stts') != "ADMIN") {
			return redirect()->to('PosUser');
		}

		$data = [
			'title' => "Menu User",
			'menu' => $this->UserViewModel->get_menu()
		];
		// dd($data);
		return view('conten/v_menu', $data);
	}

	public function barang()
	{
		if (session()->get('stts') != "ADMIN") {
			return redirect()->to('PosUser');
		}

		$data = [
			'title' => "Stok Barang",
			'barang' => $this->UserViewModel->get_barang(),
			'kategori' => $this->UserViewModel->get_kategori(),
		];
		// dd($data);
		return view('conten/v_barang', $data);
	}

	public function pesanan()
	{
		if (session()->get('stts') != "ADMIN") {
			return redirect()->to('PosUser');
		}

		$data = [
			'title' => "pesanan user",
			'keranjang' => $this->UserViewModel->getPesananAll(),
		];
		// dd($data);
		return view('conten/pesanan', $data);
	}
}
