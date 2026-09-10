<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('api',function ($routes){
    $routes->post('register', 'AuthController::register', ['filter' => 'register']);
    
    service('auth')->routes($routes);
});
