<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');


// AUTH
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');


// PENCARI
$routes->group('pencari', function($routes){

    $routes->get('dashboard', 'Pencari::dashboard');

    $routes->get('kost', 'Pencari::kost');

    $routes->get('detail/(:num)', 'Pencari::detail/$1');

    $routes->get('booking', 'Pencari::booking');

    $routes->get('profil', 'Pencari::profil');

});


// PEMILIK
$routes->group('pemilik', function($routes){

    $routes->get('dashboard', 'Pemilik::dashboard');

    $routes->get('tambah-kost', 'Pemilik::tambahKost');

    $routes->get('data-kost', 'Pemilik::dataKost');

    $routes->get('edit-kost/(:num)', 'Pemilik::editKost/$1');

    $routes->get('booking', 'Pemilik::booking');

    $routes->get('profil', 'Pemilik::profil');

});