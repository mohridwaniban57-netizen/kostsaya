<?= $this->include('favorit/header'); ?>
<script>

function harusLogin(){

    alert('Silakan login terlebih dahulu!');

    window.location.href =
    "<?= base_url('login'); ?>";

}

</script>
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f5f7fb;
}

/* =========================
   DETAIL CONTAINER
========================= */

.detail-container{

    width:90%;
    max-width:1200px;

    margin:40px auto;

    display:grid;

    grid-template-columns:
    1fr 1fr;

    gap:40px;
}

/* =========================
   IMAGE
========================= */

.detail-image{

    background:white;

    border-radius:25px;

    overflow:hidden;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);
}

.detail-image img{

    width:100%;
    height:100%;

    object-fit:cover;
}

/* =========================
   CONTENT
========================= */

.detail-content{

    background:white;

    padding:40px;

    border-radius:25px;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);
}

.detail-content h1{

    font-size:38px;

    margin-bottom:10px;

    color:#0f172a;
}

.location{

    color:#64748b;

    margin-bottom:25px;

    font-size:17px;
}

.price{

    font-size:30px;

    font-weight:700;

    color:#2563eb;

    margin-bottom:25px;
}

.facility{

    margin-bottom:25px;
}

.facility h3{

    margin-bottom:12px;

    color:#0f172a;
}

.facility ul{

    padding-left:20px;

    color:#475569;

    line-height:2;
}

.description{

    color:#64748b;

    line-height:1.8;

    margin-bottom:35px;
}

/* =========================
   BUTTON
========================= */

.action-btn{

    display:flex;

    gap:15px;
}

.action-btn button{

    flex:1;

    height:55px;

    border:none;

    border-radius:16px;

    font-size:16px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;
}

.booking-btn{

    background:#2563eb;

    color:white;
}

.chat-btn{

    background:#e2e8f0;

    color:#0f172a;
}

.action-btn button:hover{

    transform:translateY(-3px);
}

/* =========================
   POPUP LOGIN
========================= */

.popup-overlay{

    position:fixed;

    top:0;
    left:0;

    width:100%;
    height:100%;

    background:
    rgba(0,0,0,.45);

    display:none;

    align-items:center;
    justify-content:center;

    z-index:9999;
}

.popup-box{

    width:380px;

    background:white;

    border-radius:22px;

    padding:35px 30px;

    text-align:center;

    position:relative;

    animation:muncul .3s ease;

    box-shadow:
    0 15px 40px rgba(0,0,0,.15);
}

.popup-box h2{

    color:#0f172a;

    margin-bottom:12px;

    font-size:28px;
}

.popup-box p{

    color:#64748b;

    line-height:1.7;

    margin-bottom:25px;

    font-size:15px;
}

.popup-box button{

    width:100%;
    height:50px;

    border:none;

    border-radius:14px;

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

    transition:.3s;
}

.popup-box button:hover{

    transform:translateY(-2px);
}

.close-popup{

    position:absolute;

    top:12px;
    right:18px;

    font-size:28px;

    cursor:pointer;

    color:#64748b;

    transition:.3s;
}

.close-popup:hover{

    color:red;

    transform:scale(1.1);
}

/* =========================
   ANIMATION
========================= */

@keyframes muncul{

    from{

        opacity:0;
        transform:scale(.8);
    }

    to{

        opacity:1;
        transform:scale(1);
    }

}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:900px){

    .detail-container{

        grid-template-columns:1fr;
    }

}

@media(max-width:500px){

    .popup-box{

        width:90%;
    }

}

</style>

<div class="detail-container">

    <!-- IMAGE -->

    <div class="detail-image">

        <img src="<?= base_url('img/orange.jpg'); ?>">

    </div>

    <!-- CONTENT -->

    <div class="detail-content">

        <h1>
            Kost Lavender
        </h1>

        <p class="location">
            Yogyakarta
        </p>

        <div class="price">
            Rp 2.100.000 / bulan
        </div>

        <div class="facility">

            <h3>
                Fasilitas
            </h3>

            <ul>

                <li>WiFi Cepat</li>

                <li>AC</li>

                <li>Laundry</li>

                <li>Kamar Mandi Dalam</li>

                <li>Parkiran Luas</li>

            </ul>

        </div>

        <div class="description">

            Kost nyaman dan modern
            dengan lokasi strategis dekat
            kampus dan pusat kota.
            Cocok untuk mahasiswa
            maupun pekerja.

        </div>

        <div class="action-btn">

            <!-- BOOKING -->

            <?php if(session()->get('user')): ?>

                <a href="<?= base_url('booking'); ?>">

                    <button class="booking-btn">

                        Booking Sekarang

                    </button>

                </a>

            <?php else: ?>

                <button class="booking-btn"
                onclick="harusLogin()">

                    Booking Sekarang

                </button>

            <?php endif; ?>

            <!-- CHAT -->

            <?php if(session()->get('user')): ?>

                <a href="https://wa.me/628123456789">

                    <button class="chat-btn">

                        Chat Pemilik

                    </button>

                </a>

            <?php else: ?>

                <button class="chat-btn"
                onclick="harusLogin()">

                    Chat Pemilik

                </button>

            <?php endif; ?>

        </div>

    </div>

</div>

<!-- POPUP LOGIN -->

<div id="loginPopup" class="popup-overlay">

    <div class="popup-box">

        <span class="close-popup"
        onclick="tutupPopup()">

            &times;

        </span>

        <h2>
            Login Diperlukan
        </h2>

        <p>
            Silakan login terlebih dahulu
            untuk melakukan booking
            atau chat pemilik kost.
        </p>

        <button onclick="keLogin()">

            OK

        </button>

    </div>

</div>

<script>

function harusLogin(){

    document.getElementById('loginPopup')
    .style.display = 'flex';

}

function tutupPopup(){

    document.getElementById('loginPopup')
    .style.display = 'none';

}

function keLogin(){

    window.location.href =
    "<?= base_url('login'); ?>";

}

</script>

<?= $this->include('favorit/footer'); ?>