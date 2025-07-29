<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class ProfilController extends BaseController
{
    public function index()
    {
        $model = new PenggunaModel();
        $data['pengguna'] = $model->find(session()->get('id_pengguna'));
        return view('users/profil_user/profil-pengguna', $data);
    }

    public function updateProfile()
    {
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $id = session()->get('id_pengguna');
        if (!$id) {
            return redirect()->to('/profil-pengguna')->with('error', 'User tidak ditemukan.');
        }
        $model = new PenggunaModel();
        $model->update($id, [
            'nama' => $nama,
            'email' => $email
        ]);
        // Update session jika perlu
        session()->set('nama', $nama);
        session()->set('email', $email);
        return redirect()->to('/profil-pengguna')->with('success', 'Profil berhasil diperbarui.');
    }

    public function changePassword()
    {
        $current = $this->request->getPost('password_lama');
        $new = $this->request->getPost('password_baru');
        $confirm = $this->request->getPost('konfirmasi_password');

        // Validasi sederhana
        if ($new !== $confirm) {
            return redirect()->to('/profil-pengguna')->with('error', 'Password baru tidak cocok.');
        }

        // Lanjutkan update password...

        return redirect()->to('/profil-pengguna')->with('success', 'Password berhasil diubah.');
    }
}
