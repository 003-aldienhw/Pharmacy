<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/register', fn() => view('main', [
    'page' => 'pages/register',
    'title' => 'Registration'
]));

$routes->get('/', fn() => view('main', [
    'page' => 'pages/checking',
    'title' => 'Cek data'
]));