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
// $routes->post('/beranda/proses', 'beranda::proses');
$routes->post('/beranda/proses1', 'beranda::proses1');
$routes->post('/beranda/proses2', 'beranda::proses2');

// ======================================================
// AUTH
// ======================================================
// $routes->post('URL', 'Controller::Method');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attempt');
$routes->post('/login/attempt', 'Auth::attempt');

// $routes->get('/login', 'Login::login');
// $routes->post('/login', 'Auth::attempt');
// $routes->post('/login/attempt', 'Auth::attempt');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::store');
$routes->get('/admin/dashboard', 'Admin::dashboard', ['filter' => 'auth']);
$routes->get('pemilik/dashboard', 'pemilik::dashboard', ['filter' => 'auth']);
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


//PEMILIK KOST


$routes->get('pemilik/dashboard', 'pemilik::dashboard');

$routes->get('pemilik/kost', 'pemilik::kost');

$routes->get('pemilik/tambah-kost', 'pemilik::tambahKost');

$routes->post('pemilik/simpan-kost', 'pemilik::simpanKost');

$routes->get('pemilik/detail-kost/(:num)','Pemilik::detailKost/$1');

$routes->get('pemilik/kost/detail/(:num)','Pemilik::detailKost/$1');

$routes->get('pemilik/edit-kost/(:num)','pemilik::editKost/$1');

$routes->get('pemilik/kost/edit/(:num)', 'pemilik::editKost/$1');

$routes->get('pemilik/kost/kirim-ulang/(:num)','Pemilik::kirimUlang/$1');

$routes->post('pemilik/update-kost/(:num)','pemilik::updateKost/$1');

$routes->get('pemilik/kost/detail/(:num)','pemilik::detailKost/$1');

$routes->get('pemilik/hapus-kost/(:num)','Pemilik::hapusKost/$1');

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
$routes->get('/admin/dashboard','Admin::dashboard');

$routes->get('/admin/kost/detail/(:num)', 'Admin::detail/$1');

$routes->get('/admin/kost/terima/(:num)', 'Admin::terima/$1');

$routes->get('/admin/kost/tolak/(:num)', 'Admin::tolak/$1');

$routes->post('/admin/kost/tolak/simpan/(:num)','Admin::simpanTolak/$1');

$routes->get('/logout', 'Auth::logout');

// DATA KOST

$routes->get('/admin/kost', 'Admin::index');

$routes->get('/admin/kost/create', 'Admin::create');

$routes->post('/admin/kost/store', 'Admin::store');

$routes->get('/admin/kost/edit/(:num)', 'Admin::edit/$1');

$routes->post('/admin/kost/update/(:num)', 'Admin::update/$1');

$routes->get('/admin/kost/delete/(:num)', 'Admin::delete/$1');

// favorit
$routes->get('/favorit', 'Favorit::index');


# Jelajahi
$routes->get('/jelajahi', 'Jelajahi::index');

# tentang kami
$routes->get('/tentangkami', 'tentangKami::index');

# bantuan
$routes->get('/bantuan', 'bantuan::index');

//beranda ke detail
$routes->get('jelajahi','Jelajahi::index');

$routes->get('detail/(:num)','beranda::detail/$1');

$routes->get('favorit/detail/(:num)','Favorit::detail/$1');




