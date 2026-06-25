<?= $this->include('pemilik/sidebar'); ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Pemilik Kost</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>

<div class="main-content">

    <?php if(session()->getFlashdata('success')): ?>
        <div class="success-alert">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="welcome-card">

        <h1>
            Selamat Datang,
            <?= session()->get('nama'); ?>
        </h1>

        <p>
            Kelola seluruh kost dan kamar Anda dengan mudah.
        </p>

    </div>

    <div class="stats-grid">

        <div class="stat-card">
            <div>
                <span>Total Kost</span>
                <h2><?= $total_kost ?></h2>
            </div>
            <i class="fas fa-building"></i>
        </div>

        <div class="stat-card">
            <div>
                <span>Kost Aktif</span>
                <h2><?= $kost_aktif ?></h2>
            </div>
            <i class="fas fa-circle-check"></i>
        </div>

        <div class="stat-card">
            <div>
                <span>Menunggu Verifikasi</span>
                <h2><?= $kost_pending ?></h2>
            </div>
            <i class="fas fa-clock"></i>
        </div>

        <div class="stat-card">
            <div>
                <span>Total Kamar</span>
                <h2><?= $total_kamar ?></h2>
            </div>
            <i class="fas fa-bed"></i>
        </div>

        <div class="stat-card">
            <div>
                <span>Booking Masuk</span>
                <h2><?= $booking_masuk ?></h2>
            </div>
            <i class="fas fa-calendar-check"></i>
        </div>

        <div class="stat-card">
            <div>
                <span>Pendapatan</span>
                <h2>
                    Rp <?= number_format($pendapatan,0,',','.') ?>
                </h2>
            </div>
            <i class="fas fa-wallet"></i>
        </div>

    </div>

    <div class="action-grid">

        <a href="<?= base_url('pemilik/tambah-kost') ?>" class="action-card">
            <i class="fas fa-circle-plus"></i>
            <h3>Tambah Kost</h3>
            <p>Tambahkan kost baru.</p>
        </a>

        <a href="<?= base_url('pemilik/kost') ?>" class="action-card">
            <i class="fas fa-building"></i>
            <h3>Kost Saya</h3>
            <p>Lihat seluruh data kost Anda.</p>
        </a>

        <a href="<?= base_url('pemilik/booking') ?>" class="action-card">
            <i class="fas fa-calendar-check"></i>
            <h3>Booking Masuk</h3>
            <p>Lihat booking dari calon penyewa.</p>
        </a>

    </div>

    <?php if($total_kost == 0): ?>

        <div class="empty-box">

            <i class="fas fa-building-circle-xmark"></i>

            <h3>Belum Ada Kost</h3>

            <p>
                Anda belum memiliki data kost.
            </p>

            <a href="<?= base_url('pemilik/tambah-kost') ?>">
                Tambah Kost
            </a>

        </div>

    <?php else: ?>

        <div class="success-box">

            <i class="fas fa-circle-check"></i>

            Anda memiliki
            <strong><?= $total_kost ?></strong>
            kost terdaftar.

        </div>

    <?php endif; ?>

</div>

<style>

body{
    background:#f8fafc;
}

.main-content{
    margin-left:250px;
    padding:25px;
}

.success-alert{
    background:#dcfce7;
    color:#166534;
    padding:15px;
    border-radius:12px;
    margin-bottom:20px;
}

.welcome-card,
.stat-card,
.action-card{
    background:white;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.welcome-card{
    padding:25px;
    margin-bottom:25px;
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:18px;
}

.stat-card{
    padding:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.stat-card span{
    color:#64748b;
}

.stat-card h2{
    margin-top:8px;
}

.stat-card i{
    font-size:32px;
    color:#2563eb;
}

.action-grid{
    margin-top:25px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:18px;
}

.action-card{
    text-decoration:none;
    color:#0f172a;
    padding:25px;
}

.action-card i{
    font-size:32px;
    color:#2563eb;
    margin-bottom:15px;
}

.empty-box,
.success-box{
    margin-top:25px;
    background:white;
    padding:25px;
    border-radius:20px;
}

.empty-box{
    text-align:center;
}

.empty-box a{
    display:inline-block;
    margin-top:15px;
    background:#2563eb;
    color:white;
    padding:12px 20px;
    border-radius:12px;
    text-decoration:none;
}

.success-box{
    background:#ecfdf5;
    color:#166534;
}

</style>

</body>
</html>