

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

:root{
    --primary:#2563eb;
    --dark:#0f172a;
    --text:#64748b;
    --bg:#f8fafc;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:var(--bg);
}

.jelajahi{
    max-width:1400px;
    margin:auto;
    padding:30px;
}

.page-header{
    margin-bottom:25px;
    text-align:center;
}

.page-header h1{
    font-size:52px;
    color:var(--dark);
}

.page-header p{
    font-size:20px;
    color:var(--text);
    margin-top:10px;
}

/* FILTER */

.filter-box{
    background:white;
    padding:18px;
    border-radius:18px;

    display:flex;
    flex-wrap:wrap;
    gap:12px;

    margin-bottom:30px;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);
}

.filter-box select{
    width:180px;
    height:45px;

    border:1px solid #e2e8f0;
    border-radius:10px;

    padding:0 12px;
}

.filter-box button{
    height:45px;

    padding:0 20px;

    border:none;

    border-radius:10px;

    background:var(--primary);
    color:white;

    cursor:pointer;
    font-weight:600;
}

/* RESULT */

.result-info{
    display:flex;
    justify-content:space-between;
    align-items:center;

    margin-bottom:20px;
}

.result-info h3{
    font-size:18px;
}

.result-info span{
    color:var(--text);
}

/* KOST GRID */

.kost-grid{
    display:grid;

    grid-template-columns:
    repeat(4,1fr);

    gap:20px;
}

.kost-card{
    background:white;

    border-radius:20px;

    overflow:hidden;

    transition:.3s;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);
}

.kost-card:hover{
    transform:translateY(-5px);
}

.kost-image{
    position:relative;
}

.kost-image img{
    width:100%;
    height:180px;
    object-fit:cover;
}

.badge{
    position:absolute;

    top:12px;
    left:12px;

    background:#22c55e;
    color:white;

    padding:6px 10px;

    border-radius:8px;

    font-size:11px;
}

.kost-content{
    padding:18px;
}

.kost-content h3{
    font-size:18px;
    margin-bottom:8px;
}

.location{
    color:var(--text);
    font-size:13px;

    margin-bottom:12px;
}

.facilities{
    display:flex;
    gap:8px;
    flex-wrap:wrap;

    margin-bottom:12px;
}

.facilities span{
    background:#f1f5f9;

    padding:6px 10px;

    border-radius:8px;

    font-size:11px;
}

.rating{
    color:#f59e0b;
    font-size:13px;

    margin-bottom:15px;
}

.card-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.price{
    font-size:18px;
    font-weight:700;
}

.btn-detail{
    background:var(--primary);
    color:white;

    text-decoration:none;

    padding:8px 14px;

    border-radius:10px;

    font-size:13px;
}

.pagination{
    display:flex;
    justify-content:center;

    gap:8px;

    margin-top:40px;
}

.pagination a{
    width:40px;
    height:40px;

    background:white;

    display:flex;
    align-items:center;
    justify-content:center;

    text-decoration:none;

    color:var(--dark);

    border-radius:10px;
}

.pagination .active{
    background:var(--primary);
    color:white;
}

@media(max-width:1200px){

    .kost-grid{
        grid-template-columns:
        repeat(3,1fr);
    }

}

@media(max-width:768px){

    .kost-grid{
        grid-template-columns:
        repeat(2,1fr);
    }

    .filter-box{
        flex-direction:column;
    }

    .filter-box select,
    .filter-box button{
        width:100%;
    }

}

@media(max-width:500px){

    .kost-grid{
        grid-template-columns:1fr;
    }

}

</style>

<div class="jelajahi">

<div class="page-header">

    <h1>Jelajahi Kost</h1>

    <p>
        Temukan kost terbaik sesuai kebutuhanmu
    </p>

</div>

<div class="filter-box">

    <select>
        <option>Semua Lokasi</option>
        <option>Tondo</option>
        <option>Talise</option>
        <option>Besusu Barat</option>
        <option>Birobuli Selatan</option>
    </select>

    <select>
        <option>Semua Harga</option>
        <option>&lt; Rp500.000</option>
        <option>Rp500.000 - Rp1.000.000</option>
        <option>Rp1.000.000 - Rp1.500.000</option>
        <option>&gt; Rp1.500.000</option>
    </select>

    <select>
        <option>Jenis Kost</option>
        <option>Putra</option>
        <option>Putri</option>
        <option>Campur</option>
    </select>

    <select>
        <option>Fasilitas</option>
        <option>WiFi</option>
        <option>AC</option>
        <option>Kamar Mandi Dalam</option>
        <option>CCTV</option>
    </select>

    <button>
        Filter
    </button>

</div>

<div class="result-info">

    <h3>12 Kost Ditemukan</h3>

    <span>Menampilkan hasil terbaik</span>

</div>

<div class="kost-grid">

<?php if(!empty($kost)): ?>

<?php foreach($kost as $k): ?>

<div class="kost-card">

<div class="kost-image">

<img
src="<?= !empty($k['foto'])

? base_url('uploads/'.$k['foto'])

: base_url('img/orange.jpg') ?>">

</div>

<div class="kost-content">

<h3>

<?= $k['nama_kos'] ?>

</h3>

<div class="location">

<i class="fa-solid fa-location-dot"></i>

<?= $k['lokasi'] ?>

</div>



<div class="card-footer">

<div class="price">

Rp<?= number_format(
$k['harga'],
0,
',',
'.'
) ?>

<small
style="
display:block;
font-size:11px;
color:#64748b;
">

/bulan

</small>

</div>

<a

href="<?= site_url(
'detail/'.$k['kos_id']
) ?>"

class="btn-detail">

Detail

</a>

</div>

</div>

</div>

<?php endforeach; ?>

<?php else: ?>

<h2
style="
text-align:center;
padding:60px;
">

Belum ada data kost

</h2>

<?php endif; ?>


</div>