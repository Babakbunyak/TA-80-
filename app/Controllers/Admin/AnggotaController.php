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
        if (!$this->validate([
            'nama' => 'required|min_length[3]',
            'alamat' => 'required',
            'jabatan' => 'required',
            'email' => 'required|valid_email',
            'no_telp' => 'required|numeric',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model = new AnggotaModel();

        $fileFoto = $this->request->getFile('foto');
        $folderPath = 'uploads/foto';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move($folderPath, $namaFoto);
        } else {
            $namaFoto = 'default.png';
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'foto' => $namaFoto,
            'jabatan' => $this->request->getPost('jabatan'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];
        $model->save($data);

        session()->setFlashdata('success', 'Data anggota berhasil disimpan.');
        return redirect()->to(base_url('anggota'));
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->find($id);
        return view('anggota/edit', $data); // ✅ perubahan: ganti \ dengan /
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => 'required|min_length[3]',
            'alamat' => 'required',
            'jabatan' => 'required',
            'email' => 'required|valid_email',
            'no_telp' => 'required|numeric',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model = new AnggotaModel();

        $fileFoto = $this->request->getFile('foto');
        $folderPath = 'uploads/foto';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $anggota = $model->find($id);
        $namaFoto = $anggota['foto'] ?? 'default.png';

        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $namaFotoBaru = $fileFoto->getRandomName();
            $fileFoto->move($folderPath, $namaFotoBaru);
            $namaFoto = $namaFotoBaru;
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'foto' => $namaFoto,
            'jabatan' => $this->request->getPost('jabatan'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];
        $model->update($id, $data);

        session()->setFlashdata('success', 'Data anggota berhasil diperbarui.');
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
