<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
	public function __construct()
	{
	}

	public function registrasi()
	{
		return view('registrasi');
	}

	public function login()
	{
		return view('login');
	}

	public function simpanRegistrasi()
	{
		$data = [
			'nama' => $this->request->getPost('nama'),
			'email' => $this->request->getPost('email'),
			'password' => $this->request->getPost('password'),
			'konfirmasi_password' => $this->request->getPost('konfirm_password')
		];

		$validation = \Config\Services::validation();

		$validation->setRules([
			'nama'				=> 'required',
			'email'				=> 'required|valid_email|is_unique[users.email]',
			'password'			=> 'required|min_length[8]',
			'konfirmasi_password' => 'required|matches[password]'
		]);

		if ($validation->run($data)) {
			$this->model->save([
				'name'				=> $data['nama'],
				'email'				=> $data['email'],
				'password'			=> password_hash($data['password'], PASSWORD_BCRYPT),
				'role'				=> 'siswa'
			]);

			return redirect()->to(base_url('registrasi'))->with('sukses', 'Registrasi berhasil !');
		} else {
			$errorMessages = $validation->getErrors();
			return redirect()->to(base_url('registrasi'))->with('gagal', '$errorMessages');
		}
	}

	public function prosesLogin()
	{
		$users = new User();
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');
		$dataUser = $users->where([
			'email' => $email
		])->first();
		if ($dataUser) {
			if (password_verify($password, $dataUser['password'])) {
				//	session()->set([
				//	'email' => $dataUser->email,
				//	'role'	=> $dataUser->role
				$data = [
					'email' => $dataUser['email'],
					'role' => $dataUser['role'],
				];

				session()->set($data);

				if ($dataUser['role'] == "admin") {
					return redirect()->to(base_url('admin'));
				} else {
					return redirect()->to(base_url('siswa2/home'));
				}
			} else {
				session()->setFlashdata('error', 'Password Salah');
				return redirect()->back();
			}
		} else {
			session()->setFlashdata('error', 'Username & Password Salah');
			return redirect()->back();
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}
}
