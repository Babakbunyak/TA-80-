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
            'nama' => 'required|min_length[3]|max_length[20]',
            'tempat_lahir' => 'required|min_length[3]|max_length[20]',
            //'tanggal_lahir' => 'required|valid_date',
            //'no_ktp' => 'required|numeric',
            'alamat' => 'required|min_length[3]',
            //'no_telp' => 'required|numeric',
            'email' => 'required|valid_email|is_unique[pengguna.email]',
            'password' => 'required|min_length[8]',
            'konfirmasi_password' => 'required|matches[password]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $nama = $this->request->getPost('nama');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $no_ktp = $this->request->getPost('no_ktp');
        $alamat = $this->request->getPost('alamat');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new PenggunaModel();
        $data = [
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $model->save($data);

        return redirect()->to('/auth')->with('success', 'Registrasi berhasil!');
    }
}
