<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;
use App\Models\LaporanModel;


class AspirasiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Aspirasi',
        ];
        $model = new LaporanModel();
        $data['laporan'] = $model->where('jenis', 'aspirasi')->findAll();
        return view('admin\dashboard\pengguna\aspirasi\detail-aspirasi', $data);
    }

    public function detail($id_laporan)
    {
        $model = new LaporanModel();
        $aspirasi = $model->find($id_laporan);
        if ($aspirasi && $aspirasi['jenis'] === 'aspirasi') {
            // Ambil nama pengguna jika ada
            $nama_pengguna = '-';
            if (!empty($aspirasi['id_pengguna'])) {
                $penggunaModel = new \App\Models\PenggunaModel();
                $pengguna = $penggunaModel->find($aspirasi['id_pengguna']);
                if ($pengguna && isset($pengguna['nama'])) {
                    $nama_pengguna = $pengguna['nama'];
                }
            }
            $aspirasi['nama_pengguna'] = $nama_pengguna;
            return view('admin\dashboard\pengguna\aspirasi\detail-aspirasi', ['aspirasi' => $aspirasi]);
        } else {
            return view('admin\dashboard\pengguna\aspirasi\detail-aspirasi', ['aspirasi' => null]);
        }
    }

    public function updatestatus($id_laporan)
    {
        $model = new LaporanModel();
        $aspirasi = $model->find($id_laporan);
        if ($aspirasi && $aspirasi['jenis'] === 'aspirasi') {
            $status = $this->request->getPost('status');
            if (in_array($status, ['proses', 'selesai'])) {
                $model->update($id_laporan, ['status' => $status]);
                return redirect()->back()->with('sukses', 'Status aspirasi berhasil diubah!');
            } else {
                return redirect()->back()->with('error', 'Status tidak valid!');
            }
        } else {
            return redirect()->back()->with('error', 'Data aspirasi tidak ditemukan!');
        }
    }
}
