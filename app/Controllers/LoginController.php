<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;
use App\Models\AnggotaModel;

use App\Libraries\AuthLibrary;

class LoginController extends BaseController
{
    private $msg;
    private $authLibrary;

    public function __construct()
    {
        $this->authLibrary = new AuthLibrary();
    }

    private function display_msg($msg)
    {
        $this->msg .= $msg . nl2br("\n");
    }

    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        helper(['form', 'url']);
        $session = session();

        $penggunaModel = new PenggunaModel();
        $anggotaModel = new AnggotaModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Login default admin (bypass validasi email format)
        if ($email === 'admin' && $password === 'admin') {
            $session->set([
                'id_admin'   => 1,
                'nama'      => 'Administrator',
                'email'     => 'admin',
                'role'      => 'admin',
                'logged_in' => true
            ]);
            return redirect()->to('/dashboard');
        }

        // Validasi form login (user biasa dan anggota harus email valid)
        if ($email !== 'admin') {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return redirect()->back()->with('error', 'Email atau password salah!');
            }
        }
        if (strlen($password) < 4) {
            return redirect()->back()->with('error', 'Email atau password salah!');
        }

        // Cek di tabel pengguna
        $data = $penggunaModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            if (password_verify($password, $pass)) {
                // Simpan semua info penting ke session
                $session->set([
                    'id_pengguna'   => $data['id_pengguna'],
                    'nama'    => $data['nama'],
                    'email'         => $data['email'],
                    'role'          => 'pengguna',
                    'logged_in'     => true
                ]);

                return redirect()->to('/laporan/laporan');
            } else {
                return redirect()->back()->with('error', 'Email atau password salah!');
            }
        }

        // Cek di tabel anggota jika tidak ditemukan di pengguna
        $dataAnggota = $anggotaModel->where('email', $email)->first();
        //if ($dataAnggota) {
        //    $pass = $dataAnggota['password'];
        // Debug:
        //die('Input: ' . $password . ' | DB: ' . $pass . ' | Verify: ' . (password_verify($password, $pass) ? 'ok' : 'fail'));
        //    if (password_verify($password, $pass)) {
        // ...existing code...
        //   }
        //}
        if ($dataAnggota) {
            $pass = $dataAnggota['password'];
            if (password_verify($password, $pass)) {
                $session->set([
                    'id_anggota'    => $dataAnggota['id_anggota'],
                    'nama'          => $dataAnggota['nama'],
                    'email'         => $dataAnggota['email'],
                    'foto'          => $dataAnggota['foto'],
                    'jabatan'      => $dataAnggota['jabatan'],
                    'role'          => 'anggota',
                    'logged_in'     => true
                ]);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Email atau password salah!');
            }
        }

        // Email tidak ditemukan di kedua tabel
        return redirect()->back()->with('error', 'Email atau password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth');
    }
}
