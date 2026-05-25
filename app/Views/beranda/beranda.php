<?= $this->include('favorit/header'); ?>

<!-- FONT AWESOME -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<!-- GOOGLE FONT -->
<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">

<style>

/* =========================
   ROOT
========================= */

:root{
    --primary:#2563eb;
    --secondary:#7c3aed;
    --dark:#0f172a;
    --text:#64748b;
    --white:#ffffff;
    --bg:#f8fafc;
}

/* =========================
   RESET
========================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

html{
    scroll-behavior:smooth;
}

body{
    background:var(--bg);
    overflow-x:hidden;
    color:var(--dark);
}

/* =========================
   BACKGROUND
========================= */

.bg-grid{
    position:fixed;
    inset:0;

    background-image:
    linear-gradient(rgba(15,23,42,.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(15,23,42,.03) 1px, transparent 1px);

    background-size:40px 40px;
    z-index:-3;
}

.blur{
    position:fixed;
    border-radius:50%;
    filter:blur(120px);
    z-index:-2;
    opacity:.25;
}

.blur-1{
    width:400px;
    height:400px;
    background:var(--primary);

    top:-120px;
    left:-120px;

    animation:floatY 8s infinite ease-in-out;
}

.blur-2{
    width:450px;
    height:450px;
    background:var(--secondary);

    bottom:-150px;
    right:-150px;

    animation:floatX 10s infinite ease-in-out;
}

/* =========================
   SEARCH BAR
========================= */

.search-navbar{
    width:100%;
    padding:30px 80px 0;
    position:relative;
    z-index:10;
}

.search-trigger{
    width:100%;
    max-width:850px;

    margin:auto;

    height:70px;

    border:none;
    border-radius:22px;

    background:rgba(255,255,255,.9);
    backdrop-filter:blur(20px);

    display:flex;
    align-items:center;
    gap:15px;

    padding:0 28px;

    font-size:17px;
    color:var(--text);

    cursor:pointer;

    box-shadow:
    0 15px 45px rgba(0,0,0,.06);

    transition:.3s;
}

.search-trigger:hover{
    transform:translateY(-3px);
}

.search-trigger i{
    color:var(--primary);
    font-size:20px;
}

/* =========================
   HERO
========================= */

.hero{
    min-height:100vh;

    display:flex;
    align-items:center;

    padding:80px 80px 120px;
}

.hero-wrapper{
    width:100%;
    max-width:1400px;

    margin:auto;

    display:grid;
    grid-template-columns:1fr 1fr;

    gap:80px;
    align-items:center;
}

/* HERO LEFT */

.hero-text{
    animation:fadeLeft 1s ease;
}

.hero-badge{
    display:inline-flex;
    align-items:center;
    gap:10px;

    padding:14px 22px;

    border-radius:50px;

    background:rgba(255,255,255,.8);
    backdrop-filter:blur(20px);

    box-shadow:0 10px 30px rgba(0,0,0,.05);

    color:var(--primary);
    font-weight:600;

    margin-bottom:30px;
}

.hero-text h1{
    font-size:72px;
    line-height:1.1;

    font-weight:800;

    margin-bottom:25px;
}

.hero-text h1 span{
    background:linear-gradient(
        135deg,
        var(--primary),
        var(--secondary)
    );

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.hero-text p{
    font-size:18px;
    line-height:1.9;

    color:var(--text);

    margin-bottom:40px;
    max-width:650px;
}

/* BUTTON */

.hero-btns{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.btn-primary,
.btn-outline{
    padding:18px 34px;

    border-radius:18px;

    text-decoration:none;
    font-weight:600;

    transition:.4s;
}

.btn-primary{
    background:linear-gradient(
        135deg,
        var(--primary),
        var(--secondary)
    );

    color:white;

    box-shadow:
    0 15px 35px rgba(37,99,235,.25);
}

.btn-primary:hover{
    transform:translateY(-6px);
}

.btn-outline{
    background:white;
    color:var(--dark);

    border:1px solid rgba(0,0,0,.05);

    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.btn-outline:hover{
    transform:translateY(-6px);
}

/* HERO RIGHT */

.hero-image{
    position:relative;
    animation:fadeUp 1s ease;
}

.hero-image img{
    width:100%;
    height:650px;

    object-fit:cover;

    border-radius:40px;

    box-shadow:
    0 30px 80px rgba(0,0,0,.15);
}

/* FLOAT CARD */

.float-card{
    position:absolute;

    left:-50px;
    bottom:40px;

    width:320px;

    background:rgba(255,255,255,.9);
    backdrop-filter:blur(20px);

    border-radius:30px;

    padding:30px;

    box-shadow:
    0 25px 60px rgba(0,0,0,.12);

    animation:floating 4s infinite ease-in-out;
}

.float-card h3{
    font-size:28px;
    margin-bottom:12px;
}

.float-card p{
    color:var(--text);
    line-height:1.8;

    margin-bottom:25px;
}

.float-stats{
    display:flex;
    justify-content:space-between;
}

.float-stats h4{
    font-size:24px;
    color:var(--primary);
}

.float-stats span{
    font-size:13px;
    color:var(--text);
}

/* =========================
   SECTION
========================= */

.section{
    padding:120px 80px;
}

.section-title{
    text-align:center;
    margin-bottom:70px;
}

.section-title h2{
    font-size:52px;
    margin-bottom:15px;
}

.section-title p{
    color:var(--text);
    font-size:18px;
}

/* =========================
   FEATURE
========================= */

.feature-grid{
    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(280px,1fr));

    gap:30px;
}

.feature{
    background:rgba(255,255,255,.8);
    backdrop-filter:blur(20px);

    border-radius:35px;

    padding:45px 35px;

    transition:.4s;

    border:1px solid rgba(255,255,255,.4);

    box-shadow:
    0 20px 50px rgba(0,0,0,.05);
}

.feature:hover{
    transform:translateY(-10px);
}

.feature-icon{
    width:90px;
    height:90px;

    border-radius:28px;

    background:linear-gradient(
        135deg,
        rgba(37,99,235,.15),
        rgba(124,58,237,.15)
    );

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:34px;

    color:var(--primary);

    margin-bottom:25px;
}

.feature h3{
    font-size:28px;
    margin-bottom:15px;
}

.feature p{
    color:var(--text);
    line-height:1.9;
}

/* =========================
   KOST CARD
========================= */

.kost-grid{
    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(320px,1fr));

    gap:35px;
}

.kost-card{
    background:white;

    border-radius:35px;
    overflow:hidden;

    transition:.5s;

    box-shadow:
    0 15px 45px rgba(0,0,0,.06);
}

.kost-card:hover{
    transform:translateY(-12px);
}

.kost-image{
    overflow:hidden;
}

.kost-image img{
    width:100%;
    height:260px;

    object-fit:cover;

    transition:.6s;
}

.kost-card:hover img{
    transform:scale(1.08);
}

.kost-content{
    padding:30px;
}

.kost-content h3{
    font-size:28px;
    margin-bottom:10px;
}

.kost-content p{
    color:var(--text);
    line-height:1.8;

    margin-bottom:20px;
}

.tags{
    display:flex;
    gap:10px;
    flex-wrap:wrap;

    margin-bottom:25px;
}

.tags span{
    padding:10px 15px;

    border-radius:14px;

    background:#eff6ff;
    color:var(--primary);

    font-size:13px;
    font-weight:600;
}

.kost-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.price{
    font-size:26px;
    font-weight:700;
}

.detail-btn{
    border:none;

    background:var(--dark);
    color:white;

    padding:14px 24px;

    border-radius:15px;

    cursor:pointer;

    transition:.4s;
}

.detail-btn:hover{
    background:var(--primary);
}

/* =========================
   CTA
========================= */

.cta{
    background:linear-gradient(
        135deg,
        var(--primary),
        var(--secondary)
    );

    padding:90px 50px;

    border-radius:45px;

    text-align:center;
    color:white;

    box-shadow:
    0 30px 80px rgba(37,99,235,.25);
}

.cta h2{
    font-size:58px;
    margin-bottom:20px;
}

.cta p{
    max-width:700px;

    margin:auto;
    margin-bottom:40px;

    line-height:1.9;

    color:#e2e8f0;
}

/* =========================
   ANIMATION
========================= */

@keyframes fadeLeft{
    from{
        opacity:0;
        transform:translateX(-60px);
    }

    to{
        opacity:1;
        transform:translateX(0);
    }
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(60px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes floating{
    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(-12px);
    }

    100%{
        transform:translateY(0px);
    }
}

@keyframes floatY{
    0%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(40px);
    }

    100%{
        transform:translateY(0);
    }
}

@keyframes floatX{
    0%{
        transform:translateX(0);
    }

    50%{
        transform:translateX(-40px);
    }

    100%{
        transform:translateX(0);
    }
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:1100px){

    .hero-wrapper{
        grid-template-columns:1fr;
    }

    .hero-text h1{
        font-size:54px;
    }
}

@media(max-width:768px){

    .hero,
    .section{
        padding:90px 25px;
    }

    .search-navbar{
        padding:20px 20px 0;
    }

    .hero-text h1{
        font-size:42px;
    }

    .section-title h2{
        font-size:38px;
    }

    .float-card{
        position:relative;

        width:100%;

        left:0;
        bottom:0;

        margin-top:20px;
    }
}

</style>

<!-- BACKGROUND -->

<div class="bg-grid"></div>

<div class="blur blur-1"></div>
<div class="blur blur-2"></div>

<!-- SEARCH BAR -->


<!-- HERO -->

<section class="hero">

    <div class="hero-wrapper">

        <!-- HERO LEFT -->

        <div class="hero-text">

            <div class="hero-badge">

                <i class="fa-solid fa-location-dot"></i>

                Platform Kost Modern Indonesia

            </div>

            <h1>
                Temukan Hunian
                <span>Modern</span>
                dan Nyaman
                Untuk Hidup Lebih Produktif
            </h1>

            <p>
                Kost premium dengan fasilitas lengkap,
                desain elegan, dan lokasi strategis
                untuk mahasiswa maupun pekerja modern.
            </p>

            <div class="hero-btns">

                <a href="#" class="btn-primary">
                    Cari Kost
                </a>

                <a href="favorit" class="btn-outline">
                    Lihat Favorit
                </a>

            </div>

        </div>

        <!-- HERO RIGHT -->

        <div class="hero-image">

            <img src="<?= base_url('img/orange.jpg'); ?>" alt="Kost Modern">

            <div class="float-card">

                <h3>Kost Elite Residence</h3>

                <p>
                    Hunian eksklusif dengan suasana nyaman,
                    aman, dan modern.
                </p>

                <div class="float-stats">

                    <div>
                        <h4>500+</h4>
                        <span>Kost</span>
                    </div>

                    <div>
                        <h4>4.9</h4>
                        <span>Rating</span>
                    </div>

                    <div>
                        <h4>24H</h4>
                        <span>Support</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FEATURE -->

<section class="section">

    <div class="section-title">

        <h2>Kenapa Memilih Kami?</h2>

        <p>
            Pengalaman mencari kost yang lebih modern dan profesional.
        </p>

    </div>

    <div class="feature-grid">

        <!-- FEATURE 1 -->

        <div class="feature">

            <div class="feature-icon">
                <i class="fa-solid fa-shield-heart"></i>
            </div>

            <h3>Keamanan Premium</h3>

            <p>
                CCTV, akses aman, dan lingkungan nyaman
                untuk kehidupan sehari-hari.
            </p>

        </div>

        <!-- FEATURE 2 -->

        <div class="feature">

            <div class="feature-icon">
                <i class="fa-solid fa-wifi"></i>
            </div>

            <h3>Fasilitas Lengkap</h3>

            <p>
                WiFi cepat, AC, laundry, parkir,
                dan fasilitas modern lainnya.
            </p>

        </div>

        <!-- FEATURE 3 -->

        <div class="feature">

            <div class="feature-icon">
                <i class="fa-solid fa-location-dot"></i>
            </div>

            <h3>Lokasi Strategis</h3>

            <p>
                Dekat kampus, kantor,
                pusat kuliner, dan transportasi.
            </p>

        </div>

    </div>

</section>

<!-- POPULAR -->

<section class="section">

    <div class="section-title">

        <h2>Kost Populer</h2>

        <p>
            Pilihan kost favorit dengan desain modern.
        </p>

    </div>

    <div class="kost-grid">

        <div class="kost-card">

            <div class="kost-image">

                <img src="<?= base_url('img/orange.jpg'); ?>"
                     alt="Kost Menteng">

            </div>

            <div class="kost-content">

                <h3>Kost Menteng</h3>

                <p>
                    Hunian nyaman dengan fasilitas premium.
                </p>

                <div class="tags">

                    <span>WiFi</span>
                    <span>AC</span>
                    <span>Parkir</span>

                </div>

                <div class="kost-footer">

                    <div class="price">
                        Rp 2.5jt
                    </div>

                    <button class="detail-btn">
                        Detail
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->

<section class="section">

    <div class="cta">

        <h2>Mulai Cari Kost Impianmu</h2>

        <p>
            Temukan tempat tinggal modern,
            nyaman, dan elegan untuk hidup lebih produktif.
        </p>

        <a href="#" class="btn-outline">
            Mulai Sekarang
        </a>

    </div>

</section>

<?= $this->include('beranda/footer'); ?>