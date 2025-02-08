<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;

use App\Models\BeritaModel;


class UpberitaController extends BaseController
{
    public function uploadberita()
    {
        $data = [
            'title' => 'Upload Berita',
            //'data_satuvisi' => $this->SatuvisiModel->findAll()

        ];
        return view('admin\dashboard\upload_berita\uploadberita', $data);
    }

    public function upload()
    {
        $judul = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');
        $gambar = $this->request->getFile('gambar');

        if ($gambar->isValid()) {
            $nama_gambar = $gambar->getName();
            $gambar->move('uploads/berita', $nama_gambar);

            $model = new BeritaModel();
            $data = [
                'judul' => $judul,
                'isi' => $isi,
                'gambar' => $nama_gambar,
            ];

            if ($model->insert($data)) {
                return redirect()->to('/upload_berita')->with('sukses', 'Berita berhasil diupload!');
            } else {
                return redirect()->back()->with('error', 'Gagal mengupload berita!');
            }
        } else {
            return redirect()->back()->with('error', 'Gambar tidak valid!');
        }
    }
}
