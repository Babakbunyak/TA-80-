<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PenggunaModel;

class RegisterController extends BaseController
{
    public function register()
    {
        return view('register/register');
    }

    public function proses()
    {
        helper(['form', 'url']);

        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama_depan' => 'required|min_length[3]|max_length[20]',
            'nama_belakang' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email|is_unique[pengguna.email]',
            'password' => 'required|min_length[8]',
            'konfirmasi_password' => 'required|matches[password]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new PenggunaModel();
        $data = [
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $model->save($data);

        return redirect()->to('/auth')->with('success', 'Registrasi berhasil!');
    }
}
