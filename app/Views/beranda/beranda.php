<?= $this->include('layout/header'); ?>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

:root{
    --primary:#2563eb;
    --secondary:#7c3aed;
    --dark:#0f172a;
    --text:#64748b;
    --white:#ffffff;
    --bg:#f8fafc;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:var(--bg);
    overflow-x:hidden;
}

.beranda{
    max-width:1400px;
    margin:auto;
    padding:40px;
}

/* HERO */

.hero{
    display:grid;
    grid-template-columns:1.1fr 1fr;
    gap:60px;
    align-items:center;

    min-height:75vh;
}

.hero-badge{
    display:inline-flex;
    align-items:center;
    gap:10px;

    padding:12px 20px;

    border-radius:50px;

    background:#dbeafe;
    color:var(--primary);

    font-weight:600;

    margin-bottom:25px;
}

.hero h1{
    font-size:70px;
    line-height:1.1;
    font-weight:800;
    color:var(--dark);
}

.hero h1 span{
    color:var(--primary);
}

.hero p{
    margin-top:25px;
    font-size:18px;
    line-height:1.9;
    color:var(--text);
}

.hero-btns{
    display:flex;
    gap:15px;
    margin-top:40px;
}

.btn-main{
    background:var(--primary);
    color:white;
    text-decoration:none;
    padding:18px 32px;
    border-radius:16px;
    font-weight:600;
}

.btn-second{
    background:white;
    color:var(--dark);
    text-decoration:none;
    padding:18px 32px;
    border-radius:16px;
    font-weight:600;
    border:1px solid #e2e8f0;
}

.hero-image{
    position:relative;
}

.hero-image img{
    width:100%;
    height:600px;
    object-fit:cover;
    border-radius:35px;
}

.floating-card{
    position:absolute;
    left:-30px;
    bottom:40px;

    background:white;
    padding:25px 30px;
    border-radius:20px;

    box-shadow:
    0 15px 40px rgba(0,0,0,.08);
}

.floating-card h3{
    color:var(--primary);
    font-size:34px;
}

.floating-card span{
    color:var(--text);
}

/* STATS */

.stats{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;

    margin-top:80px;
}

.stat-card{
    background:white;
    padding:35px;
    border-radius:24px;
    text-align:center;

    box-shadow:
    0 15px 35px rgba(0,0,0,.05);
}

.stat-card h2{
    color:var(--primary);
    font-size:38px;
}

.stat-card p{
    color:var(--text);
}

/* TITLE */

.section-title{
    text-align:center;
    margin-bottom:50px;
}

.section-title h2{
    font-size:50px;
    color:var(--dark);
}

.section-title p{
    margin-top:10px;
    color:var(--text);
}

/* CATEGORY */

.category-section{
    padding:120px 0 80px;
}

.category-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
}

.category-card{
    background:white;
    padding:35px;
    border-radius:25px;
    text-align:center;

    transition:.3s;

    box-shadow:
    0 15px 35px rgba(0,0,0,.05);
}

.category-card:hover{
    transform:translateY(-10px);
}

.category-card i{
    font-size:42px;
    color:var(--primary);
    margin-bottom:15px;
}

.category-card h3{
    font-size:22px;
}

/* KOST */
.badge-populer{
    position:absolute;
    top:15px;
    left:15px;

    background:#2563eb;
    color:white;

    padding:6px 12px;
    border-radius:10px;

    font-size:12px;
    font-weight:600;

    box-shadow:0 10px 20px rgba(0,0,0,.1);
}

.kost-section{
    padding:100px 0;
}

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
    0 10px 25px rgba(225, 255, 0, 0.05);
}

.kost-card:hover{
    transform:translateY(-10px);
}

.kost-image{
    position:relative;
}

.kost-image img{
    width:100%;
    height:180px;
    object-fit:cover;
}

.badge-premium{
    position:absolute;
    top:15px;
    left:15px;

    background:#f59e0b;
    color:white;

    padding:8px 14px;

    border-radius:10px;

    font-size:12px;
    font-weight:600;
}

.rating i{
    color: #f59e0b;
    margin-right:2px;
}

.kost-content{
    padding:25px;
}

.kost-content h3{
    font-size:25px;
    margin-bottom:10px;
}

.kost-content p{
    color:var(--text);
    line-height:1.8;
}

.kost-tags{
    display:flex;
    gap:10px;
    flex-wrap:wrap;

    margin:20px 0;
}

.kost-tags span{
    background:#eff6ff;
    color:var(--primary);

    padding:8px 12px;
    border-radius:10px;
    font-size:13px;
}

.kost-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.price{
    font-size:24px;
    font-weight:700;
}

.detail-btn{
    border:none;
    background:var(--primary);
    color:white;

    padding:12px 20px;
    border-radius:12px;

    cursor:pointer;
    font-weight:600;
}

/* FEATURE */

.feature-section{
    padding:80px 0;
}

.feature-grid{
    display:grid;
    grid-template-columns:
    repeat(auto-fit,minmax(280px,1fr));

    gap:25px;
}

.feature-card{
    background:white;
    padding:40px;
    border-radius:25px;
    text-align:center;

    box-shadow:
    0 15px 35px rgba(0,0,0,.05);
}

.feature-card i{
    font-size:42px;
    color:var(--primary);
    margin-bottom:20px;
}

.feature-card h3{
    margin-bottom:10px;
}

.feature-card p{
    color:var(--text);
    line-height:1.8;
}

/* TESTIMONI */

.testimoni-section{
    padding:100px 0;
}

.testimoni-grid{
    display:grid;
    grid-template-columns:
    repeat(auto-fit,minmax(300px,1fr));

    gap:25px;
}

.testimoni-card{
    background:white;
    padding:35px;
    border-radius:25px;

    box-shadow:
    0 15px 35px rgba(0,0,0,.05);
}

.testimoni-card i{
    color:#f59e0b;
    margin-bottom:15px;
}

.testimoni-card p{
    color:var(--text);
    line-height:1.8;
}

.testimoni-card h4{
    margin-top:20px;
}

/* CTA */

.cta{
    margin-top:50px;

    background:
    linear-gradient(
        135deg,
        var(--primary),
        var(--secondary)
    );

    border-radius:35px;

    text-align:center;

    padding:90px 50px;

    color:white;
}

.cta h2{
    font-size:55px;
    margin-bottom:20px;
}

.cta p{
    max-width:700px;
    margin:auto;
    line-height:1.9;
}

.cta a{
    display:inline-block;

    margin-top:35px;

    background:white;
    color:var(--primary);

    text-decoration:none;

    padding:18px 35px;

    border-radius:16px;

    font-weight:700;
}

/* RESPONSIVE */

@media(max-width:900px){

    .hero{
        grid-template-columns:1fr;
    }

    .hero h1{
        font-size:48px;
    }

    .stats{
        grid-template-columns:1fr 1fr;
    }

    .floating-card{
        left:15px;
    }

}

@media(max-width:600px){

    .beranda{
        padding:20px;
    }

    .hero h1{
        font-size:38px;
    }

    .stats{
        grid-template-columns:1fr;
    }

    .hero-btns{
        flex-direction:column;
    }

    .cta h2{
        font-size:35px;
    }

}

</style>

<div class="beranda">

    <!-- HERO -->

    <section class="hero">

        <div>

            <div class="hero-badge">
                <i class="fa-solid fa-location-dot"></i>
                Platform Kost Sekitaran Palu
            </div>

            <h1>
                Temukan Kost
                <span>Nyaman</span>
                dan Strategis
            </h1>

            <p>
                Ribuan pilihan kost berkualitas dengan fasilitas lengkap,
                lokasi strategis, harga terjangkau, dan proses booking yang mudah.
            </p>

            <div class="hero-btns">

                <a href="<?= base_url('jelajahi') ?>" class="btn-main">
                    Jelajahi Kost
                </a>

                <a href="/favorit" class="btn-second">
                    Lihat Favorit
                </a>

            </div>

        </div>

        <div class="hero-image">

            <img src="<?= base_url('img/orange.jpg'); ?>">

            <div class="floating-card">

                <h3>1500+</h3>

                <span>Kost Terverifikasi</span>

            </div>

        </div>

    </section>

    <!-- STATS -->

    <section class="stats">

        <div class="stat-card">
            <h2>1500+</h2>
            <p>Kost Terdaftar</p>
        </div>

        <div class="stat-card">
            <h2>10000+</h2>
            <p>Pengguna Aktif</p>
        </div>

        <div class="stat-card">
            <h2>4.9</h2>
            <p>Rating</p>
        </div>

        <div class="stat-card">
            <h2>24/7</h2>
            <p>Siap Melayani</p>
        </div>

    </section>

    <!-- KATEGORI -->

    <section class="category-section">

        <div class="section-title">

            <h2>Kategori Kost</h2>

            <p>Pilih sesuai kebutuhanmu</p>

        </div>

        <div class="category-grid">

            <div class="category-card">
                <i class="fa-solid fa-person"></i>
                <h3>Kost Putra</h3>
            </div>

            <div class="category-card">
                <i class="fa-solid fa-person-dress"></i>
                <h3>Kost Putri</h3>
            </div>

            <div class="category-card">
                <i class="fa-solid fa-people-group"></i>
                <h3>Kost Campur</h3>
            </div>

        
        </div>

    </section>

    <!-- KOST -->

    <section class="kost-section">

        <div class="section-title">

            <h2>Kost Populer</h2>

            <p>Rekomendasi pilihan terbaik</p>

        </div>

        <div class="kost-grid">

            <?php for($i=1;$i<=8;$i++): ?>

            <div class="kost-card">

                <div class="kost-image">

                    <div class="badge-populer">
                        Populer
                    </div>

                    <img src="<?= base_url('img/orange.jpg'); ?>">

                </div>

                <div class="kost-content">

                    <h3>Kost Palu <?= $i ?></h3>

                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        Tondo, Kota Palu
                    </div>

                    <div class="kost-tags">

                        <span>WiFi</span>
                        <span>AC</span>
                        <span>Parkir</span>

                    </div>

                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        4.9
                    </div>

                    <div class="kost-footer">

                        <div class="price">
                            Rp850.000
                            <small style="
                                display:block;
                                font-size:11px;
                                color:#64748b;
                                font-weight:500;
                            ">
                                /bulan
                            </small>
                        </div>

                        <button class="detail-btn">
                            Detail
                        </button>

                    </div>

                </div>

            </div>

            <?php endfor; ?>

        </div>

    </section>

    <!-- FITUR -->

    <section class="feature-section">

        <div class="section-title">

            <h2>Kenapa Memilih Kami?</h2>

            <p>Lebih mudah, cepat dan terpercaya</p>

        </div>

        <div class="feature-grid">

            <div class="feature-card">

                <i class="fa-solid fa-shield-halved"></i>

                <h3>Aman</h3>

                <p>
                    Semua kost telah melalui proses verifikasi.
                </p>

            </div>

            <div class="feature-card">

                <i class="fa-solid fa-location-dot"></i>

                <h3>Strategis</h3>

                <p>
                    Dekat kampus, kantor dan pusat aktivitas.
                </p>

            </div>

            <div class="feature-card">

                <i class="fa-solid fa-bolt"></i>

                <h3>Cepat</h3>

                <p>
                    Booking kost hanya dalam beberapa menit.
                </p>

            </div>

        </div>

    </section>

    <!-- TESTIMONI -->

    <section class="testimoni-section">

        <div class="section-title">

            <h2>Testimoni Pengguna</h2>

            <p>Apa kata mereka?</p>

        </div>

        <div class="testimoni-grid">

            <div class="testimoni-card">

                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>

                <p>
                    Sangat membantu menemukan kost dekat kampus
                    dengan harga yang sesuai.
                </p>

                <h4>Arya Saputra</h4>

            </div>

            <div class="testimoni-card">

                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>

                <p>
                    Tampilan website modern dan mudah digunakan.
                </p>

                <h4>Hendra al</h4>

            </div>

            <div class="testimoni-card">

                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>

                <p>
                    Booking cepat dan banyak pilihan kost.
                </p>

                <h4>Budi Santoso</h4>

            </div>

        </div>

    </section>


</div>

<?= $this->include('layout/footer'); ?>