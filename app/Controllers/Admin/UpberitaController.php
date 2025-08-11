<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BeritaModel;

class UpberitaController extends BaseController
{
    public function listberita()
    {
        $beritaModel = new BeritaModel();
        $data = [
            'title' => 'Upload Berita',
            'berita' => $beritaModel->findAll()
        ];
        return view('admin/dashboard/berita-upload/list-berita', $data);
    }

    public function upload()
    {
        $judul = $this->request->getPost('judul');
        $deskripsi = $this->request->getPost('deskripsi');
        $image = $this->request->getFile('image');
        $id_anggota = session()->get('id_anggota');

        if (!$id_anggota) {
            return redirect()->back()->with('error', 'Anda belum login.');
        }

        if ($deskripsi && $image->isValid() && !$image->hasMoved()) {
            $nama_image = $image->getRandomName();
            $image->move('uploads/berita', $nama_image);

            $beritaModel = new BeritaModel();
            $data = [
                'judul'        => $judul,
                'deskripsi'  => $deskripsi,
                'image'         => $nama_image,
                'id_anggota'     => $id_anggota,
                'tanggal'      => date('Y-m-d'),
            ];

            if ($beritaModel->insert($data)) {
                return redirect()->to('/admin/berita')->with('sukses', 'Berita berhasil diupload!');
            } else {
                return redirect()->back()->with('error', 'Gagal mengupload berita!');
            }
        } else {
            return redirect()->back()->with('error', 'Gambar tidak valid!');
        }
    }
    public function edit($id_berita = null)
    {
        $beritaModel = new BeritaModel();
        $berita = null;
        if ($id_berita) {
            $berita = $beritaModel->find($id_berita);
        }
        $data = [
            'title' => $id_berita ? 'Edit Berita' : 'Tambah Berita',
            'berita' => $berita
        ];
        return view('admin/dashboard/berita-upload/form-berita', $data);
    }

    public function update($id_berita)
    {
        $model = new BeritaModel();
        $data = $this->request->getPost();
        $model->update($id_berita, $data);
        return redirect()->to('/admin/dashboard/berita-update/list-berita')->with('sukses', 'Berita berhasil diperbarui!');
    }

    public function index()
    {
        $beritaModel = new BeritaModel();
        $beritaData = $beritaModel->orderBy('id_berita', 'DESC')->first();
        $berita = [
            'judul' => $beritaData['judul'] ?? '',
            'teks_berita' => $beritaData['deskripsi'] ?? '',
            'image' => $beritaData['image'] ?? '',
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

    public function hapus($id)
    {
        $model = new BeritaModel();
        $model->delete($id);
        session()->setFlashdata('success', 'Data anggota berhasil dihapus.');
        return redirect()->to(base_url('admin/berita'));
    }
}
