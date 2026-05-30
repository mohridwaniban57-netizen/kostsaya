<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
#HOME LE
$routes->get('/', 'Home::index');
$routes->post('/awal/proses', 'Home::proses');


# BERANDA
$routes->get('/beranda', 'beranda::index');
$routes->post('/beranda/proses', 'beranda::proses');
$routes->post('/beranda/proses1', 'beranda::proses1');
$routes->post('/beranda/proses2', 'beranda::proses2');

// ======================================================
// AUTH
// ======================================================
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attempt');
$routes->post('/login/attempt', 'Auth::attempt');

// $routes->get('/login', 'Login::login');
// $routes->post('/login', 'Auth::attempt');
// $routes->post('/login/attempt', 'Auth::attempt');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::store');

$routes->get('/logout', 'Auth::logout');


// ======================================================
// KOST
// ======================================================

$routes->get('/kost', 'Kost::index');

$routes->get('/kost/detail/(:num)', 'Kost::detail/$1');

$routes->get('/kost/tambah', 'Kost::create');

$routes->post('/kost/store', 'Kost::store');

$routes->get('/kost/edit/(:num)', 'Kost::edit/$1');

$routes->post('/kost/update/(:num)', 'Kost::update/$1');

$routes->get('/kost/delete/(:num)', 'Kost::delete/$1');


// ======================================================
// KAMAR
// ======================================================

$routes->get('/kamar', 'Kamar::index');

$routes->get('/kamar/tambah', 'Kamar::create');

$routes->post('/kamar/store', 'Kamar::store');

$routes->get('/kamar/edit/(:num)', 'Kamar::edit/$1');

$routes->post('/kamar/update/(:num)', 'Kamar::update/$1');

$routes->get('/kamar/delete/(:num)', 'Kamar::delete/$1');
$routes->get('/pemilik/data-kos', 'pemilikKosController::index');

$routes->get('/pemilik/tambah-kos', 'pemilikKosController::tambah');

$routes->get('/pemilik/edit-kos/(:num)', 'pemilikKosController::edit/$1');

$routes->get('/pemilik/hapus-kos/(:num)', 'pemilikKosController::hapus/$1');

// Booking Masuk
$routes->get('/pemilik/booking', 'pemilikBookingController::index');

// Profil Pemilik
$routes->get('/pemilik/profil', 'pemilikController::profil');


// ======================================================
// BOOKING
// ======================================================

$routes->get('/booking', 'Booking::index');

$routes->post('/booking/store', 'Booking::store');

$routes->get('/booking/riwayat', 'Booking::riwayat');


// ======================================================
// PEMBAYARAN
// ======================================================

$routes->get('/pembayaran', 'Pembayaran::index');

$routes->get('/pembayaran/upload', 'Pembayaran::uploadForm');

$routes->post('/pembayaran/upload', 'Pembayaran::upload');


// ======================================================
// ADMIN
// ======================================================

$routes->get('/admin', 'Admin::dashboard');

$routes->get('/admin/booking', 'Admin::booking');

$routes->get('/admin/approve/(:num)', 'Admin::approve/$1');

$routes->get('/admin/reject/(:num)', 'Admin::reject/$1');

// favorit

$routes->get('/favorit', 'Favorit::index');
$routes->get('/detail/(:num)', 'Favorit::detail/$1');

# BERANDA
