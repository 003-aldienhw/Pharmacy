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

$routes->get('/poli-daftar', fn() => view('main', [
    'page' => 'pages/patient/register_clinic',
    'title' => 'Daftar Poli'
]));

$routes->get('/profil', fn() => view('main', [
    'page' => 'pages/patient/profile',
    'title' => 'Profil'
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

$routes->get('/dokter/antrian', fn() => view('main', [
    'page' => 'pages/doctor/queue',
    'title' => 'Antrian Pasien'
]));

$routes->get('/dokter/detail-pasien', fn() => view('main', [
    'page' => 'pages/doctor/patient_detail',
    'title' => 'Detail Pasien'
]));

$routes->get('/dokter/sudah-diperiksa', fn() => view('main', [
    'page' => 'pages/doctor/patient_history',
    'title' => 'Riwayat semua Pasien'
]));