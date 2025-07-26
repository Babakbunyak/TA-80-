<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;
use App\Models\LaporanModel;
use Dompdf\Dompdf;

require_once(ROOTPATH . 'vendor/autoload.php');


class DatasatuvisiController2 extends BaseController
{
    public function index2()
    {
        $data = [
            'title' => 'Data Laporan',
        ];
        $model = new LaporanModel();
        $data['laporan'] = $model->where('jenis', 'laporan')->findAll();
        return view('admin\dashboard\data\index2', $data);
    }
    public function detail($id)
    {
        $model = new LaporanModel();
        $data['laporan'] = $model->find($id);
        return view('admin/dashboard/data/detail_laporan', $data);
    }
    public function hapus($id_laporan)
    {
        $model = new LaporanModel();
        $laporan = $model->find($id_laporan);
        if ($laporan) {
            $model->delete($id_laporan);
            return redirect()->to(base_url('admin/dashboard/data/index2'))->with('sukses', 'Laporan berhasil dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data laporan tidak ditemukan!');
        }
    }
    public function printpdf($id_laporan = null)
    {
        $model = new LaporanModel();
        if ($id_laporan) {
            $laporan = $model->find($id_laporan);
            if (!$laporan) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Laporan tidak ditemukan');
            }
            $data['laporan'] = [$laporan];
        } else {
            $data['laporan'] = $model->where('jenis', 'laporan')->findAll();
        }
        $html = view('admin/dashboard/data/pdf_laporan', $data);
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('data_laporan.pdf', ['Attachment' => false]);
        exit;
    }
}
