<?php
// Route untuk list data pengguna
$routes->get('pengguna', 'PenggunaController::index');

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// test database
$routes->get('/test', 'Home::index');

// route beranda
$routes->get('/', 'BerandaController::index');

// route admin dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

// route admin data aspirasi
$routes->get('data-aspirasi', 'Admin\AspirasiController::index');

// route admin data(data laporan)
$routes->get('data-laporan', 'Admin\LaporanController::laporan');
$routes->get('admin/dashboard/data/laporan', 'Admin\LaporanController::laporan');
$routes->post('laporan/hapus/(:num)', 'Admin\LaporanController::hapus/$1');
$routes->get('admin/dashboard/data/detail/(:num)', 'Admin\LaporanController::detail/$1');
$routes->get('admin/dashboard/data/printpdf', 'Admin\LaporanController::printpdf');
$routes->get('admin/dashboard/data/printpdf/(:num)', 'Admin\LaporanController::printpdf/$1');

//Anggota
$routes->get('anggota', 'Admin\AnggotaController::anggota');
$routes->get('anggota/tambah', 'Admin\AnggotaController::tambah');
$routes->post('anggota/simpan', 'Admin\AnggotaController::simpan');
$routes->get('anggota/edit/(:num)', 'Admin\AnggotaController::edit/$1');
$routes->post('anggota/update/(:num)', 'Admin\AnggotaController::update/$1');
$routes->get('anggota/hapus/(:num)', 'Admin\AnggotaController::hapus/$1');

//Upload Berita
//$routes->get('/admin/berita', 'Admin\UpberitaController::listberita');
$routes->post('/admin/upload', 'Admin\UpberitaController::upload');
$routes->get('/admin/berita/tambah', 'Admin\UpberitaController::edit');
$routes->get('/admin/berita/tambah/(:num)', 'Admin\UpberitaController::edit/$1');
$routes->get('/admin/berita', 'Admin\UpberitaController::listberita');
$routes->post('upload_berita/upload', 'Admin\UpberitaController::upload');
$routes->get('admin/berita/detail/(:num)', 'Admin\UpberitaController::detail/$1');

//Upload dokumentasi
$routes->get('updoc', 'Admin\UpdocController::uploaddoc');
$routes->get('listdoc', 'Admin\UpdocController::listdoc');
$routes->post('admin/upload_dokumentasi/upload', 'Admin\UpdocController::upload');
$routes->get('admin/upload_dokumentasi', 'Admin\UpdocController::uploaddoc');

// route beranda
//$routes->get('beranda', 'BerandaController::index');

// route tampilan login
$routes->get('auth', 'LoginController::login');
$routes->post('login/authenticate', 'LoginController::authenticate');
$routes->get('logout', 'LoginController::logout');
$routes->get('laporan/laporan', 'LaporanController::laporan');

//route tampilan register

$routes->get('register', 'RegisterController::register');
$routes->post('register/proses', 'RegisterController::proses');
$routes->get('auth/register/verifyinfo', 'RegisterController::verifyinfo');
$routes->post('register/verify', 'RegisterController::verify');

// route tampilan berita
$routes->get('berita', 'BeritaController::berita');
$routes->get('berita/detail-berita/(:num)', 'BeritaController::detail/$1');
$routes->get('berita', 'BeritaController::index');

// route tampilan dokumentasi
$routes->get('Berita2', 'Berita2Controller::berita2');
$routes->get('Berita2/berita2(:num)', 'Berita2Controller::detail/$1');


// Route detail aspirasi
$routes->get('laporan/detail/(:num)', 'Admin\DatasatuvisiController::detail/$1');
$routes->post('admin/dashboard/data/updatestatus/(:num)', 'Admin\LaporanController::updatestatus/$1');
$routes->post('admin/dashboard/data_satuvisi/updatestatus/(:num)', 'Admin\DatasatuvisiController::updatestatus/$1');

// route laporan
$routes->get('laporan', 'LaporanController::laporan');
$routes->post('laporan/kirimLaporan', 'LaporanController::kirimLaporan');
$routes->post('laporan/kirimAspirasi', 'LaporanController::kirimAspirasi');


// Route detail pengguna
$routes->get('pengguna/detail/(:num)', 'PenggunaController::detail/$1');
$routes->get('/profil-pengguna', 'ProfilController::index');
$routes->post('/profil/update', 'ProfilController::updateProfile');
$routes->post('/profil/password', 'ProfilController::changePassword');
