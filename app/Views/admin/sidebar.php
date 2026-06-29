<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<?php $segment = service('uri')->getSegment(2); ?>

<div class="sidebar">

    <div class="sidebar-header">
        <div class="logo">
            <i class="fas fa-house"></i>
        </div>

        <div>
            <h2>KostSaya</h2>
            <p>Administrator</p>
        </div>
    </div>


    <div class="menu-title">MENU ADMIN</div>

    <ul class="menu">

        <li>
            <a href="/admin/dashboard" class="<?= $segment=='dashboard'?'active':'' ?>">
                <i class="fas fa-chart-line"></i> Dashboard
            </a>
        </li>

        <li>
            <a href="/admin/user">
                <i class="fas fa-users"></i> Data Pengguna
            </a>
        </li>

        <li>
            <a href="/admin/pemilik">
                <i class="fas fa-user-tie"></i> Data Pemilik Kost
            </a>
        </li>

        <li>
            <a href="/admin/kost">
                <i class="fas fa-building"></i> Data Kost
            </a>
        </li>

        <li>
            <a href="/admin/kamar">
                <i class="fas fa-bed"></i> Data Kamar
            </a>
        </li>

        <li>
            <a href="/admin/booking">
                <i class="fas fa-calendar-check"></i> Booking
            </a>
        </li>

        <li>
            <a href="/admin/pembayaran">
                <i class="fas fa-money-bill"></i> Pembayaran
            </a>
        </li>

        <li>
            <a href="/admin/laporan">
                <i class="fas fa-file-chart-column"></i> Laporan
            </a>
        </li>

    </ul>


    <div class="menu-title">AKUN</div>

    <ul class="menu">

        <li>
            <a href="/admin/pengaturan">
                <i class="fas fa-gear"></i> Pengaturan
            </a>
        </li>

        <li>
            <a href="/logout" class="logout">
                <i class="fas fa-right-from-bracket"></i> Logout
            </a>
        </li>

    </ul>

</div>


<style>

*{
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    margin:0;
    background:#f8fafc;
}

.sidebar{
    width:260px;
    height:100vh;
    position:fixed;
    left:0;
    top:0;
    background:white;
    border-right:1px solid #e2e8f0;
    box-shadow:0 10px 30px rgba(0,0,0,.05);
    overflow-y:auto;
}

.sidebar::-webkit-scrollbar{
    width:5px;
}

.sidebar::-webkit-scrollbar-thumb{
    background:#cbd5e1;
    border-radius:10px;
}

.sidebar-header{
    display:flex;
    align-items:center;
    gap:15px;
    padding:20px;
    border-bottom:1px solid #e2e8f0;
}

.logo{
    width:45px;
    height:45px;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    background:linear-gradient(135deg,#2563eb,#7c3aed);
}

.sidebar h2{
    margin:0;
    font-size:20px;
}

.sidebar p{
    margin:3px 0;
    font-size:12px;
    color:#64748b;
}

.menu-title{
    padding:20px 20px 10px;
    font-size:11px;
    font-weight:bold;
    letter-spacing:1px;
    color:#94a3b8;
}

.menu{
    list-style:none;
    padding:0 12px;
    margin:0;
}

.menu li{
    margin-bottom:8px;
}

.menu a{
    display:flex;
    align-items:center;
    gap:13px;
    padding:13px;
    border-radius:12px;
    text-decoration:none;
    color:#64748b;
    font-size:14px;
    font-weight:600;
    transition:.3s;
}

.menu a i{
    width:20px;
}

.menu a:hover{
    background:#eff6ff;
    color:#2563eb;
}

.menu a.active{
    background:linear-gradient(135deg,#2563eb,#7c3aed);
    color:white;
}

.logout{
    color:#dc2626!important;
}

.logout:hover{
    background:#fee2e2!important;
}

</style>

</body>
</html>