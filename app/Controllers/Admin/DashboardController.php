<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index(): string
    {
        // Ambil data user login dari session (contoh: anggota)
        $user = [
            'id' => session()->get('id_anggota') ?? session()->get('id_admin'),
            'nama' => session()->get('nama'),
            'foto' => session()->get('foto'),
            'jabatan' => session()->get('jabatan'),
            'email' => session()->get('email'),
        ];

        // Model
        $anggotaModel = new \App\Models\AnggotaModel();
        $penggunaModel = new \App\Models\PenggunaModel();
        $laporanModel = new \App\Models\LaporanModel();

        // Statistik
        $totalAnggota = $anggotaModel->countAllResults();
        $totalPengguna = $penggunaModel->countAllResults();
        $laporanProses = $laporanModel->where(['jenis' => 'laporan', 'status' => 'proses'])->countAllResults();
        $laporanSelesai = $laporanModel->where(['jenis' => 'laporan', 'status' => 'selesai'])->countAllResults();
        $aspirasiProses = $laporanModel->where(['jenis' => 'aspirasi', 'status' => 'proses'])->countAllResults();
        $aspirasiSelesai = $laporanModel->where(['jenis' => 'aspirasi', 'status' => 'selesai'])->countAllResults();

        $data = [
            'title' => 'Dashboard',
            'user' => $user,
            'totalAnggota' => $totalAnggota,
            'totalPengguna' => $totalPengguna,
            'laporanProses' => $laporanProses,
            'laporanSelesai' => $laporanSelesai,
            'aspirasiProses' => $aspirasiProses,
            'aspirasiSelesai' => $aspirasiSelesai,
        ];
        return view('admin/dashboard/dashboard', $data);
    }
}
