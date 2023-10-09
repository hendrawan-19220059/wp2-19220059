<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

// Contoh
$routes->get('/contoh', 'Contoh::index');
$routes->get('/contoh/penjumlahan/(:num)/(:num)', 'Contoh::penjumlahan/$1/$2');

// Mata Kuliah
$routes->get('/matakuliah', 'Matakuliah::index');
$routes->post('/matakuliah/cetak', 'Matakuliah::cetak');

// Web
$routes->get('/web', 'web::index');