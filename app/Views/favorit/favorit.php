<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

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
    font-family:'Poppins',sans-serif;
}

body{
    background:var(--bg);
}

/* =========================
   FAVORITE SECTION
========================= */

.favorite-section{
    max-width:1400px;
    margin:auto;
    padding:30px;
}

/* =========================
   HEADER
========================= */

.top-title{
    margin-bottom:25px;
}

.top-title h1{
    font-size:38px;
    color:var(--dark);
    font-weight:800;
}

.top-title p{
    color:var(--text);
    margin-top:8px;
}

/* =========================
   FILTER
========================= */

.filter-box{
    display:flex;
    justify-content:flex-end;
    margin-bottom:25px;
}

.filter-box select{
    width:220px;
    height:45px;

    border:1px solid #e2e8f0;
    border-radius:10px;

    padding:0 12px;

    background:white;
}

/* =========================
   GRID
========================= */

.card-container{
    display:grid;

    grid-template-columns:
    repeat(4,1fr);

    gap:20px;
}

/* =========================
   CARD
========================= */

.card{
    background:white;

    border-radius:20px;

    overflow:hidden;

    transition:.3s;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);
}

.card:hover{
    transform:translateY(-5px);
}

/* =========================
   IMAGE
========================= */

.card-image{
    position:relative;
}

.card-image img{
    width:100%;
    height:180px;
    object-fit:cover;
}


/* FAVORITE */

.favorite-icon{
    position:absolute;

    top:12px;
    right:12px;

    width:35px;
    height:35px;

    border-radius:50%;

    background:white;

    display:flex;
    align-items:center;
    justify-content:center;

    box-shadow:
    0 5px 15px rgba(0,0,0,.1);
}

.favorite-icon i{
    color:#ef4444;
}

/* =========================
   CONTENT
========================= */

.card-content{
    padding:18px;
}

.card-content h3{
    font-size:18px;
    margin-bottom:8px;
}

.location{
    color:var(--text);
    font-size:13px;

    margin-bottom:12px;
}

.facility{
    display:flex;
    gap:8px;
    flex-wrap:wrap;

    margin-bottom:12px;
}

.facility span{
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

.price small{
    display:block;
    font-size:11px;
    color:#64748b;
    font-weight:500;
}

.btn-detail{
    background:var(--primary);
    color:white;

    text-decoration:none;

    padding:8px 14px;

    border-radius:10px;

    font-size:13px;
}

@media(max-width:1200px){

    .card-container{
        grid-template-columns:
        repeat(3,1fr);
    }

}

@media(max-width:768px){

    .card-container{
        grid-template-columns:
        repeat(2,1fr);
    }

    .filter-box{
        justify-content:flex-start;
    }

}

@media(max-width:500px){

    .card-container{
        grid-template-columns:1fr;
    }

}

</style>

<section class="favorite-section">

<div class="top-title">

    <h1>Kost Favorit</h1>

    <p>
        Koleksi kost yang telah Anda simpan.
    </p>

</div>

<div class="filter-box">

    <select id="sortFilter">

        <option value="terbaru">
            Urutkan : Terbaru
        </option>

        <option value="termurah">
            Harga Terendah
        </option>

        <option value="termahal">
            Harga Tertinggi
        </option>

    </select>

</div>

<div class="card-container">

<!-- CARD 1 -->

<div class="card" data-price="2500000" data-date="1">

    <div class="card-image">

        <div class="favorite-icon">
            <i class="fa-solid fa-heart"></i>
        </div>

        <img src="<?= base_url('img/orange.jpg'); ?>">

    </div>

    <div class="card-content">

        <h3>Kost Menteng Residence</h3>

        <div class="location">
            <i class="fa-solid fa-location-dot"></i>
            Jakarta Pusat
        </div>

        <div class="facility">

            <span>WiFi</span>
            <span>AC</span>
            <span>Parkir</span>

        </div>

        <div class="rating">
            ★★★★★ 4.9
        </div>

        <div class="card-footer">

            <div class="price">
                Rp 2.500.000
                <small>/bulan</small>
            </div>

            <a href="#" class="btn-detail">
                Detail
            </a>

        </div>

    </div>

</div>

<!-- CARD 2 -->

<div class="card" data-price="1150000" data-date="2">

    <div class="card-image">

        <div class="favorite-icon">
            <i class="fa-solid fa-heart"></i>
        </div>

        <img src="<?= base_url('img/orange.jpg'); ?>">

    </div>

    <div class="card-content">

        <h3>Wisma Asri Baru</h3>

        <div class="location">
            <i class="fa-solid fa-location-dot"></i>
            Surabaya Selatan
        </div>

        <div class="facility">

            <span>Putri</span>
            <span>Dekat Kampus</span>

        </div>

        <div class="rating">
            ★★★★★ 4.8
        </div>

        <div class="card-footer">

            <div class="price">
                Rp 1.150.000
                <small>/bulan</small>
            </div>

            <a href="#" class="btn-detail">
                Detail
            </a>

        </div>

    </div>

</div>

<!-- CARD 3 -->

<div class="card" data-price="3200000" data-date="3">

    <div class="card-image">

        <div class="favorite-icon">
            <i class="fa-solid fa-heart"></i>
        </div>

        <img src="<?= base_url('img/orange.jpg'); ?>">

    </div>

    <div class="card-content">

        <h3>Grand Kost Premium</h3>

        <div class="location">
            <i class="fa-solid fa-location-dot"></i>
            Jakarta Selatan
        </div>

        <div class="facility">

            <span>WiFi</span>
            <span>AC</span>
            <span>Gym</span>

        </div>

        <div class="rating">
            ★★★★★ 5.0
        </div>

        <div class="card-footer">

            <div class="price">
                Rp 3.200.000
                <small>/bulan</small>
            </div>

            <a href="#" class="btn-detail">
                Detail
            </a>

        </div>

    </div>

</div>

<!-- CARD 4 -->

<div class="card" data-price="1800000" data-date="4">

    <div class="card-image">

        <div class="favorite-icon">
            <i class="fa-solid fa-heart"></i>
        </div>

        <img src="<?= base_url('img/orange.jpg'); ?>">

    </div>

    <div class="card-content">

        <h3>Kost Mawar Indah</h3>

        <div class="location">
            <i class="fa-solid fa-location-dot"></i>
            Malang
        </div>

        <div class="facility">

            <span>AC</span>
            <span>WiFi</span>

        </div>

        <div class="rating">
            ★★★★★ 4.7
        </div>

        <div class="card-footer">

            <div class="price">
                Rp 1.800.000
                <small>/bulan</small>
            </div>

            <a href="#" class="btn-detail">
                Detail
            </a>

        </div>

    </div>

</div>

</div>

</section>

<script>

const sortFilter =
document.getElementById('sortFilter');

const cardContainer =
document.querySelector('.card-container');

sortFilter.addEventListener('change', function(){

    const cards =
    Array.from(document.querySelectorAll('.card'));

    if(this.value === 'termurah'){

        cards.sort((a,b)=>
            a.dataset.price -
            b.dataset.price
        );

    }

    else if(this.value === 'termahal'){

        cards.sort((a,b)=>
            b.dataset.price -
            a.dataset.price
        );

    }

    else{

        cards.sort((a,b)=>
            b.dataset.date -
            a.dataset.date
        );

    }

    cardContainer.innerHTML='';

    cards.forEach(card=>{

        cardContainer.appendChild(card);

    });

});

</script>