<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DokumentasiModel;

class Berita2Controller extends BaseController
{
    public function berita2()
    {
        $model = new DokumentasiModel();
        $data['dokumentasi'] = $model->getDokumentasiTerbaru(3);
        return view('users/beranda/index', $data);
    }

    public function detail($id)
    {
        $model = new DokumentasiModel();
        $data['dokumentasi'] = $model->find($id);
        return view('berita2/berita2', $data);
    }
}
