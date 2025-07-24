<?php

namespace App\Libraries;

use App\Models\PenggunaModel;
use App\Models\AnggotaModel;

class AuthLibrary
{

    private $db;
    private $msg;
    private $request;

    protected $penggunaModel;
    protected $anggotaModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
        $this->penggunaModel = new PenggunaModel();
        $this->anggotaModel = new AnggotaModel();
    }

    private function set_msg($msg)
    {
        $this->msg .= $msg . nl2br("\n");
    }

    function get_msg()
    {
        return $this->msg;
    }

    function pengguna($email, $password)
    {
        // Cek di tabel pengguna
        if ((strlen($email) > 0) and (strlen($password) > 0)) {
            $model = new PenggunaModel();
            $pengguna = $model->get_login($email, $password);

            if ($pengguna !== null) {
                $session = session();
                $session->set([
                    'id_pengguna' => $pengguna['id_pengguna'],
                    'nama'        => $pengguna['nama'],
                    'email'       => $pengguna['email'],
                    'role'        => 'pengguna',
                    'logged_in'   => true
                ]);
            }
        }
        return false;
    }

    function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth/login');
    }

    function is_logged_in()
    {
        $session = session();
        if ($session->get('logged_in')) {
            return true;
        }
        return false;
    }
}
