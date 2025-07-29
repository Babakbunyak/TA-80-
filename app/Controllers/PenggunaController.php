<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class PenggunaController extends BaseController
{
  public function index()
  {
    $model = new PenggunaModel();
    $data['pengguna'] = $model->findAll();
    return view('admin/dashboard/pengguna/list-pengguna', $data);
  }

  public function detail($id)
  {
    $model = new PenggunaModel();
    $data['pengguna'] = $model->find($id);
    return view('admin/dashboard/pengguna/detail-pengguna', $data);
  }
}
