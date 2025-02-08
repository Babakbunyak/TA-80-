<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Controller;
use Psr\Log\LoggerInterface;
use App\Models\LaporanModel;
use App\Models\AspirasiModel;

class LaporanController extends BaseController
{
    public function laporan()
    {
        return view('Laporan/laporan');
    }

    public function kirimAspirasi()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama_aspirasi' => 'required',
            'email_aspirasi' => 'required|valid_email',
            'aspirasi' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/aspirasi-laporan')->withInput()->with('error', 'Validasi aspirasi gagal!');
        }

        $aspirasiModel = new AspirasiModel();
        $dataAspirasi = [
            'nama' => $this->request->getPost('nama_aspirasi'),
            'email' => $this->request->getPost('email_aspirasi'),
            'aspirasi' => $this->request->getPost('aspirasi'),
        ];

        $aspirasiModel->save($dataAspirasi);

        return redirect()->to('/aspirasi-laporan')->with('sukses', 'Aspirasi berhasil dikirim!');
    }

    public function kirimLaporan()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama_laporan' => 'required',
            'email_laporan' => 'required|valid_email',
            'laporan' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/aspirasi-laporan')->withInput()->with('error', 'Validasi laporan gagal!');
        }

        $laporanModel = new LaporanModel();
        $dataLaporan = [
            'nama' => $this->request->getPost('nama_laporan'),
            'email' => $this->request->getPost('email_laporan'),
            'laporan' => $this->request->getPost('laporan'),
        ];

        $laporanModel->save($dataLaporan);

        return redirect()->to('/aspirasi-laporan')->with('sukses', 'Laporan berhasil dikirim!');
    }
}
