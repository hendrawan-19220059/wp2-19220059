<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('/contoh', 'Contoh::index');
$routes->get('/contoh/penjumlahan/(:num)/(:num)', 'Contoh::penjumlahan/$1/$2');
