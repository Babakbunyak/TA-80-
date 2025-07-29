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
        return view('admin/dashboard/anggota/list-anggota', $data);
    }

    public function tambah()
    {
        return view('admin/dashboard/anggota/form-anggota');
    }

    public function simpan()
    {
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
            'no_ktp' => $this->request->getPost('no_ktp'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'foto' => $namaFoto,
            'jabatan' => $this->request->getPost('jabatan'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'status_anggota' => $this->request->getPost('status_anggota'),
        ];
        $model->save($data);

        session()->setFlashdata('success', 'Data anggota berhasil disimpan.');
        return redirect()->to(base_url('anggota'));
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->find($id);
        return view('admin/dashboard/anggota/form-anggota', $data);
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

        $password = $this->request->getPost('password');
        if (!empty($password) && strlen($password) < 8) {
            return redirect()->back()->withInput()->with('error', 'Password minimal 8 karakter.');
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
            'status_anggota' => $this->request->getPost('status_anggota'),
        ];

        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $model->update($id, $data);

        session()->setFlashdata('success', 'Data anggota berhasil diperbarui.');
        return redirect()->to(base_url('anggota'));
    }

    public function hapus($id)
    {
        $model = new AnggotaModel();
        $model->delete($id);
        session()->setFlashdata('success', 'Data anggota berhasil dihapus.');
        return redirect()->to(base_url('admin/anggota'));
    }
}
