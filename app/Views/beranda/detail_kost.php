<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

:root{
--primary:#2563eb;
--dark:#0f172a;
--text:#64748b;
--bg:#f8fafc;
}

body{
background:var(--bg);
}

.detail{

max-width:1200px;

margin:auto;

padding:40px;

}

.detail-card{

background:white;

border-radius:24px;

overflow:hidden;

box-shadow:
0 10px 30px rgba(0,0,0,.06);

}

.detail-img{

width:100%;

height:500px;

object-fit:cover;

}

.detail-content{

padding:40px;

}

.detail-content h1{

font-size:42px;

color:var(--dark);

margin-bottom:15px;

}

.location{

color:var(--text);

margin-bottom:25px;

}

.price{

font-size:36px;

color:var(--primary);

font-weight:700;

margin-bottom:25px;

}

.section-title{

font-size:20px;

margin-bottom:15px;

}

.fasilitas{

display:flex;

gap:10px;

flex-wrap:wrap;

margin-bottom:30px;

}

.fasilitas span{

background:#eff6ff;

color:#2563eb;

padding:10px 14px;

border-radius:10px;

}

.deskripsi{

line-height:1.8;

color:#475569;

}

.booking{

margin-top:40px;

}

.booking a{

background:#2563eb;

color:white;

padding:15px 24px;

border-radius:12px;

text-decoration:none;

}

</style>


<div class="detail">

<div class="detail-card">

<img

class="detail-img"

src="<?= !empty($kos['foto'])

? base_url('uploads/'.$kos['foto'])

: base_url('img/orange.jpg') ?>">

<div class="detail-content">

<h1>

<?= $kos['nama_kos'] ?>

</h1>


<div class="location">

<i class="fa-solid fa-location-dot"></i>

<?= $kos['lokasi'] ?>

</div>


<div class="price">

Rp<?= number_format(
$kos['harga'],
0,
',',
'.'
) ?>

/bulan

</div>


<h3 class="section-title">

Fasilitas

</h3>

<div class="fasilitas">

<?php

$fasilitas =
explode(
',',
$kos['fasilitas']
?? ''
);

foreach($fasilitas as $f):

?>

<span>

<?= trim($f) ?>

</span>

<?php endforeach; ?>

</div>


<h3 class="section-title">

Deskripsi

</h3>

<div class="deskripsi">

<?= $kos['deskripsi']
?? 'Belum ada deskripsi.' ?>

</div>


<div class="booking">

<a href="#">

Booking Sekarang

</a>

</div>

</div>

</div>

</div>