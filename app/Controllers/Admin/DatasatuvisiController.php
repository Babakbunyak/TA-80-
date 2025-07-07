<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;
use App\Models\LaporanModel;


class DataSatuvisiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Aspirasi',
        ];
        $model = new LaporanModel();
        $data['laporan'] = $model->where('jenis', 'aspirasi')->findAll();
        return view('admin\dashboard\data_satuvisi\index', $data);
    }

    public function detail($id_laporan)
    {
        $model = new LaporanModel();
        $data['laporan'] = $model->find($id_laporan);
        return view('admin\dashboard\data_satuvisi\index', $data);
    }
}
