<?= $this->include('layout/header'); ?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

body{
    font-family:'Poppins',sans-serif;
    background:#f8fafc;
}

.bantuan-container{
    max-width:1000px;
    margin:60px auto;
    padding:20px;
}

/* HEADER */
.bantuan-header{
    text-align:center;
    margin-bottom:40px;
}

.bantuan-header h1{
    font-size:40px;
    color:#0f172a;
}

.bantuan-header p{
    color:#64748b;
    margin-top:10px;
}

/* GRID */
.bantuan-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
}

/* CARD */
.bantuan-card{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,0.05);
    transition:.3s;
}

.bantuan-card:hover{
    transform:translateY(-5px);
}

.bantuan-card i{
    font-size:28px;
    color:#2563eb;
    margin-bottom:12px;
}

.bantuan-card h3{
    margin-bottom:10px;
    color:#0f172a;
}

.bantuan-card p{
    color:#64748b;
    line-height:1.6;
}

/* CONTACT BOX */
.contact-box{
    margin-top:40px;
    background:#2563eb;
    color:white;
    padding:30px;
    border-radius:20px;
    text-align:center;
}

.contact-box h2{
    margin-bottom:10px;
}

.contact-box a{
    display:inline-block;
    margin-top:15px;
    background:white;
    color:#2563eb;
    padding:12px 20px;
    border-radius:12px;
    text-decoration:none;
    font-weight:600;
}

</style>

<div class="bantuan-container">

    <!-- HEADER -->
    <div class="bantuan-header">
        <h1>Pusat Bantuan KostSaya</h1>
        <p>Temukan jawaban cepat atau hubungi tim kami</p>
    </div>

    <!-- GRID FAQ -->
    <div class="bantuan-grid">

        <div class="bantuan-card">
            <i class="fa-solid fa-user-plus"></i>
            <h3>Cara Daftar Akun</h3>
            <p>Klik menu daftar, isi data diri, lalu verifikasi email untuk mulai menggunakan KostSaya.</p>
        </div>

        <div class="bantuan-card">
            <i class="fa-solid fa-magnifying-glass"></i>
            <h3>Cara Mencari Kost</h3>
            <p>Gunakan fitur pencarian berdasarkan lokasi, kampus, atau nama kost yang kamu inginkan.</p>
        </div>

        <div class="bantuan-card">
            <i class="fa-solid fa-heart"></i>
            <h3>Menambahkan Favorit</h3>
            <p>Klik ikon hati pada kost untuk menyimpan ke daftar favoritmu.</p>
        </div>

        <div class="bantuan-card">
            <i class="fa-solid fa-credit-card"></i>
            <h3>Pembayaran</h3>
            <p>Pembayaran dilakukan langsung ke pemilik kost sesuai kesepakatan.</p>
        </div>

        <div class="bantuan-card">
            <i class="fa-solid fa-shield-halved"></i>
            <h3>Akun Aman</h3>
            <p>Pastikan tidak membagikan password kepada siapapun demi keamanan akun.</p>
        </div>

        <div class="bantuan-card">
            <i class="fa-solid fa-circle-question"></i>
            <h3>Butuh Bantuan Lain?</h3>
            <p>Tim kami siap membantu jika kamu mengalami kendala saat menggunakan KostSaya.</p>
        </div>

    </div>

    <!-- CONTACT -->
    <div class="contact-box">
        <h2>Masih Bingung?</h2>
        <p>Hubungi kami langsung untuk bantuan lebih lanjut</p>

        <a href="https://wa.me/6281234567890" target="_blank">
            Chat WhatsApp
        </a>
    </div>

</div>

<?= $this->include('layout/footer'); ?>