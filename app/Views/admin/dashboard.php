<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Admin - KostSaya</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#eef2f7;
}

/* SIDEBAR */

.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:270px;
    height:100vh;
    background:linear-gradient(180deg,#2563eb,#1e3a8a);
    color:#fff;
    box-shadow:4px 0 15px rgba(0,0,0,.1);
}

.logo{
    text-align:center;
    padding:30px 20px;
    border-bottom:1px solid rgba(255,255,255,.15);
}

.logo h2{
    font-size:28px;
    font-weight:bold;
}

.logo p{
    opacity:.8;
    font-size:13px;
}

.menu{
    list-style:none;
    padding:15px;
}

.menu li{
    margin-bottom:8px;
}

.menu a{
    text-decoration:none;
    color:white;
    display:flex;
    align-items:center;
    gap:15px;
    padding:14px 16px;
    border-radius:12px;
    transition:.3s;
}

.menu a:hover{
    background:rgba(255,255,255,.15);
    transform:translateX(5px);
}

.menu i{
    width:20px;
}

/* MAIN */

.main{
    margin-left:270px;
    min-height:100vh;
}

/* TOPBAR */

.topbar{
    background:white;
    padding:20px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 15px rgba(0,0,0,.05);
}

.topbar-left h2{
    color:#111827;
}

.topbar-left p{
    color:#6b7280;
    margin-top:3px;
    font-size:14px;
}

.topbar-right{
    display:flex;
    align-items:center;
    gap:20px;
}

.search{
    background:#f3f4f6;
    padding:10px 15px;
    border-radius:30px;
}

.search input{
    border:none;
    background:none;
    outline:none;
}

.profile{
    display:flex;
    align-items:center;
    gap:10px;
}

.avatar{
    width:45px;
    height:45px;
    border-radius:50%;
    background:#2563eb;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
}

/* CONTENT */

.content{
    padding:30px;
}

/* CARDS */

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-bottom:30px;
}

.card{
    color:white;
    padding:25px;
    border-radius:20px;
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card i{
    font-size:40px;
    margin-bottom:15px;
}

.card h2{
    font-size:30px;
    margin-bottom:5px;
}

.blue{
    background:linear-gradient(135deg,#3b82f6,#2563eb);
}

.green{
    background:linear-gradient(135deg,#10b981,#059669);
}

.orange{
    background:linear-gradient(135deg,#f59e0b,#d97706);
}

.red{
    background:linear-gradient(135deg,#ef4444,#dc2626);
}

/* TABLE */

.table-card{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 3px 15px rgba(0,0,0,.05);
}

.table-card h3{
    margin-bottom:20px;
    color:#111827;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#2563eb;
    color:white;
    padding:15px;
}

table td{
    padding:15px;
    border-bottom:1px solid #eee;
}

table tr:hover{
    background:#f9fafb;
}

.status{
    color:white;
    padding:6px 14px;
    border-radius:20px;
    font-size:12px;
}

.success{
    background:#10b981;
}

.pending{
    background:#f59e0b;
}

.danger{
    background:#ef4444;
}

.footer{
    margin-top:30px;
    text-align:center;
    color:#666;
    font-size:14px;
}

</style>
</head>
<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">
        <h2>KostSaya</h2>
        <p>ADMIN PANEL</p>
    </div>

    <ul class="menu">

        <li>
            <a href="<?= base_url('admin/dashboard') ?>">
                <i class="fas fa-home"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-users"></i>
                Data Pengguna
            </a>
        </li>

        <li>
            <a href="<?= base_url('admin/kost') ?>">
                <i class="fas fa-building"></i>
                Data Kost
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-bed"></i>
                Data Kamar
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-calendar-check"></i>
                Booking
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-money-bill-wave"></i>
                Pembayaran
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-chart-line"></i>
                Laporan
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-cog"></i>
                Pengaturan
            </a>
        </li>

        <li>
            <a href="<?= base_url('logout') ?>">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
        </li>

    </ul>

</div>

<!-- MAIN -->

<div class="main">

    <!-- TOPBAR -->

    <div class="topbar">

        <div class="topbar-left">
            <h2>Dashboard Admin</h2>
            <p>Selamat Datang di Sistem Informasi KostSaya</p>
        </div>

        <div class="topbar-right">

            <div class="search">
                <input type="text" placeholder="Cari data...">
            </div>

            <div class="profile">

                <div class="avatar">
                    <i class="fas fa-user"></i>
                </div>

                <div>
                    <strong>Administrator</strong><br>
                    <small>Online</small>
                </div>

            </div>

        </div>

    </div>

    <!-- CONTENT -->

    <div class="content">

        <div class="cards">

            <div class="card blue">
                <i class="fas fa-building"></i>
                <h2>25</h2>
                <p>Total Kost</p>
            </div>

            <div class="card green">
                <i class="fas fa-bed"></i>
                <h2>120</h2>
                <p>Total Kamar</p>
            </div>

            <div class="card orange">
                <i class="fas fa-users"></i>
                <h2>85</h2>
                <p>Total Pengguna</p>
            </div>

            <div class="card red">
                <i class="fas fa-calendar-check"></i>
                <h2>50</h2>
                <p>Total Booking</p>
            </div>

        </div>

        <!-- AKTIVITAS -->

        <div class="table-card">

            <h3>Aktivitas Terbaru</h3>

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aktivitas</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Ridwan</td>
                        <td>Booking Kost Mawar</td>
                        <td>
                            <span class="status success">
                                Berhasil
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Andi</td>
                        <td>Pembayaran Kost</td>
                        <td>
                            <span class="status pending">
                                Menunggu
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Rahma</td>
                        <td>Tambah Kost Baru</td>
                        <td>
                            <span class="status success">
                                Selesai
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Budi</td>
                        <td>Booking Kamar</td>
                        <td>
                            <span class="status danger">
                                Ditolak
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

        <div class="footer">
            © <?= date('Y') ?> KostSaya - Sistem Informasi Booking Kost
        </div>

    </div>

</div>

</body>
</html>