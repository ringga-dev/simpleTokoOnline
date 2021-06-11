<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserViewModel;

class Auth extends BaseController
{
	public function __construct()
	{
		$this->UserViewModel = new UserViewModel();
	}

	public function login()
	{
		$data = [
			'validation' => \Config\Services::validation()
		];
		session();
		return view('auth/login', $data);
	}

	public function cek_login()
	{
		//view loding web 
		$data['loding_text'] = 'silahkan tunggu';
		// echo view('auth/loding', $data);

		//proses login user in web
		if ($this->validate([
			'email_user' => [
				'label'  => 'Email',
				'rules'  => 'required|valid_email',
				'errors' => [
					'required' => '{field} harus di isi dan tidak boleh kosong',
					'valid_email' => '{field} yang dimasukkan harus valid',

				]
			], 'pass' => [
				'label'  => 'Password',
				'rules'  => 'required|min_length[6]',
				'errors' => [
					'min_length' => '{field} harus memiliki 6 karakter',
					'required' => '{field} harus di isi dan tidak boleh kosong'
				]
			]
		])) {
			// login success

			$email = $this->request->getVar('email_user');
			$pass = $this->request->getVar('pass');



			$user = $this->UserViewModel->login_user($email, $pass);

			if ($user['stts'] == true) {
				if ($user['pos'] != "ADMIN") {
					session()->setFlashdata('pesan', "<div class='alert alert-danger' role='alert'>Anda bukan user ... </div>");
					return redirect()->to(base_url('/auth/login'));
				}
				$data_session = [
					'user'  => $user,
					'logged_in' => TRUE,
					'stts' => "ADMIN"
				];
				session()->set($data_session);
				return redirect()->to(base_url('home'));
			} else {

				$pesan = $user['pesan'];
				session()->setFlashdata('pesan', "<div class='alert alert-danger' role='alert'>$pesan </div>");
				return redirect()->to(base_url('/auth/login'));
			}
		} else {
			$errors = \Config\Services::validation();
			// dd($errors);
			return redirect()->to('/auth/login')->withInput()->with('validation', $errors);
		}
	}

	public function register()
	{
		$data = [
			'validation' => \Config\Services::validation()
		];
		session();
		return view('auth/register', $data);
	}

	public function save_user()
	{
		//view loding web 
		$data['loding_text'] = 'silahkan tunggu';
		// echo view('auth/loding', $data);

		//proses login user in web
		if ($this->validate([
			'email_user' => [
				'label'  => 'Email',
				'rules'  => 'required|is_unique[admin.email]|valid_email',
				'errors' => [
					'required' => '{field} harus di isi dan tidak boleh kosong',
					'is_unique' => '{field} harus unik untuk setiap user',
					'valid_email' => '{field} yang dimasukkan harus valid',

				]
			], 'pass' => [
				'label'  => 'Password',
				'rules'  => 'required|min_length[6]',
				'errors' => [
					'min_length' => '{field} harus memiliki 6 karakter',
					'required' => '{field} harus di isi dan tidak boleh kosong'
				]
			], 'name' => [
				'label'  => 'Name',
				'rules'  => 'required|min_length[6]|is_unique[admin.name]',
				'errors' => [
					'min_length' => '{field} harus memiliki 6 karakter',
					'required' => '{field} harus di isi dan tidak boleh kosong',
					'is_unique' => '{field} harus unik untuk setiap user'
				]
			]
		])) {

			$data = [
				'email' => $this->request->getVar('email_user'),
				'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
				'name' => $this->request->getVar('name')
			];

			$user = $this->UserViewModel->save_user($data);

			$pesan = $user;
			session()->setFlashdata('pesan', "<div class='alert alert-success' role='alert'>$pesan </div>");
			return redirect()->to(base_url('/auth/login'));
		} else {
			$errors = \Config\Services::validation();
			// dd($errors);
			return redirect()->to('/auth/register')->withInput()->with('validation', $errors);
		}
	}


	public function login_user()
	{
		$data = [
			'validation' => \Config\Services::validation()
		];
		session();
		return view('auth/login_user', $data);
	}

	public function cek_login_user()
	{
		//view loding web 
		$data['loding_text'] = 'silahkan tunggu';
		// echo view('auth/loding', $data);

		//proses login user in web
		if ($this->validate([
			'email_user' => [
				'label'  => 'Email',
				'rules'  => 'required|valid_email',
				'errors' => [
					'required' => '{field} harus di isi dan tidak boleh kosong',
					'valid_email' => '{field} yang dimasukkan harus valid',

				]
			], 'pass' => [
				'label'  => 'Password',
				'rules'  => 'required|min_length[6]',
				'errors' => [
					'min_length' => '{field} harus memiliki 6 karakter',
					'required' => '{field} harus di isi dan tidak boleh kosong'
				]
			]
		])) {
			// login success

			$email = $this->request->getVar('email_user');
			$pass = $this->request->getVar('pass');



			$user = $this->UserViewModel->login_user($email, $pass);

			if ($user['stts'] == true) {
				if ($user['pos'] != "USER") {
					session()->setFlashdata('pesan', "<div class='alert alert-danger' role='alert'>Anda bukan user ... </div>");
					return redirect()->to(base_url('/auth/login_user'));
				}

				$data_session = [
					'user'  => $user,
					'logged_in' => TRUE,
					'stts' => "USER"
				];
				session()->set($data_session);
				return redirect()->to(base_url('/PosUser'));
			} else {

				$pesan = $user['pesan'];
				session()->setFlashdata('pesan', "<div class='alert alert-danger' role='alert'>$pesan </div>");
				return redirect()->to(base_url('/auth/login_user'));
			}
		} else {
			$errors = \Config\Services::validation();
			// dd($errors);
			return redirect()->to('/auth/login_user')->withInput()->with('validation', $errors);
		}
	}

	public function register_user()
	{
		$data = [
			'validation' => \Config\Services::validation()
		];
		session();
		return view('auth/register_user', $data);
	}

	public function save_user_pos()
	{
		//view loding web 
		$data['loding_text'] = 'silahkan tunggu';
		// echo view('auth/loding', $data);

		//proses login user in web
		if ($this->validate([
			'email_user' => [
				'label'  => 'Email',
				'rules'  => 'required|is_unique[users.email]|valid_email',
				'errors' => [
					'required' => '{field} harus di isi dan tidak boleh kosong',
					'is_unique' => '{field} harus unik untuk setiap user',
					'valid_email' => '{field} yang dimasukkan harus valid',

				]
			], 'pass' => [
				'label'  => 'Password',
				'rules'  => 'required|min_length[6]',
				'errors' => [
					'min_length' => '{field} harus memiliki 6 karakter',
					'required' => '{field} harus di isi dan tidak boleh kosong'
				]
			], 'name' => [
				'label'  => 'Name',
				'rules'  => 'required|min_length[6]|is_unique[users.name]',
				'errors' => [
					'min_length' => '{field} harus memiliki 6 karakter',
					'required' => '{field} harus di isi dan tidak boleh kosong',
					'is_unique' => '{field} harus unik untuk setiap user'
				]
			]
		])) {

			$data = [
				'email' => $this->request->getVar('email_user'),
				'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
				'name' => $this->request->getVar('name')
			];

			$user = $this->UserViewModel->save_user_pos($data);

			$pesan = $user;
			session()->setFlashdata('pesan', "<div class='alert alert-success' role='alert'>$pesan </div>");
			return redirect()->to(base_url('/auth/login_user'));
		} else {
			$errors = \Config\Services::validation();
			// dd($errors);
			return redirect()->to('/auth/register_user')->withInput()->with('validation', $errors);
		}
	}

	public function logout()
	{
		//view loding web 
		$data['loding_text'] = 'silahkan tunggu';
		// echo view('auth/loding', $data);
		if (session()->get('stts') == "ADMIN") {
			$dataURL = "/auth/login";
		} else {
			$dataURL = "/auth/login_user";
		}
		session()->remove('user');
		session()->remove('stts');
		session()->remove('logged_in');


		session()->setFlashdata('pesan', "<div class='alert alert-danger' role='alert'>Anda berhasil keluar ...</div>");
		return redirect()->to($dataURL);
	}
}
