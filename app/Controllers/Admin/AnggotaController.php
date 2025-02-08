<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->findAll();
        return view('anggota/index', $data);
    }

    public function tambah()
    {
        return view('anggota/tambah');
    }

    public function simpan()
    {
        $model = new AnggotaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jabatan' => $this->request->getPost('jabatan'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];
        $model->save($data);
        return redirect()->to('/anggota');
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->find($id);
        return view('anggota/edit', $data);
    }

    public function update($id)
    {
        $model = new AnggotaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jabatan' => $this->request->getPost('jabatan'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];
        $model->update($id, $data);
        return redirect()->to('/anggota');
    }
}
