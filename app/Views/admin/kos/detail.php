<?= $this->include('admin/sidebar'); ?>

<div class="content">

    <div class="section">

        <h2>Detail Pengajuan Kost</h2>

        <img src="/uploads/<?= $kost['foto'] ?>" width="250">

        <h3><?= $kost['nama_kos'] ?></h3>

        <p>
            Pemilik :
            <?= $kost['nama'] ?>
        </p>

        <p>
            Lokasi :
            <?= $kost['lokasi'] ?>
        </p>

        <p>
            Harga :
            Rp <?= number_format($kost['harga'],0,',','.') ?>
        </p>

        <p>
            Tipe Kost :
            <?= $kost['tipekost'] ?>
        </p>

        <p>
            Fasilitas :
            <?= $kost['fasilitas'] ?>
        </p>

        <p>
            Deskripsi :
            <?= $kost['deskripsi'] ?>
        </p>

        <div class="aksi">

            <a href="/admin/kost/terima/<?= $kost['kos_id'] ?>" class="terima">
                Terima
            </a>

            <a href="/admin/kost/tolak/<?= $kost['kos_id'] ?>" class="tolak">
                Tolak
            </a>

        </div>

    </div>

</div>


<style>

.content{
    margin-left:260px;
    padding:30px;
    background:#f8fafc;
}

.section{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.section h2{
    margin-bottom:20px;
}

.section img{
    border-radius:15px;
    object-fit:cover;
    margin-bottom:20px;
}

.section p{
    color:#475569;
    line-height:1.6;
}

.aksi{
    margin-top:25px;
    display:flex;
    gap:15px;
}

.aksi a{
    padding:10px 20px;
    border-radius:10px;
    text-decoration:none;
    font-weight:600;
}

.terima{
    background:#16a34a;
    color:white;
}

.tolak{
    background:#dc2626;
    color:white;
}

.terima:hover{
    background:#15803d;
}

.tolak:hover{
    background:#b91c1c;
}

</style>