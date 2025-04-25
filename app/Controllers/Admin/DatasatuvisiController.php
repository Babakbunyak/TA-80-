<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;
use App\Models\AspirasiModel;


class DataSatuvisiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Aspirasi',

        ];
        $model = new AspirasiModel();
        $data['aspirasi'] = $model->findAll();
        return view('admin\dashboard\data_satuvisi\index', $data);
    }

    public function detail($id)
    {
        $$model = new AspirasiModel();
        $data['aspirasi'] = $model->find($id);
        return view('admin\dashboard\data_satuvisi\index', $data);
    }
}
