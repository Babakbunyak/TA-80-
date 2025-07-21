<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function anggota()
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->findAll();
        return view('admin/dashboard/anggota/anggota', $data); // ✅ perubahan: ganti \ dengan /
    }

    public function tambah()
    {
        return view('admin/dashboard/anggota/tambah'); // ✅ perubahan: ganti \ dengan /
    }

    public function simpan()
    {
        // ✅ perubahan: tambah validasi input
        if (!$this->validate([
            'nama' => 'required|min_length[3]',
            'alamat' => 'required',
            'jabatan' => 'required',
            'email' => 'required|valid_email',
            'no_telp' => 'required|numeric',
            'password' => 'required|min_length[8]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model = new AnggotaModel();

        // ✅ perubahan: perbaiki struktur data
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jabatan' => $this->request->getPost('jabatan'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];
        $model->save($data);

        // ✅ perubahan: tambah flash message
        session()->setFlashdata('success', 'Data anggota berhasil disimpan.');

        // ✅ perubahan: gunakan base_url() untuk redirect
        return redirect()->to(base_url('admin/anggota'));
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->find($id);
        return view('anggota/edit', $data); // ✅ perubahan: ganti \ dengan /
    }

    public function update($id)
    {
        // ✅ perubahan: tambah validasi input
        if (!$this->validate([
            'nama' => 'required|min_length[3]',
            'alamat' => 'required',
            'jabatan' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
            'no_telp' => 'required|numeric',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model = new AnggotaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jabatan' => $this->request->getPost('jabatan'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];
        $model->update($id, $data);

        // ✅ perubahan: tambah flash message
        session()->setFlashdata('success', 'Data anggota berhasil diperbarui.');

        // ✅ perubahan: gunakan base_url() untuk redirect
        return redirect()->to(base_url('admin/anggota'));
    }

    public function hapus($id)
    {
        $model = new AnggotaModel();
        $model->delete($id);
        session()->setFlashdata('success', 'Data anggota berhasil dihapus.');
        return redirect()->to(base_url('admin/anggota'));
    }
}
