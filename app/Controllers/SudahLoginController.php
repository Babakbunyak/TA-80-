<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BeritaModel;
use App\Models\DokumentasiModel;

class SudahLoginController extends BaseController
{
    public function sudah_login()
    {
        $dokumentasiModel = new DokumentasiModel();
        $beritaModel = new BeritaModel();

        $data['dokumentasi'] = $dokumentasiModel->getDokumentasiTerbaru(3);
        $data['berita'] = $beritaModel->getBeritaTerbaru(3);
        return view('users/user_login/sudah_login', $data);
    }

    public function detail($id)
    {
        $model = new BeritaModel();
        $data['berita'] = $model->find($id);
        return view('berita/detail', $data);
    }
}
