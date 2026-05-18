<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ======================================================
// HALAMAN UTAMA
// ======================================================
$routes->get('/', 'Home::index');


// ======================================================
// MENU "CARI APA?"
// ======================================================

// Dropdown Cari Apa?
$routes->get('/kost-putri', 'KosController::kostPutri');

$routes->get('/kost-putra', 'KosController::kostPutra');

$routes->get('/kost-campuran', 'KosController::kostCampuran');


// ======================================================
// DETAIL KOS
// ======================================================
$routes->get('/detail-kos/(:num)', 'KosController::detailKos/$1');


// ======================================================
// FAVORIT
// ======================================================
$routes->get('/favorit', 'FavoritController::index');


// ======================================================
// TENTANG
// ======================================================
$routes->get('/tentang', 'Home::tentang');


// ======================================================
// AUTH
// ======================================================
$routes->get('/login', 'AuthController::login');

$routes->get('/register', 'AuthController::register');

$routes->get('/logout', 'AuthController::logout');


// ======================================================
// DASHBOARD USER
// ======================================================
$routes->get('/dashboard', 'DashboardController::index');


// ======================================================
// BOOKING
// ======================================================
$routes->get('/booking/(:num)', 'BookingController::index/$1');

$routes->get('/checkout', 'BookingController::checkout');

$routes->get('/pembayaran', 'PembayaranController::index');

$routes->get('/riwayat-booking', 'BookingController::riwayat');


// ======================================================
// PROFIL USER
// ======================================================
$routes->get('/profil', 'UserController::profil');


// ======================================================
// PEMILIK KOST
// ======================================================
$routes->get('/pemilik', 'PemilikController::dashboard');

$routes->get('/pemilik/data-kos', 'PemilikKosController::index');

$routes->get('/pemilik/tambah-kos', 'PemilikKosController::tambah');

$routes->get('/pemilik/edit-kos/(:num)', 'PemilikKosController::edit/$1');

$routes->get('/pemilik/booking', 'PemilikBookingController::index');


// ======================================================
// ADMIN
// ======================================================
$routes->get('/admin', 'AdminController::dashboard');

$routes->get('/admin/data-user', 'AdminUserController::index');

$routes->get('/admin/data-pemilik', 'AdminPemilikController::index');

$routes->get('/admin/statistik', 'LaporanController::statistik');


// ======================================================
// ERROR PAGE
// ======================================================
$routes->set404Override('ErrorController::notFound');

?>