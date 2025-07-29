<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DokumentasiModel;

class UpdocController extends BaseController
{
    public function uploaddoc()
    {
        $data = [
            'title' => 'Upload Dokumentasi'
        ];
        return view('admin/dashboard/dokumentasi-upload/form-dokumentasi', $data);
    }

    public function listdoc()
    {
        $model = new DokumentasiModel();
        $data['dokumentasi'] = $model->findAll();
        return view('admin/dashboard/dokumentasi-upload/list-dokumentasi', $data);
    }

    public function upload()
    {
        $judul = $this->request->getPost('judul');
        $dokumentasi = $this->request->getPost('dokumentasi');
        $image = $this->request->getFile('image');
        $id_anggota = session()->get('id_anggota');

        if (!$id_anggota) {
            return redirect()->back()->with('error', 'Anda belum login.');
        }

        if (!$image) {
            return redirect()->back()->with('error', 'File gambar tidak ditemukan!');
        }

        if ($dokumentasi && $image->isValid() && !$image->hasMoved()) {
            $nama_image = $image->getRandomName();
            $image->move('uploads/dokumentasi', $nama_image);

            $model = new DokumentasiModel();
            $data = [
                'judul' => $judul,
                'deskripsi' => $dokumentasi,
                'image' => $nama_image,
                'id_anggota' => $id_anggota,
                'tanggal' => date('Y-m-d'),
            ];

            if ($model->insert($data)) {
                return redirect()->to('/admin/upload_dokumentasi')->with('sukses', 'Dokumentasi berhasil diupload!');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan dokumentasi!');
            }
        }

        return redirect()->back()->with('error', 'Dokumen tidak valid!');
    }
}
