<!-- favorit/favorit.php -->

<?= $this->include('favorit/header'); ?>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f5f5f5;
}

/* FAVORITE */

.favorite-section{
    padding:40px 50px;
}

.top-title h1{
    font-size:42px;
    margin-bottom:10px;
    color: #090f1d;
}

.top-title p{
    color: #777;
    margin-bottom:30px;
}

.filter-box{
    display:flex;
    justify-content:flex-end;
    gap:15px;
    margin-bottom:30px;
}

.filter-box select{
    padding:10px 15px;
    border-radius:10px;
    border:1px solid #ddd;
    background:white;
    cursor:pointer;
}

/* CARD */

.card-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:25px;
}

.card{
    background:white;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 3px 12px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card-image{
    position:relative;
}

.card-image img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.favorite-icon{
    position:absolute;
    top:15px;
    right:15px;

    background:white;
    width:45px;
    height:45px;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    color:red;
    font-size:20px;

    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.card-content{
    padding:20px;
}

.card-content h3{
    margin-bottom:8px;
    color:#111827;
}

.card-content p{
    color:#555;
}

.price-rating{
    margin:15px 0;

    display:flex;
    justify-content:space-between;
    align-items:center;
}

.stars{
    color:gold;
    font-size:14px;
}

.facility{
    margin-bottom:20px;
}

.card-content button{
    width:100%;
    background:#0d1b3d;
    color:white;
    border:none;
    padding:13px;
    border-radius:12px;
    cursor:pointer;
    font-weight:bold;
    transition:0.3s;
}

.card-content button:hover{
    background:#162a5c;
}
</style>

<section class="favorite-section">

    <div class="top-title">
        <h1>Kost Favorit Anda</h1>
        <p>Koleksi kost impian yang telah Anda simpan.</p>
    </div>

    <div class="filter-box">
        <select>
            <option>Urutkan: Terbaru</option>
            <option>Harga Terendah</option>
            <option>Harga Tertinggi</option>
        </select>

    </div>

    <div class="card-container">

        <!-- CARD 1 -->
        <div class="card">
            <div class="card-image">
                <img src="<?= base_url('img/orange.jpg'); ?>" alt="Logo">

                <div class="favorite-icon">
                    ❤
                </div>
            </div>

            <div class="card-content">
                <h3>Kost Menteng Residence 1</h3>
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

                <button>Lihat Detail</button>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="card">
            <div class="card-image">
                <img src="<?= base_url('img/orange.jpg'); ?>" alt="Logo">

                <div class="favorite-icon">
                    ❤
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

                <button>Lihat Detail</button>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="card">
            <div class="card-image">
                <img src="<?= base_url('img/orange.jpg'); ?>" alt="Logo">

                <div class="favorite-icon">
                    ❤
                </div>
            </div>

            <div class="card-content">
                <h3>Wisma Pusat</h3>
                <p>Bandung</p>

                <div class="price-rating">
                    <span>Rp 2.500.000 / bln</span>

                    <div class="stars">
                        ★★★★★
                    </div>
                </div>

                <p class="facility">
                    Parkir, AC
                </p>

                <button>Lihat Detail</button>
            </div>
        </div>


        <!-- CARD 1 -->
        <div class="card">
            <div class="card-image">
                <img src="<?= base_url('img/orange.jpg'); ?>" alt="Logo">

                <div class="favorite-icon">
                    ❤
                </div>
            </div>

            <div class="card-content">
                <h3>Kost Menteng Residence 1</h3>
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

                <button>Lihat Detail</button>
            </div>
        </div>

        <!-- CARD 1 -->
        <div class="card">
            <div class="card-image">
                <img src="<?= base_url('img/orange.jpg'); ?>" alt="Logo">

                <div class="favorite-icon">
                    ❤
                </div>
            </div>

            <div class="card-content">
                <h3>Kost Menteng Residence 1</h3>
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

                <button>Lihat Detail</button>
            </div>
        </div>

        <!-- CARD 1 -->
        <div class="card">
            <div class="card-image">
                <img src="<?= base_url('img/orange.jpg'); ?>" alt="Logo">

                <div class="favorite-icon">
                    ❤
                </div>
            </div>

            <div class="card-content">
                <h3>Kost Menteng Residence 1</h3>
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

                <button>Lihat Detail</button>
            </div>
        </div>

        <!-- CARD 1 -->
        <div class="card">
            <div class="card-image">
                <img src="<?= base_url('img/orange.jpg'); ?>" alt="Logo">

                <div class="favorite-icon">
                    ❤
                </div>
            </div>

            <div class="card-content">
                <h3>Kost Menteng Residence 1</h3>
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

                <button>Lihat Detail</button>
            </div>
        </div>

        <!-- CARD 1 -->
        <div class="card">
            <div class="card-image">
                <img src="<?= base_url('img/orange.jpg'); ?>" alt="Logo">

                <div class="favorite-icon">
                    ❤
                </div>
            </div>

            <div class="card-content">
                <h3>Kost Menteng Residence 1</h3>
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

                <button>Lihat Detail</button>
            </div>
        </div>

    

    </div>

</section>

<?= $this->include('favorit/footer'); ?>

