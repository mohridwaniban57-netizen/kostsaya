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
// USER / PENCARI KOST
// ======================================================

// Cari Apa?
$routes->get('/kost-putri', 'KosController::kostPutri');

$routes->get('/kost-putra', 'KosController::kostPutra');

$routes->get('/kost-campuran', 'KosController::kostCampuran');

// Detail Kos
$routes->get('/detail-kos/(:num)', 'KosController::detailKos/$1');

// Favorit
$routes->get('/favorit', 'FavoritController::index');

// Booking
$routes->get('/booking/(:num)', 'BookingController::index/$1');

$routes->get('/checkout', 'BookingController::checkout');

$routes->get('/pembayaran', 'PembayaranController::index');

$routes->get('/riwayat-booking', 'BookingController::riwayat');

// Dashboard User
$routes->get('/dashboard', 'DashboardController::index');

// Profil User
$routes->get('/profil', 'UserController::profil');


// ======================================================
// AUTH
// ======================================================
$routes->get('/login', 'AuthController::login');

$routes->get('/register', 'AuthController::register');

$routes->get('/logout', 'AuthController::logout');


// ======================================================
// TENTANG WEBSITE
// ======================================================
$routes->get('/tentang', 'Home::tentang');


// ======================================================
// PEMILIK KOST
// ======================================================
$routes->get('/pemilik', 'PemilikController::dashboard');

// Kelola Kos
$routes->get('/pemilik/data-kos', 'PemilikKosController::index');

$routes->get('/pemilik/tambah-kos', 'PemilikKosController::tambah');

$routes->get('/pemilik/edit-kos/(:num)', 'PemilikKosController::edit/$1');

$routes->get('/pemilik/hapus-kos/(:num)', 'PemilikKosController::hapus/$1');

// Booking Masuk
$routes->get('/pemilik/booking', 'PemilikBookingController::index');

// Profil Pemilik
$routes->get('/pemilik/profil', 'PemilikController::profil');


// ======================================================
// ADMIN SISTEM
// ======================================================
$routes->get('/admin', 'AdminController::dashboard');

// Kelola User
$routes->get('/admin/data-user', 'AdminUserController::index');

// Kelola Pemilik Kost
$routes->get('/admin/data-pemilik', 'AdminPemilikController::index');

// Statistik
$routes->get('/admin/statistik', 'LaporanController::statistik');


// ======================================================
// ERROR PAGE
// ======================================================
$routes->set404Override('ErrorController::notFound');

?>