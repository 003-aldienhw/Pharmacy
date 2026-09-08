<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('api',function ($routes){
    $routes->get('test','AuthController::test');
    
    service('auth')->routes($routes);
});
