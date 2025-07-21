<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// test database
$routes->get('/test', 'Home::index');


$routes->get('/', 'BerandaController::index');

// route admin dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

// route admin data_satuvisi(data aspirasi)
$routes->get('data_satuvisi', 'Admin\DatasatuvisiController::index');

// route admin data(data laporan)
$routes->get('data', 'Admin\DatasatuvisiController2::index2');
$routes->get('admin/dashboard/data/index2', 'Admin\DataSatuvisiController2::index2');
$routes->post('laporan/hapus/(:num)', 'Admin\DatasatuvisiController2::hapus/$1');

//Anggota
$routes->get('anggota', 'Admin\AnggotaController::anggota');
$routes->get('admin/anggota', 'Admin\AnggotaController::anggota');
$routes->get('admin/dashboard/anggota/anggota', 'Admin\AnggotaController::anggota');
$routes->get('anggota/tambah', 'Admin\AnggotaController::tambah');
$routes->post('anggota/simpan', 'Admin\AnggotaController::simpan');
$routes->get('anggota/edit/(:num)', 'Admin\AnggotaController::edit/$1');
$routes->post('anggota/update/(:num)', 'Admin\AnggotaController::update/$1');
$routes->get('anggota/hapus/(:num)', 'Admin\AnggotaController::hapus/$1');

//Upload Berita
$routes->get('admin/upload_berita', 'Admin\UpberitaController::uploadberita');
$routes->post('admin/upload_berita/upload', 'Admin\UpberitaController::upload');
$routes->get('upber', 'Admin\UpberitaController::uploadberita');
$routes->post('upload_berita/upload', 'Admin\UpberitaController::upload');
$routes->get('admin/berita/detail/(:num)', 'Admin\UpberitaController::detail/$1');

//Upload dokumentasi
$routes->get('updoc', 'Admin\UpdocController::uploaddoc');
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

// route tampilan berita
$routes->get('berita', 'Berita1Controller::berita1');
$routes->get('berita/detail/(:num)', 'Berita1Controller::detail/$1');
$routes->get('berita1', 'Berita1Controller::index');

// route tampilan dokumentasi
$routes->get('Berita2', 'Berita2Controller::berita2');
$routes->get('Berita2/berita2(:num)', 'Berita2Controller::detail/$1');

// route tampilan berita 3
$routes->get('Berita3', 'Berita3Controller::berita3');

// route laporan
$routes->get('/laporan', 'LaporanController::laporan');
$routes->post('laporan/kirimLaporan', 'LaporanController::kirimLaporan');
$routes->post('laporan/kirimAspirasi', 'LaporanController::kirimAspirasi');


$routes->get('/profil', 'ProfilController::index');
$routes->post('/profil/update', 'ProfilController::updateProfile');
$routes->post('/profil/password', 'ProfilController::changePassword');
