<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('api',function ($routes){
    $routes->group('auth', function ($routes){
        $routes->post('register', 'AuthController::register', ['filter' => 'register']);
        $routes->post('login', 'AuthController::login', ['filter' => 'login']);
        $routes->post('logout', 'AuthController::logout');
    });

    $routes->group('patient', function($routes){
        $routes->post('adduserprofile', 'PatientController::adduserprofile', ['filter' => 'auth']);
    });

    service('auth')->routes($routes);
});
