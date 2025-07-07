<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BeritaModel;

class UpberitaController extends BaseController
{
    public function uploadberita()
    {
        $data = [
            'title' => 'Upload Berita',
        ];

        return view('admin/dashboard/upload_berita/uploadberita', $data);
    }

    public function upload()
    {
        $judul       = $this->request->getPost('judul');
        $deskripsi = $this->request->getPost('deskripsi'); // input name dari form
        $foto        = $this->request->getFile('foto');

        // Ambil id_pengguna dan id_anggota dari session
        $id_pengguna = session()->get('id_pengguna');
        $id_anggota = session()->get('id_anggota');

        if (!$id_pengguna) {
            return redirect()->back()->with('error', 'Anda belum login sebagai admin.');
        }

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $nama_foto = $foto->getRandomName();
            $foto->move('uploads/berita', $nama_foto);

            $beritaModel = new BeritaModel();
            $data = [
                'judul'        => $judul,
                'deskripsi'  => $deskripsi,
                'image'         => $nama_foto,
                'id_anggota'     => $id_anggota,
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ];

            if ($beritaModel->insert($data)) {
                $id = $beritaModel->getInsertID();
                return redirect()->to('/admin/berita/detail/' . $id)->with('sukses', 'Berita berhasil diupload!');
            } else {
                return redirect()->back()->with('error', 'Gagal mengupload berita!');
            }
        } else {
            return redirect()->back()->with('error', 'Gambar tidak valid!');
        }
    }

    public function index()
    {
        $beritaModel = new BeritaModel();
        $beritaData = $beritaModel->orderBy('id_berita', 'DESC')->first();
        $berita = [
            'judul' => $beritaData['judul'] ?? '',
            'teks_berita' => $beritaData['deskripsi'] ?? '',
            'foto' => $beritaData['image'] ?? '',
        ];
        $data = [
            'title' => 'Upload Berita',
            'berita' => $berita
        ];
        return view('berita/berita1', $data);
    }

    public function detail($id)
    {
        $beritaModel = new BeritaModel();
        $beritaData = $beritaModel->find($id);
        if (!$beritaData) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Berita tidak ditemukan');
        }
        $berita = [
            'judul' => $beritaData['judul'] ?? '',
            'teks_berita' => $beritaData['deskripsi'] ?? '',
            'foto' => $beritaData['image'] ?? '',
        ];
        $data = [
            'title' => 'Detail Berita',
            'berita' => $berita
        ];
        return view('berita/berita1', $data);
    }
}
