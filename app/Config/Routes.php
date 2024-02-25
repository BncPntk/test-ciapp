<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users', 'Users::index');
$routes->get('users/(:num)', 'Users::show/$1');
$routes->post('users/create', 'Users::create');
$routes->get('users/delete/(:num)', 'Users::delete/$1');
$routes->post('users/delete/(:num)', 'Users::delete/$1');
