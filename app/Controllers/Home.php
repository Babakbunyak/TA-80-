<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponsableInterface;

use app\Models\BeritaModel;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $db = \config\Database::connect();
        if ($db) {
            echo "Koneksi database berhasil!";
        } else {
            echo "Koneksi database gagal!";
        }

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
