<?= $this->include('admin/sidebar'); ?>

<div class="content">

<div class="section">

<h2>Detail Pengajuan Kost</h2>

<img src="/uploads/<?= $kost['foto'] ?>" width="250">

<h3><?= $kost['nama_kos'] ?></h3>

<p>
<b>Pemilik :</b>
<?= $kost['nama'] ?>
</p>

<p>
<b>Lokasi :</b>
<?= $kost['lokasi'] ?>
</p>

<p>
<b>Harga :</b>
Rp <?= number_format($kost['harga'],0,',','.') ?>
</p>

<p>
<b>Tipe Kost :</b>
<?= $kost['tipekost'] ?>
</p>

<p>
<b>Fasilitas :</b>
<?= $kost['fasilitas'] ?>
</p>

<p>
<b>Deskripsi :</b>
<?= $kost['deskripsi'] ?>
</p>


<div class="aksi">

<a href="/admin/kost/terima/<?= $kost['kos_id'] ?>" class="terima">
Terima
</a>


<button onclick="showTolak()" class="tolak">
Tolak
</button>

</div>


<div id="formTolak" class="tolak-form">

<h3>
Alasan Penolakan
</h3>


<form action="/admin/kost/tolak/<?= $kost['kos_id'] ?>" method="post">


<textarea name="alasan"
placeholder="Masukkan alasan kenapa kost ditolak..."
required></textarea>


<button type="submit">
Kirim Penolakan
</button>


</form>


</div>


</div>

</div>


<script>

function showTolak(){

document.getElementById('formTolak').style.display='block';

}

</script>



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

.section img{
    border-radius:15px;
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

.aksi a,
.aksi button{
    padding:10px 20px;
    border:none;
    border-radius:10px;
    cursor:pointer;
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


.tolak-form{
    display:none;
    margin-top:25px;
    padding:20px;
    background:#f8fafc;
    border-radius:15px;
}


textarea{

width:100%;
height:120px;
padding:15px;
border-radius:10px;
border:1px solid #cbd5e1;

}


.tolak-form button{

margin-top:15px;
padding:10px 20px;
background:#dc2626;
color:white;
border:none;
border-radius:10px;

}

</style>