<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DokumentasiModel;

class DokumentasiController extends BaseController
{
    public function dokumentasi()
    {
        $model = new DokumentasiModel();
        $data['dokumentasi'] = $model->getDokumentasiTerbaru(3);
        return view('users/beranda/index', $data);
    }

    public function detail($id)
    {
        $model = new DokumentasiModel();
        $data['dokumentasi'] = $model->find($id);
        return view('dokumentasi/detail-dokumentasi', $data);
    }
}
