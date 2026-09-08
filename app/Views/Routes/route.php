<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/register', fn() => view('main', [
    'page' => 'pages/register',
    'title' => 'Registration'
]));

$routes->get('/', fn() => view('main', [
    'page' => 'pages/home',
    'title' => 'Home'
]));

$routes->get('/login', fn() => view('main', [
    'page' => 'pages/login',
    'title' => 'Login'
]));