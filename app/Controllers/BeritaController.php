<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BeritaModel;

class BeritaController extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Upload Berita'];
        return view('berita/list-berita', $data);
    }

    public function tambah()
    {
        $data = ['title' => 'tambah Berita'];
        return view('admin/dashboard/berita-upload/form-berita', $data);
    }

    public function upload()
    {
        $judul       = $this->request->getPost('judul');
        $deskripsi = $this->request->getPost('deskripsi'); // input dari form textarea
        $foto        = $this->request->getFile('foto'); // input dari form type="file"

        // Ambil id_pengguna dari session
        $id_pengguna = session()->get('id_pengguna');
        $id_anggota = session()->get('id_anggota'); // pastikan id_anggota ada di session

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
                'id_anggota'   => $id_anggota,
            ];

            if ($beritaModel->insert($data)) {
                return redirect()->to('/upber')->with('sukses', 'Berita berhasil diupload!');
            } else {
                return redirect()->back()->with('error', 'Gagal mengupload berita!');
            }
        } else {
            return redirect()->back()->with('error', 'Gambar tidak valid!');
        }
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
        return view('berita/berita_detail', $data);
    }
}
