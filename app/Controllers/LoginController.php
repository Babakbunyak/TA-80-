<?php

namespace App\Controllers;

use CodeIgniter\Session\Session;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\PenggunaModel;
use App\Models\AnggotaModel;

class LoginController extends BaseController
{

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

        if (!$this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]'
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = $penggunaModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $session->set([
                    'logged_in' => TRUE,
                    'email' => $email,
                    'role' => 'pengguna'
                ]);

                return redirect()->to('/laporan/laporan');
            } else {
                return redirect()->back()->with('error', 'email atau password salah!');
            }
        } else {
            $data = $anggotaModel->where('email', $email)->first();

            if ($data) {
                $pass = $data['password'];
                $verify_pass = password_verify($password, $pass);

                if ($verify_pass) {
                    $session->set([
                        'logged_in' => TRUE,
                        'email' => $email,
                        'role' => 'anggota'
                    ]);

                    return redirect()->to('/dashboard');
                } else {
                    return redirect()->back()->with('error', 'email atau password salah!');
                }
            } else {
                return redirect()->back()->with('error', 'email atau password salah!');
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
