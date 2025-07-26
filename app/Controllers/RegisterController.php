<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PenggunaModel;

class RegisterController extends BaseController
{
    public function register()
    {
        return view('register/register');
    }

    public function proses()
    {
        helper(['form', 'url']);

        $validation = \Config\Services::validation();

        $validationMessages = [
            'nama' => [
                'required' => 'Nama wajib diisi.',
                'min_length' => 'Nama minimal 3 karakter.',
                'max_length' => 'Nama maksimal 20 karakter.'
            ],
            'tempat_lahir' => [
                'required' => 'Tempat lahir wajib diisi.',
                'min_length' => 'Tempat lahir minimal 3 karakter.',
                'max_length' => 'Tempat lahir maksimal 20 karakter.'
            ],
            'alamat' => [
                'required' => 'Alamat wajib diisi.',
                'min_length' => 'Alamat minimal 3 karakter.'
            ],
            'email' => [
                'required' => 'Email wajib diisi.',
                'valid_email' => 'Format email tidak valid.',
                'is_unique' => 'Email sudah terdaftar, silakan gunakan email lain.'
            ],
            'password' => [
                'required' => 'Password wajib diisi.',
                'min_length' => 'Password minimal 8 karakter.'
            ],
            'konfirmasi_password' => [
                'required' => 'Konfirmasi password wajib diisi.',
                'matches' => 'Konfirmasi password tidak sama dengan password.'
            ]
        ];

        $validation->setRules([
            'nama' => 'required|min_length[3]|max_length[20]',
            'tempat_lahir' => 'required|min_length[3]|max_length[20]',
            //'tanggal_lahir' => 'required|valid_date',
            //'no_ktp' => 'required|numeric',
            'alamat' => 'required|min_length[3]',
            //'no_telp' => 'required|numeric',
            'email' => 'required|valid_email|is_unique[pengguna.email]',
            'password' => 'required|min_length[8]',
            'konfirmasi_password' => 'required|matches[password]'
        ], $validationMessages);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        $nama = $this->request->getPost('nama');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $no_ktp = $this->request->getPost('no_ktp');
        $alamat = $this->request->getPost('alamat');
        $no_telp = $this->request->getPost('no_telp');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Buat kode verifikasi 4 digit angka
        $verification_code = str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);

        // Simpan data user dan kode ke session, belum ke database
        $data = [
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'is_verified' => 0,
            'verification_code' => $verification_code,
        ];
        session()->set('pending_register', $data);

        // Kirim email verifikasi berupa kode
        $emailService = \Config\Services::email();
        $emailService->setTo($email);
        $emailService->setSubject('Kode Verifikasi Akun Anda');
        $emailService->setMessage('Kode verifikasi akun Anda: <b>' . $verification_code . '</b><br>Silakan masukkan kode ini pada halaman verifikasi.');
        $emailService->send();

        // Simpan email ke session untuk proses verifikasi
        session()->set('email_verifikasi', $email);
        return redirect()->to('/register/verifyinfo');
    }


    public function verifyinfo()
    {
        // Tampilkan form input kode verifikasi
        return view('register/verifyinfo');
    }

    public function verify()
    {
        // Proses input kode verifikasi dari user
        $email = session()->get('email_verifikasi');
        $input_code = $this->request->getPost('kode_verifikasi');
        $pending = session()->get('pending_register');
        if ($pending && $pending['email'] === $email && $pending['verification_code'] === $input_code) {
            // Simpan ke database
            $model = new \App\Models\PenggunaModel();
            $data = $pending;
            $model->save($data);
            session()->remove('pending_register');
            session()->remove('email_verifikasi');
            return view('register/verify_success');
        } else {
            return view('register/verify_failed');
        }
    }
}
