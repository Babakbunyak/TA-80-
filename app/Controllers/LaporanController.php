<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanModel;
use App\Models\AspirasiModel;

class LaporanController extends BaseController
{
    public function laporan()
    {
        return view('Laporan/laporan'); // pastikan file view ini ada di /app/Views/Laporan/laporan.php
    }

    public function kirimAspirasi()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required',
            'email' => 'required|valid_email',
            'teks_aspirasi' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/laporan')->withInput()->with('error', 'Validasi aspirasi gagal!');
        }

        $laporanModel = new LaporanModel();
        $id_pengguna = session()->get('id_pengguna') ?? null;

        $dataAspirasi = [
            'id_pengguna'   => $id_pengguna,
            'jenis'         => 'aspirasi',
            'judul'         => null,
            'lok_kejadian'  => null,
            'objek'         => null,
            'text_laporan'  => $this->request->getPost('teks_aspirasi'),
            'harapan'       => null,
            'tanggal_dibuat' => date('Y-m-d H:i:s'),
            'nama_pelapor'  => $this->request->getPost('nama'),
            'email'         => $this->request->getPost('email'),
            'status'        => 'baru',
            'created_at'    => date('Y-m-d H:i:s'),
        ];

        $laporanModel->save($dataAspirasi);

        return redirect()->to('/laporan')->with('sukses', 'Aspirasi berhasil dikirim!');
    }

    public function kirimLaporan()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'judul' => 'required',
            'lok_kejadian' => 'required',
            'objek' => 'required',
            'text_laporan' => 'required',
            'tanggal_dibuat' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/laporan')->withInput()->with('error', 'Validasi laporan gagal!');
        }

        $laporanModel = new LaporanModel();

        // Cek apakah user login
        $id_pengguna = session()->get('id_pengguna') ?? null;

        $dataLaporan = [
            'id_pengguna'   => $id_pengguna,
            'jenis'         => $this->request->getPost('jenis'), // misalnya 'laporan' atau 'aspirasi'
            'judul'         => $this->request->getPost('judul'),
            'lok_kejadian'  => $this->request->getPost('lok_kejadian'),
            'objek'        => $this->request->getPost('objek'),
            'text_laporan'  => $this->request->getPost('text_laporan'),
            'harapan'       => $this->request->getPost('harapan'),
            'tanggal_dibuat' => $this->request->getPost('tanggal_dibuat'),
            'nama_pelapor'  => $this->request->getPost('nama_pelapor') ?: session()->get('nama') // ambil nama dari session jika tidak diisi
        ];

        $laporanModel->save($dataLaporan);

        return redirect()->to('/laporan')->with('sukses', 'Laporan berhasil dikirim!');
    }
}
