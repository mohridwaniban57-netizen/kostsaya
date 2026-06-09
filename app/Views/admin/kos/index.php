<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Kost - Admin</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


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
    color:white;
    z-index:1000;
}

.logo{
    text-align:center;
    padding:25px;
    border-bottom:1px solid rgba(255,255,255,.15);
}

.logo h2{
    font-size:28px;
}

.logo p{
    font-size:13px;
    opacity:.8;
}

.menu{
    list-style:none;
    padding:15px;
}

.menu li{
    margin-bottom:8px;
}

.menu a{
    color:white;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px;
    border-radius:12px;
    transition:.3s;
}

.menu a:hover,
.menu a.active{
    background:rgba(255,255,255,.15);
}

.menu i{
    width:20px;
}

/* MAIN */

.main{
    margin-left:270px;
}

/* NAVBAR */

.topbar{
    height:75px;
    background:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 30px;
    box-shadow:0 2px 15px rgba(0,0,0,.05);
}

.topbar h2{
    color:#1e293b;
}

.profile{
    display:flex;
    align-items:center;
    gap:10px;
}

.avatar{
    width:45px;
    height:45px;
    background:#2563eb;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
}

/* CONTENT */

.content{
    padding:30px;
}

/* HEADER */

.page-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.page-header h3{
    font-size:28px;
    color:#1e293b;
}

.page-header p{
    color:#64748b;
}

/* BUTTON */

.btn{
    text-decoration:none;
    color:white;
    padding:12px 18px;
    border-radius:10px;
    display:inline-flex;
    align-items:center;
    gap:8px;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-primary{
    background:#2563eb;
}

.btn-warning{
    background:#f59e0b;
}

.btn-danger{
    background:#dc2626;
}

/* CARD */

.card{
    background:white;
    padding:20px;
    border-radius:18px;
    box-shadow:0 5px 15px rgba(0,0,0,.05);
    margin-bottom:25px;
}

.card h3{
    font-size:30px;
    color:#2563eb;
}

/* TABLE */

.table-card{
    background:white;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,.05);
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
    background:#f8fafc;
}

.kost-img{
    width:100px;
    height:75px;
    border-radius:10px;
    object-fit:cover;
}

.badge{
    background:#dbeafe;
    color:#1d4ed8;
    padding:8px 12px;
    border-radius:30px;
    font-weight:600;
}

.action{
    display:flex;
    gap:8px;
}

.alert{
    background:#dcfce7;
    color:#166534;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

.pagination{
    margin-top:20px;
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
            <a href="<?= base_url('admin/kost') ?>" class="active">
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

    <!-- NAVBAR -->

    <div class="topbar">

        <h2>Data Kost</h2>

        <div class="profile">

            <div class="avatar">
                <i class="fas fa-user"></i>
            </div>

            <div>
                <strong>Administrator</strong>
            </div>

        </div>

    </div>

    <div class="content">

        <div class="page-header">

            <div>
                <h3>Data Kost</h3>
                <p>Kelola seluruh data kost</p>
            </div>

            <a href="<?= base_url('admin/kost/create') ?>"
               class="btn btn-primary">

                <i class="fas fa-plus"></i>
                Tambah Kost

            </a>

        </div>

        <div class="card">
            <h3><?= count($kos) ?></h3>
            <p>Total Data Kost</p>
        </div>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <div class="table-card">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Kost</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                <?php $no = 1 + (10 * ($currentPage - 1)); ?>

                <?php foreach($kos as $item): ?>

                <tr>

                    <td><?= $no++ ?></td>

                    <td>

                        <?php if(!empty($item['foto'])): ?>

                            <img src="<?= base_url('uploads/'.$item['foto']) ?>"
                                 class="kost-img">

                        <?php else: ?>

                            Tidak Ada Foto

                        <?php endif; ?>

                    </td>

                    <td><?= esc($item['nama_kos']) ?></td>

                    <td><?= esc($item['lokasi']) ?></td>

                    <td>
                        <span class="badge">
                            Rp <?= number_format($item['harga'],0,',','.') ?>
                        </span>
                    </td>

                    <td>

                        <div class="action">

                            <a href="<?= base_url('admin/kost/edit/'.$item['kos_id']) ?>"
                               class="btn btn-warning">

                                <i class="fas fa-edit"></i>

                            </a>

                            <button
                                onclick="hapusKost(<?= $item['kos_id'] ?>)"
                                class="btn btn-danger">

                                <i class="fas fa-trash"></i>

                            </button>

                        </div>

                    </td>

                </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

        <div class="pagination">
            <?= $pager->links('kos','default_full') ?>
        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

function hapusKost(id){

    if(confirm('Yakin ingin menghapus data ini?')){

        $.ajax({

            url: "<?= base_url('admin/kost/delete/') ?>" + id,

            type: "GET",

            dataType: "json",

            success:function(response){

                alert(response.message);

                if(response.success){

                    location.reload();

                }

            },

            error:function(){

                alert('Terjadi kesalahan');

            }

        });

    }

}

</script>
</body>
</html>