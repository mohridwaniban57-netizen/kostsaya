<?= $this->include('admin/sidebar'); ?>

<div class="content">

<div class="welcome">
    <h1>Dashboard Admin</h1>
    <p>Kelola seluruh aktivitas sistem KostSaya</p>
</div>

<div class="cards">

<div class="card">
    <div>
        <span>Total Pengguna</span>
        <h2><?= $totalUser ?? 0 ?></h2>
    </div>
    <i class="fas fa-users"></i>
</div>

<div class="card">
    <div>
        <span>Pemilik Kost</span>
        <h2><?= $totalPemilik ?? 0 ?></h2>
    </div>
    <i class="fas fa-user-tie"></i>
</div>

<div class="card">
    <div>
        <span>Total Kost</span>
        <h2><?= $totalKost ?? 0 ?></h2>
    </div>
    <i class="fas fa-building"></i>
</div>

<div class="card">
    <div>
        <span>Menunggu Verifikasi</span>
        <h2><?= $kostPending ?? 0 ?></h2>
    </div>
    <i class="fas fa-clock"></i>
</div>

<div class="card">
    <div>
        <span>Total Kamar</span>
        <h2><?= $totalKamar ?? 0 ?></h2>
    </div>
    <i class="fas fa-bed"></i>
</div>

<div class="card">
    <div>
        <span>Total Pembayaran</span>
        <h2>Rp <?= number_format($totalPembayaran ?? 0,0,',','.') ?></h2>
    </div>
    <i class="fas fa-wallet"></i>
</div>

</div>


<div class="section">

<h2>Pengajuan Kost Menunggu Verifikasi</h2>

<table>

<tr>
    <th>Nama Kost</th>
    <th>Pemilik</th>
    <th>Lokasi</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php if(!empty($kostPendingList)): ?>

<?php foreach($kostPendingList as $kost): ?>

<tr>
    <td><?= $kost['nama_kos'] ?></td>
    <td><?= $kost['nama_pemilik'] ?? '-' ?></td>
    <td><?= $kost['lokasi'] ?></td>
    <td>
        <span class="pending">
            <?= $kost['status'] ?>
        </span>
    </td>
    <td>
        <a href="/admin/kost/detail/<?= $kost['kos_id'] ?>" class="detail">
            Detail
        </a>
    </td>
</tr>

<?php endforeach; ?>

<?php else: ?>

<tr>
    <td colspan="5" align="center">
        Tidak ada pengajuan kost
    </td>
</tr>

<?php endif; ?>

</table>

</div>

</div>


<style>
body{
    margin:0;
    background:#f8fafc;
}

.content{
    margin-left:260px;
    padding:30px;
}

.welcome,.section{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
    margin-bottom:25px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
    gap:20px;
}

.card{
    background:white;
    padding:25px;
    border-radius:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.card span{
    color:#64748b;
}

.card h2{
    margin:10px 0 0;
}

.card i{
    font-size:35px;
    color:#2563eb;
}

.section{
    margin-top:30px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:15px;
    border-bottom:1px solid #e2e8f0;
    text-align:left;
}

.pending{
    background:#fef3c7;
    color:#d97706;
    padding:7px 15px;
    border-radius:20px;
}

.detail{
    background:#dbeafe;
    color:#2563eb;
    padding:8px 15px;
    border-radius:10px;
    text-decoration:none;
}
</style>