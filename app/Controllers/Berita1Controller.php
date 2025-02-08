<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BeritaModel;

class Berita1Controller extends BaseController
{
    public function berita1()
    {
        $model = new BeritaModel();
        $data['berita'] = $model->getBeritaTerbaru(3);
        return view('berita/index', $data);
    }

    public function detail($id)
    {
        $model = new BeritaModel();
        $data['berita'] = $model->find($id);
        return view('berita/detail', $data);
    }
}
