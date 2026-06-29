<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Kost</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?= $this->include('pemilik/sidebar') ?>

<div class="container">

    <a href="<?= base_url('pemilik/kost') ?>" class="back-link">

        <i class="fas fa-arrow-left"></i>
        Kembali ke Kost Saya

    </a>

    <div class="header-kost">

        <h1>
            <?= esc($kos['nama_kos']) ?>
        </h1>

        <?php if($kos['status'] == 'pending'): ?>

            <span class="status pending">
                <i class="fas fa-clock"></i>
                Menunggu Verifikasi Admin
            </span>

        <?php elseif($kos['status'] == 'aktif'): ?>

            <span class="status aktif">
                <i class="fas fa-check-circle"></i>
                Aktif
            </span>

        <?php elseif($kos['status'] == 'ditolak'): ?>

            <span class="status ditolak">
                <i class="fas fa-times-circle"></i>
                Ditolak
            </span>

        <?php endif; ?>

    </div>

    <div class="card">

        <h2>Foto Utama Kost</h2>

        <div class="foto-utama">

            <?php if(!empty($kos['foto'])): ?>

                <img
                    src="<?= base_url('uploads/'.$kos['foto']) ?>"
                    alt="<?= esc($kos['nama_kos']) ?>">

            <?php else: ?>

                <div class="foto-kosong">

                    <i class="fas fa-image"></i>

                    <p>Tidak ada foto kost</p>

                </div>

            <?php endif; ?>

        </div>

    </div>

    <div class="card">

        <h2>Informasi Kost</h2>

        <div class="info-item">

            <label>Nama Kost</label>

            <p><?= esc($kos['nama_kos']) ?></p>

        </div>

        <div class="info-item">

            <label>Jenis Kost</label>

            <p><?= esc($kos['tipekost']) ?></p>

        </div>

        <div class="info-item">

            <label>Lokasi</label>

            <p><?= esc($kos['lokasi']) ?></p>

        </div>

        <div class="info-item">

            <label>Harga</label>

            <p>
                Rp <?= number_format($kos['harga'],0,',','.') ?> / bulan
            </p>

        </div>

        <div class="info-item">

            <label>Status</label>

            <p><?= ucfirst($kos['status']) ?></p>

        </div>

    </div>

    <div class="card">

        <h2>Deskripsi Kost</h2>

        <p class="deskripsi">

            <?= nl2br(esc($kos['deskripsi'])) ?>

        </p>

    </div>

    <div class="card">

        <h2>Foto Kost</h2>

        <div class="galeri">

            <?php if(!empty($kos['foto'])): ?>

                <img
                    src="<?= base_url('uploads/'.$kos['foto']) ?>"
                    alt="Foto Kost">

            <?php else: ?>

                <p>Tidak ada foto.</p>

            <?php endif; ?>

        </div>

    </div>

    <div class="card">

        <h2>Fasilitas</h2>

        <div class="fasilitas">

            <?= nl2br(esc($kos['fasilitas'])) ?>

        </div>

    </div>

    <div class="card">

        <h2>Aksi</h2>

        <div class="action">

            <a href="<?= base_url('pemilik/edit-kost/'.$kos['kos_id']) ?>"
               class="btn edit">

                <i class="fas fa-edit"></i>
                Edit Data

            </a>

            <a href="<?= base_url('pemilik/hapus-kost/'.$kos['kos_id']) ?>"
               class="btn hapus"
               onclick="return confirm('Yakin ingin menghapus kost ini?')">

                <i class="fas fa-trash"></i>
                Hapus Kost

            </a>

        </div>

    </div>

</div>

<style>

body{
    background:#f8fafc;
}

.container{
    margin-left:270px;
    padding:35px;
}

.back-link{
    text-decoration:none;
    color:#2563eb;
    font-weight:600;
}

.header-kost{
    text-align:center;
    margin:25px 0;
}

.header-kost h1{
    font-size:32px;
    color:#0f172a;
    margin-bottom:12px;
}

.card{
    background:white;
    border-radius:20px;
    padding:25px;
    margin-bottom:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.card h2{
    margin-bottom:20px;
    color:#0f172a;
}

/* FOTO UTAMA */

.foto-utama{
    display:flex;
    justify-content:center;
}

.foto-utama img{
    width:100%;
    max-width:700px;
    height:320px;
    object-fit:cover;
    border-radius:15px;
    border:1px solid #e2e8f0;
    transition:.3s;
}

.foto-utama img:hover{
    transform:scale(1.02);
}

/* FOTO KOSONG */

.foto-kosong{
    width:100%;
    max-width:700px;
    height:250px;

    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;

    background:#f8fafc;

    border:2px dashed #cbd5e1;
    border-radius:15px;
}

.foto-kosong i{
    font-size:50px;
    color:#94a3b8;
    margin-bottom:10px;
}

.foto-kosong p{
    color:#64748b;
}

/* INFORMASI */

.info-item{
    margin-bottom:20px;
}

.info-item:last-child{
    margin-bottom:0;
}

.info-item label{
    display:block;
    font-weight:700;
    color:#0f172a;
    margin-bottom:5px;
}

.info-item p{
    color:#475569;
    line-height:1.7;
}

/* DESKRIPSI */

.deskripsi{
    line-height:1.9;
    color:#475569;
}

/* STATUS */

.status{
    display:inline-block;
    padding:10px 18px;
    border-radius:30px;
    font-size:13px;
    font-weight:600;
}

.pending{
    background:#fef3c7;
    color:#d97706;
}

.aktif{
    background:#dcfce7;
    color:#16a34a;
}

.ditolak{
    background:#fee2e2;
    color:#dc2626;
}

/* GALERI */

.galeri{
    display:flex;
    justify-content:center;
}

.galeri img{
    width:180px;
    height:130px;
    object-fit:cover;
    border-radius:12px;
    border:1px solid #e2e8f0;
    transition:.3s;
}

.galeri img:hover{
    transform:scale(1.05);
}

/* FASILITAS */

.fasilitas{
    line-height:2;
    color:#475569;
}

/* BUTTON */

.action{
    display:flex;
    gap:15px;
}

.btn{
    text-decoration:none;
    padding:14px 20px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
}

.btn:hover{
    opacity:.9;
}

.edit{
    background:#dbeafe;
    color:#2563eb;
}

.hapus{
    background:#fee2e2;
    color:#dc2626;
}

/* RESPONSIVE */

@media(max-width:768px){

    .container{
        margin-left:0;
        padding:20px;
    }

    .header-kost h1{
        font-size:26px;
    }

    .foto-utama img{
        height:250px;
    }

    .action{
        flex-direction:column;
    }

    .galeri img{
        width:100%;
        height:220px;
    }
}

</style>

</body>
</html>
