<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class ProfilController extends BaseController
{
    public function index()
    {
        $model = new PenggunaModel();
        $data['pengguna'] = $model->find(session()->get('id_pengguna'));
        return view('profil_user/profil', $data);
    }

    public function updateProfile()
    {
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');

        // Di sini kamu bisa simpan ke database
        // Contoh simpan atau validasi

        return redirect()->to('/profil')->with('success', 'Profil berhasil diperbarui.');
    }

    public function changePassword()
    {
        $current = $this->request->getPost('password_lama');
        $new = $this->request->getPost('password_baru');
        $confirm = $this->request->getPost('konfirmasi_password');

        // Validasi sederhana
        if ($new !== $confirm) {
            return redirect()->to('/profil')->with('error', 'Password baru tidak cocok.');
        }

        // Lanjutkan update password...

        return redirect()->to('/profil')->with('success', 'Password berhasil diubah.');
    }
}
