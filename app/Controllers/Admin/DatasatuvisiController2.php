<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;
use App\Models\LaporanModel;


class DataSatuvisiController2 extends BaseController
{
    public function index2()
    {
        $data = [
            'title' => 'Data Laporan',
        ];
        $model = new LaporanModel();
        $data['laporan'] = $model->findAll();
        return view('admin\dashboard\data\index2', $data);
    }
    public function detail($id)
    {
        $model = new LaporanModel();
        $data['laporan'] = $model->find($id);
        return view('laporan/detail', $data);
    }
}
