<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

/** Patient */

$routes->get('/register', fn() => view('main', [
    'page' => 'pages/patient/register',
    'title' => 'Registration'
]));

$routes->get('/login', fn() => view('main', [
    'page' => 'pages/patient/login',
    'title' => 'Login'
]));

$routes->get('/clinic', fn() => view('main', [
    'page' => 'pages/patient/clinic',
    'title' => 'Pilih Poli'
]));

$routes->get('/profil', fn() => view('main', [
    'page' => 'pages/patient/profile',
    'title' => 'Profil'
]));

$routes->get('/pendaftaran-saya', fn() => view('main', [
    'page' => 'pages/patient/history',
    'title' => 'Pendaftaran Saya'
]));

$routes->get('/', fn() => view('main', [
    'page' => 'pages/patient/dashboard',
    'title' => 'Dashboard'
]));