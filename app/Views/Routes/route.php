<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

/** Patient */

$routes->get('/register', fn() => view('main', [
    'page' => 'pages/patient/register',
    'title' => 'Registrasi Pasien'
]));

$routes->get('/login', fn() => view('main', [
    'page' => 'pages/patient/login',
    'title' => 'Login Pasien'
]));

$routes->get('/poli', fn() => view('main', [
    'page' => 'pages/patient/clinic',
    'title' => 'Pilih Poli'
]));

$routes->get('/poli/poli-daftar', fn() => view('main', [
    'page' => 'pages/patient/register_clinic',
    'title' => 'Daftar Poli'
]));

$routes->get('/poli/poli-daftar/antrian', fn() => view('main', [
    'page' => 'pages/patient/queue',
    'title' => 'Antrian'
]));

$routes->get('/profil', fn() => view('main', [
    'page' => 'pages/patient/profile',
    'title' => 'Profil'
]));

$routes->get('/profil/edit', fn() => view('main', [
    'page' => 'pages/patient/edit_profile',
    'title' => 'Edit Profil'
]));

$routes->get('/obat', fn() => view('main', [
    'page' => 'pages/patient/medications',
    'title' => 'Resep dan Obat'
]));

$routes->get('/pembayaran', fn() => view('main', [
    'page' => 'pages/patient/payment',
    'title' => 'Pembayaran'
]));

$routes->get('/pendaftaran-saya', fn() => view('main', [
    'page' => 'pages/patient/history',
    'title' => 'Pendaftaran Saya'
]));

$routes->get('/', fn() => view('main', [
    'page' => 'pages/patient/dashboard',
    'title' => 'Dashboard'
]));

/** Doctor */

$routes->get('/dokter/login', fn() => view('main', [
    'page' => 'pages/doctor/login',
    'title' => 'Login Dokter'
]));

$routes->get('/dokter/dashboard', fn() => view('main', [
    'page' => 'pages/doctor/dashboard',
    'title' => 'Dashboard Dokter'
]));

$routes->get('/dokter/profil', fn() => view('main', [
    'page' => 'pages/doctor/profile',
    'title' => 'Profil Dokter'
]));

$routes->get('/dokter/antrian', fn() => view('main', [
    'page' => 'pages/doctor/queue',
    'title' => 'Antrian Pasien'
]));

$routes->get('/dokter/antrian/detail-pasien', fn() => view('main', [
    'page' => 'pages/doctor/patient_detail',
    'title' => 'Detail Pasien'
]));

$routes->get('/dokter/antrian/pemeriksaan-pasien', fn() => view('main', [
    'page' => 'pages/doctor/examination',
    'title' => 'Pemeriksaan Pasien'
]));

$routes->get('/dokter/antrian/pemeriksaan-pasien/obat-resep', fn() => view('main', [
    'page' => 'pages/doctor/medication',
    'title' => 'Pemeriksaan Pasien'
]));

$routes->get('/dokter/antrian/riwayat-pasien', fn() => view('main', [
    'page' => 'pages/doctor/patient_history',
    'title' => 'Riwayat Pasien'
]));

$routes->get('/dokter/sudah-diperiksa', fn() => view('main', [
    'page' => 'pages/doctor/all_patient_history',
    'title' => 'Riwayat semua Pasien'
]));

/** Pharmacy */

$routes->get('/apotek/dashboard', fn() => view('main', [
    'page' => 'pages/pharmacy/dashboard',
    'title' => 'Dashboard Apotek'
]));

$routes->get('/apotek/resep-masuk', fn() => view('main', [
    'page' => 'pages/pharmacy/meds_request.php',
    'title' => 'Resep Masuk'
]));

$routes->get('/apotek/sedang-diproses', fn() => view('main', [
    'page' => 'pages/pharmacy/on_process',
    'title' => 'Sedang Diproses'
]));    