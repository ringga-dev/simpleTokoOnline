<?php

namespace App\Models;

use CodeIgniter\Model;

class UserViewModel extends Model
{
	public function save_user($data)
	{

		$user_data = [
			'email' => $data['email'],
			'password' => $data['pass'],
			'name' => $data['name'],
			'image' => 'user.jpg',
			'no_phone' => 'data belum lengkap',
		];
		$this->db->table('admin')->insert($user_data);

		return "Berhasil mendaftar, silahkan login..!";
	}

	public function save_user_pos($data)
	{

		$user_data = [
			'email' => $data['email'],
			'password' => $data['pass'],
			'name' => $data['name'],
			'image' => 'user.jpg',
			'no_phone' => 'data belum lengkap',
		];
		$this->db->table('users')->insert($user_data);

		return "Berhasil mendaftar, silahkan login..!";
	}

	public function login_user($email, $password)
	{
		$data = $this->db->table('admin')->where(['email' => $email])->get()->getRowArray();
		$data2 = $this->db->table('users')->where(['email' => $email])->get()->getRowArray();
		if ($data != null) {
			if (password_verify($password, $data['password'])) {
				$user = [
					'pesan' => 'login berhasil',
					'stts' => true,
					'pos' => "ADMIN",
					'data_user' => $data
				];
			} else {
				$user = [
					'pesan' => 'Password user salah...',
					'stts' => false
				];
			}
		} elseif ($data2 != null) {
			if (password_verify($password, $data2['password'])) {
				$user = [
					'pesan' => 'login berhasil',
					'stts' => true,
					'pos' => "USER",
					'data_user' => $data2
				];
			} else {
				$user = [
					'pesan' => 'Password user salah...',
					'stts' => false
				];
			}
		} else {
			$user = [
				'pesan' => 'Akun tidak ditemukan mohon di periksa lagi...',
				'stts' => false
			];
		}
		return $user;
	}


	public function get_menu()
	{
		$data = [
			'list_menu' => $this->db->table('menu')
				->get()->getResultArray(),

			'list_sub_menu' =>  $this->db->table('sub_menu')
				->select('sub_menu.id,sub_menu.name_sub_menu,sub_menu.url,sub_menu.url, menu.name_menu')
				->join('menu', 'menu.id = sub_menu.id_menu')
				->get()->getResultArray()
		];

		return $data;
	}

	public function tambah_menu($data)
	{
		$data_cek = $this->db->table('menu')->where(['name_menu' => $data['name_menu']])->get()->getRowArray();
		if ($data_cek == null) {
			$this->db->table('menu')->insert($data);
			$pesan = 'berhasil di simpan ya....';
		} else {
			$pesan = 'Kayaknya menu sudah ada? coba menu lain....';
		}
		return $pesan;
	}

	public function hapus_menu($id)
	{

		$this->db->table('menu')->where(['id' => $id])->delete();
		$this->db->table('menu')->where(['id_menu' => $id])->delete();
		$pesan = 'data sudah kamu hapus....';

		return $pesan;
	}

	public function tambah_submenu($data)
	{
		$data_cek = $this->db->table('sub_menu')->where(['name_sub_menu' => $data['name_sub_menu']])->get()->getRowArray();
		if ($data_cek == null) {
			$this->db->table('sub_menu')->insert($data);
			$pesan = 'berhasil di simpan ya....';
		} else {
			$pesan = 'Kayaknya menu sudah ada? coba menu lain....';
		}
		return $pesan;
	}

	public function hapus_submenu($id)
	{

		$this->db->table('sub_menu')->where(['id' => $id])->delete();
		$pesan = 'data sudah kamu hapus....';

		return $pesan;
	}

	public function get_barang($id = 0)
	{
		if ($id != 0) {
			return $this->db->table('barang')
				->select('barang.id,barang.nama_barang,barang.harga,barang.deskripsi, barang.image, kategori.nama_kategori')
				->join('kategori', 'barang.id_kategori = kategori.id')
				->where(['barang.id_kategori' => $id])
				->get()->getResultArray();
		} else {


			return $this->db->table('barang')
				->select('barang.id,barang.nama_barang,barang.harga,barang.deskripsi, barang.image, kategori.nama_kategori')
				->join('kategori', 'barang.id_kategori = kategori.id')
				->get()->getResultArray();
		}
	}

	public function get_kategori()
	{
		return $this->db->table('kategori')
			->get()->getResultArray();
	}

	public function tambah_kategori($data)
	{
		$data_cek = $this->db->table('kategori')->where(['nama_kategori' => $data['nama_kategori']])->get()->getRowArray();
		if ($data_cek == null) {
			$this->db->table('kategori')->insert($data);
			$pesan = 'berhasil di simpan ya....';
		} else {
			$pesan = 'Kayaknya menu sudah ada? coba menu lain....';
		}
		return $pesan;
	}

	public function tambah_barang($data)
	{

		$this->db->table('barang')->insert($data);
		$pesan = 'berhasil di simpan ya....';

		return $pesan;
	}

	public function tambah_keranjang($data)
	{
		$this->db->table('keranjang')->insert($data);
		$pesan = 'berhasil di simpan ya....';

		return $pesan;
	}

	public function hapus_barang($id)
	{
		$barang = $this->db->table('barang')->where(['id' => $id])->get()->getRowArray();

		$path = './assets/foto_barang/';
		unlink($path . $barang['image']);
		$this->db->table('barang')->where(['id' => $id])->delete();
		$pesan = 'data sudah kamu hapus....';

		return $pesan;
	}

	public function get_keranjang()
	{
		$user = session()->get('user');
		$id_users = $user['data_user']['id'];

		return $this->db->table('keranjang')
			->select('keranjang.*,barang.nama_barang,barang.harga,barang.deskripsi, barang.image')
			->join('barang', 'barang.id = keranjang.id_barang')
			->where(['keranjang.id_users' => $id_users])
			->get()->getResultArray();
	}

	public function getOneBarang($id)
	{
		$user = session()->get('user');
		$id_users = $user['data_user']['id'];

		return $this->db->table('keranjang')
			->select('keranjang.*,barang.nama_barang,barang.harga,barang.deskripsi, barang.image')
			->join('barang', 'barang.id = keranjang.id_barang')
			->where(['keranjang.id_users' => $id_users, 'keranjang.id' => $id])
			->get()->getRowArray();
	}

	public function bayar($data)
	{
		$this->db->table('pesanan')->insert($data);
		$pesan = 'berhasil di simpan ya....';

		return $pesan;
	}

	public function getPesanan()
	{
		$user = session()->get('user');
		$id_users = $user['data_user']['id'];

		return $this->db->table('pesanan')
			->select('pesanan.*,barang.nama_barang,barang.harga,barang.deskripsi, barang.image')
			->join('barang', 'barang.id = pesanan.id_barang')
			->where(['pesanan.id_users' => $id_users])
			->get()->getResultArray();
	}
	public function getPesananAll()
	{
		return $this->db->table('pesanan')
			->select('pesanan.*,barang.nama_barang,barang.harga,barang.deskripsi, barang.image')
			->join('barang', 'barang.id = pesanan.id_barang')
			->get()->getResultArray();
	}

	public function setujui_add($id)
	{

		$this->db->table('pesanan')
			->where(['id' => $id])
			->update(['stts' => "Dikirim"]);

		$pesan = 'berhasil di simpan ya....';

		return $pesan;
	}
}
