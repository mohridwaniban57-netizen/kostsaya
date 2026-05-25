<!-- favorit/favorit.php -->

<?= $this->include('favorit/header'); ?>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:
    linear-gradient(to bottom,#f8fbff,#eef4ff);

    color:#0f172a;
}

/* =========================
   FAVORITE SECTION
========================= */

.favorite-section{

    padding:50px 60px;
}

/* =========================
   TOP TITLE
========================= */

.top-title{

    margin-bottom:35px;
}

.top-title h1{

    font-size:46px;
    font-weight:800;

    color:#0f172a;

    margin-bottom:12px;

    letter-spacing:-1px;
}

.top-title p{

    color:#64748b;

    font-size:16px;
}

/* =========================
   FILTER
========================= */

.filter-box{

    display:flex;
    justify-content:flex-end;

    margin-bottom:35px;
}

.filter-box select{

    height:52px;

    padding:0 18px;

    border-radius:16px;

    border:1px solid #dbe3ef;

    background:white;

    cursor:pointer;

    font-size:15px;
    font-weight:500;

    color:#0f172a;

    outline:none;

    transition:.3s;

    box-shadow:
    0 8px 25px rgba(37,99,235,.06);
}

.filter-box select:hover{

    border-color:#2563eb;
}

/* =========================
   CARD CONTAINER
========================= */

.card-container{

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(270px,1fr));

    gap:22px;
}

/* =========================
   CARD
========================= */

.card{

    background:rgba(255,255,255,.85);

    backdrop-filter:blur(10px);

    border-radius:24px;

    overflow:hidden;

    border:1px solid rgba(255,255,255,.5);

    transition:.35s;

    position:relative;

    box-shadow:
    0 10px 28px rgba(15,23,42,.06);
}

.card:hover{

    transform:
    translateY(-8px);

    box-shadow:
    0 20px 45px rgba(37,99,235,.15);
}

/* =========================
   IMAGE
========================= */

.card-image{

    position:relative;

    overflow:hidden;
}

.card-image img{

    width:100%;
    height:190px;

    object-fit:cover;

    transition:.5s;
}

.card:hover .card-image img{

    transform:scale(1.07);
}

/* =========================
   FAVORITE ICON
========================= */

.favorite-icon{

    position:absolute;

    top:16px;
    right:16px;

    width:46px;
    height:46px;

    border-radius:50%;

    background:rgba(255,255,255,.9);

    backdrop-filter:blur(10px);

    display:flex;
    align-items:center;
    justify-content:center;

    color:#ef4444;

    font-size:18px;

    cursor:pointer;

    transition:.3s;

    box-shadow:
    0 10px 25px rgba(0,0,0,.12);
}

.favorite-icon:hover{

    transform:scale(1.08);

    background:#ef4444;

    color:white;
}

/* =========================
   CARD CONTENT
========================= */

.card-content{

    padding:20px;
}

.card-content h3{

    font-size:20px;
    font-weight:700;

    color:#0f172a;

    margin-bottom:6px;
}

.card-content p{

    color:#64748b;

    font-size:14px;
}

/* =========================
   PRICE RATING
========================= */

.price-rating{

    margin:16px 0;

    display:flex;
    justify-content:space-between;
    align-items:center;
}

.price-rating span{

    font-size:16px;
    font-weight:700;

    color:#2563eb;
}

.stars{

    color:#facc15;

    font-size:14px;

    letter-spacing:2px;
}

/* =========================
   FACILITY
========================= */

.facility{

    margin-bottom:20px;

    line-height:1.6;
}

/* =========================
   BUTTON
========================= */

.card-content button{

    width:100%;
    height:48px;

    border:none;

    border-radius:15px;

    background:
    linear-gradient(
    135deg,
    #2563eb,
    #1d4ed8
    );

    color:white;

    font-size:15px;
    font-weight:700;

    cursor:pointer;

    transition:.35s;

    box-shadow:
    0 10px 25px rgba(37,99,235,.25);
}

.card-content button:hover{

    transform:translateY(-3px);

    box-shadow:
    0 16px 35px rgba(37,99,235,.35);
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){

    .favorite-section{

        padding:30px 20px;
    }

    .top-title h1{

        font-size:34px;
    }

    .filter-box{

        justify-content:flex-start;
    }

    .card-container{

        grid-template-columns:1fr;
    }

}

</style>

<section class="favorite-section">

    <div class="top-title">

        <h1>
            Kost Favorit Anda
        </h1>

        <p>
            Koleksi kost impian yang telah Anda simpan.
        </p>

    </div>

    <!-- FILTER -->

    <div class="filter-box">

        <select id="sortFilter">

            <option value="terbaru">
                Urutkan: Terbaru
            </option>

            <option value="termurah">
                Harga Terendah
            </option>

            <option value="termahal">
                Harga Tertinggi
            </option>

        </select>

    </div>

    <!-- CARD CONTAINER -->

    <div class="card-container">

        <!-- CARD 1 -->

        <div class="card" data-price="2500000" data-date="1">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Kost Menteng Residence</h3>

                <p>Jakarta Pusat</p>

                <div class="price-rating">

                    <span>Rp 2.500.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    AC, WiFi, Parkir
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 2 -->

        <div class="card" data-price="1150000" data-date="2">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Wisma Asri Baru</h3>

                <p>Surabaya Selatan</p>

                <div class="price-rating">

                    <span>Rp 1.150.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    Putri, Dekat Kampus
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 3 -->

        <div class="card" data-price="3200000" data-date="3">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Wisma Pusat</h3>

                <p>Bandung</p>

                <div class="price-rating">

                    <span>Rp 3.200.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    Parkir, AC
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 4 -->

        <div class="card" data-price="1800000" data-date="4">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Kost Mawar Indah</h3>

                <p>Malang</p>

                <div class="price-rating">

                    <span>Rp 1.800.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    AC, WiFi
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 5 -->

        <div class="card" data-price="2100000" data-date="5">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Kost Lavender</h3>

                <p>Yogyakarta</p>

                <div class="price-rating">

                    <span>Rp 2.100.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    WiFi, Laundry
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 6 -->

        <div class="card" data-price="2700000" data-date="6">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Elite House</h3>

                <p>Surabaya Barat</p>

                <div class="price-rating">

                    <span>Rp 2.700.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    AC, Smart TV
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 7 -->

        <div class="card" data-price="1450000" data-date="7">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Kost Harmoni</h3>

                <p>Semarang</p>

                <div class="price-rating">

                    <span>Rp 1.450.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    WiFi, Parkir
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 8 -->

        <div class="card" data-price="3900000" data-date="8">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Grand Kost Premium</h3>

                <p>Jakarta Selatan</p>

                <div class="price-rating">

                    <span>Rp 3.900.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    Gym, AC, WiFi
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 9 -->

        <div class="card" data-price="1700000" data-date="9">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Kost Putri Amanah</h3>

                <p>Malang</p>

                <div class="price-rating">

                    <span>Rp 1.700.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    Putri, CCTV
                </p>

                <button>
                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- CARD 10 -->

        <div class="card" data-price="2600000" data-date="10">

            <div class="card-image">

                <img src="<?= base_url('img/orange.jpg'); ?>">

                <div class="favorite-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="card-content">

                <h3>Residence 88</h3>

                <p>Bandung</p>

                <div class="price-rating">

                    <span>Rp 2.600.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>

                <p class="facility">
                    AC, WiFi, Laundry
                </p>

                <button>
                    Lihat Detail
                </button>

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

    // TERMURAH

    if(this.value === 'termurah'){

        cards.sort((a, b) => {

            return a.dataset.price -
            b.dataset.price;

        });

    }

    // TERMAHAL

    else if(this.value === 'termahal'){

        cards.sort((a, b) => {

            return b.dataset.price -
            a.dataset.price;

        });

    }

    // TERBARU

    else{

        cards.sort((a, b) => {

            return b.dataset.date -
            a.dataset.date;

        });

    }

    // RESET

    cardContainer.innerHTML = '';

    // TAMPILKAN ULANG

    cards.forEach(card => {

        cardContainer.appendChild(card);

    });

});

</script>

<?= $this->include('favorit/footer'); ?>