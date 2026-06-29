<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sidebar Pemilik Kost</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>
<?php $uri = service('uri'); ?>

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="sidebar-header">

        <div class="logo">
            <i class="fas fa-house"></i>
        </div>

        <div class="brand">
            <h2>KostSaya</h2>
            <p>Pemilik Kost</p>
        </div>

    </div>

    <div class="menu-title">
        MENU UTAMA
    </div>

    <ul class="menu">

        <li>
            <a href="/pemilik/dashboard"
            class="<?= ($uri->getSegment(2) == 'dashboard') ? 'active' : '' ?>">
                <i class="fas fa-chart-pie"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="/pemilik/kost"
            class="<?= ($uri->getSegment(2) == 'kost') ? 'active' : '' ?>">
                <i class="fas fa-building"></i>
                <span>Kost Saya</span>
            </a>
        </li>

        <li>
            <a href="/pemilik/tambah-kost"
            class="<?= ($uri->getSegment(2) == 'tambah-kost') ? 'active' : '' ?>">
                <i class="fas fa-circle-plus"></i>
                <span>Tambah Kost</span>
            </a>
        </li>

        <li>
            <a href="/pemilik/kamar"
            class="<?= ($uri->getSegment(2) == 'kamar') ? 'active' : '' ?>">
                <i class="fas fa-bed"></i>
                <span>Data Kamar</span>
            </a>
        </li>

        <li>
            <a href="/pemilik/booking"
            class="<?= ($uri->getSegment(2) == 'booking') ? 'active' : '' ?>">
                <i class="fas fa-calendar-check"></i>
                <span>Booking Masuk</span>
            </a>
        </li>

        <li>
            <a href="/pemilik/penyewa"
            class="<?= ($uri->getSegment(2) == 'penyewa') ? 'active' : '' ?>">
                <i class="fas fa-users"></i>
                <span>Penyewa</span>
            </a>
        </li>

        <li>
            <a href="/pemilik/pendapatan"
            class="<?= ($uri->getSegment(2) == 'pendapatan') ? 'active' : '' ?>">
                <i class="fas fa-wallet"></i>
                <span>Pendapatan</span>
            </a>
        </li>

    </ul>

    <div class="menu-title">
        AKUN
    </div>

    <ul class="menu">

        <li>
            <a href="/pemilik/profil"
            class="<?= ($uri->getSegment(2) == 'profil') ? 'active' : '' ?>">
                <i class="fas fa-user-circle"></i>
                <span>Profil</span>
            </a>
        </li>

        <li>
            <a href="/logout" class="logout">
                <i class="fas fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

</div>

<style>

:root{
    --primary:#2563eb;
    --secondary:#7c3aed;
    --dark:#0f172a;
    --text:#64748b;
    --bg:#f8fafc;
    --white:#ffffff;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:var(--bg);
}

/* SIDEBAR */

.sidebar{
    width:250px;
    height:100vh;

    position:fixed;
    top:0;
    left:0;

    background:white;

    border-right:1px solid #e2e8f0;

    overflow-y:auto;

    box-shadow:
    0 10px 30px rgba(0,0,0,.05);
}

/* HEADER */

.sidebar-header{
    display:flex;
    align-items:center;
    gap:12px;

    padding:18px;

    border-bottom:1px solid #e2e8f0;
}

.logo{
    width:42px;
    height:42px;

    border-radius:12px;

    background:
    linear-gradient(
        135deg,
        var(--primary),
        var(--secondary)
    );

    display:flex;
    align-items:center;
    justify-content:center;

    color:white;
    font-size:18px;
}

.brand h2{
    font-size:18px;
    color:var(--dark);
}

.brand p{
    font-size:12px;
    color:var(--text);
    margin-top:2px;
}

/* MENU TITLE */

.menu-title{
    padding:18px 18px 8px;

    color:#94a3b8;

    font-size:11px;
    font-weight:700;

    letter-spacing:1px;
}

/* MENU */

.menu{
    list-style:none;
    padding:0 12px;
}

.menu li{
    margin-bottom:6px;
}

.menu a{
    display:flex;
    align-items:center;
    gap:12px;

    text-decoration:none;

    color:var(--text);

    padding:12px 14px;

    border-radius:12px;

    font-size:14px;
    font-weight:600;

    transition:.3s;
}

.menu a i{
    width:20px;
    text-align:center;
    font-size:15px;
}

.menu a:hover{
    background:#eff6ff;
    color:var(--primary);

    transform:translateX(4px);
}

/* ACTIVE */

.menu a.active{
    color:white;

    background:
    linear-gradient(
        135deg,
        var(--primary),
        var(--secondary)
    );

    box-shadow:
    0 8px 20px rgba(37,99,235,.25);
}

/* LOGOUT */

.logout{
    color:#dc2626 !important;
}

.logout:hover{
    background:#fee2e2 !important;
    color:#dc2626 !important;
}

/* SCROLLBAR */

.sidebar::-webkit-scrollbar{
    width:5px;
}

.sidebar::-webkit-scrollbar-thumb{
    background:#cbd5e1;
    border-radius:10px;
}

/* RESPONSIVE */

@media(max-width:768px){

    .sidebar{
        width:100%;
        height:auto;
        position:relative;
    }

}

</style>

</body>
</html>