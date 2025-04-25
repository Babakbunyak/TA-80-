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

        helper(['form', 'url']);

        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama_aspirasi' => 'required',
            'email_aspirasi' => 'required|valid_email',
            'aspirasi' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/laporan')->withInput()->with('error', 'Validasi aspirasi gagal!');
        }

        $aspirasiModel = new AspirasiModel();
        $dataAspirasi = [
            'nama_aspirasi' => $this->request->getPost('nama'),
            'email_asirasi' => $this->request->getPost('email'),
            'aspirasi' => $this->request->getPost('text_aspirasi'),
        ];

        $aspirasiModel->save($dataAspirasi);

        return redirect()->to('/laporan')->with('sukses', 'Aspirasi berhasil dikirim!');
    }

    public function kirimLaporan()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama_laporan' => 'required',
            'email_laporan' => 'required|valid_email',
            'laporan' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/laporan')->withInput()->with('error', 'Validasi laporan gagal!');
        }

        $laporanModel = new LaporanModel();
        $dataLaporan = [
            'nama_laporan' => $this->request->getPost('nama'),
            'email_laporan' => $this->request->getPost('email'),
            'laporan' => $this->request->getPost('text_laporan'),
        ];

        $laporanModel->save($dataLaporan);

        return redirect()->to('/laporan')->with('sukses', 'Laporan berhasil dikirim!');
    }
}
