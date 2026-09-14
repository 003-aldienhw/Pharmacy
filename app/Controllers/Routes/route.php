<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('api',function ($routes){
    $routes->post('register', 'AuthController::register', ['filter' => 'register']);
    $routes->post('login', 'AuthController::login', ['filter' => 'login']);
    $routes->post('logout', 'AuthController::logout');

    service('auth')->routes($routes);
});
