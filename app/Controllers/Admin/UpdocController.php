<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;
use App\Models\DokumentasiModel;

class UpdocController extends BaseController
{
    public function uploaddoc()
    {
        $data = [
            'title' => 'Upload Dokumentasi',
            //'data_satuvisi' => $this->SatuvisiModel->findAll()

        ];
        return view('admin\dashboard\upload-doc\uploaddoc', $data);
    }

    public function upload()
    {
        $judul = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');
        $dokumen = $this->request->getFile('dokumen');

        if ($dokumen->isValid()) {
            $nama_dokumen = $dokumen->getName();
            $dokumen->move('uploads/dokumentasi', $nama_dokumen);

            $model = new DokumentasiModel();
            $data = [
                'judul' => $judul,
                'isi' => $isi,
                'dokumen' => $nama_dokumen,
            ];

            if ($model->insert($data)) {
                return redirect()->to('/admin/upload_dokumentasi')->with('sukses', 'Dokumentasi berhasil diupload!');
            } else {
                return redirect()->back()->with('error', 'Gagal mengupload dokumentasi!');
            }
        } else {
            return redirect()->back()->with('error', 'Dokumen tidak valid!');
        }
    }
}
