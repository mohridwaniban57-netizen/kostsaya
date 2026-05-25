<!-- favorit/footer.php -->

<footer class="footer">

    <!-- BACKGROUND BLUR -->

    <div class="footer-blur blur-1"></div>
    <div class="footer-blur blur-2"></div>

    <div class="footer-container">

        <!-- LEFT -->

        <div class="footer-brand">

            <h2>
                Kost<span>Saya</span>
            </h2>

            <p>
                Platform pencarian kost Kota Palu,
                cepat, aman, dan nyaman untuk mahasiswa maupun pekerja.
            </p>

            <div class="social-icons">

                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-youtube"></i>
                </a>

            </div>

        </div>

        <!-- MENU -->

        <div class="footer-links">

            <h3>Navigasi</h3>

            <a href="#">Beranda</a>
            <a href="#">Cari Kost</a>
            <a href="#">Favorit</a>
            <a href="#">Tentang</a>

        </div>

        <!-- MENU -->

        <div class="footer-links">

            <h3>Layanan</h3>

            <a href="#">Kost Putra</a>
            <a href="#">Kost Putri</a>
            <a href="#">Kost Campur</a>
            <a href="#">Premium Room</a>

        </div>

        <!-- CONTACT -->

        <div class="footer-links">

            <h3>Kontak</h3>

            <a href="#">
                <i class="fa-solid fa-envelope"></i>
                support@kostku.id
            </a>

            <a href="#">
                <i class="fa-solid fa-phone"></i>
                +62 812 3456 7890
            </a>

            <a href="#">
                <i class="fa-solid fa-location-dot"></i>
                Surabaya, Indonesia
            </a>

        </div>

    </div>

    <!-- BOTTOM -->

    <div class="footer-bottom">

        <p>
            © 2026 KostSaya. All Rights Reserved.
        </p>

    </div>

</footer>

<style>

/* =========================
   FOOTER
========================= */

.footer{

    position:relative;

    background:#090f1d;
    color:white;

    overflow:hidden;

    margin-top:120px;
}

/* =========================
   BLUR EFFECT
========================= */

.footer-blur{

    position:absolute;
    border-radius:50%;
    filter:blur(120px);
    opacity:.25;
}

.blur-1{

    width:300px;
    height:300px;

    background:#2563eb;

    top:-100px;
    left:-100px;

    animation:floatBlur 8s ease-in-out infinite;
}

.blur-2{

    width:350px;
    height:350px;

    background:#7c3aed;

    bottom:-150px;
    right:-100px;

    animation:floatBlur 10s ease-in-out infinite;
}

@keyframes floatBlur{

    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(30px);
    }

    100%{
        transform:translateY(0px);
    }

}

/* =========================
   CONTAINER
========================= */

.footer-container{

    max-width:1400px;
    margin:auto;

    padding:90px 80px 60px;

    display:grid;
    grid-template-columns:2fr 1fr 1fr 1.2fr;
    gap:50px;

    position:relative;
    z-index:2;
}

/* =========================
   BRAND
========================= */

.footer-brand h2{

    font-size:42px;
    margin-bottom:20px;
    font-weight:800;
}

.footer-brand h2 span{
    color:#60a5fa;
}

.footer-brand p{

    color:#cbd5e1;
    line-height:1.9;
    margin-bottom:30px;

    max-width:420px;
}

/* =========================
   SOCIAL
========================= */

.social-icons{
    display:flex;
    gap:15px;
}

.social-icons a{

    width:48px;
    height:48px;

    border-radius:16px;

    background:rgba(255,255,255,.08);

    display:flex;
    align-items:center;
    justify-content:center;

    color:white;
    text-decoration:none;

    font-size:18px;

    transition:.35s;
    backdrop-filter:blur(10px);
}

.social-icons a:hover{

    transform:translateY(-6px);

    background:#2563eb;

    box-shadow:0 15px 25px rgba(37,99,235,.35);
}

/* =========================
   LINKS
========================= */

.footer-links h3{

    margin-bottom:25px;
    font-size:22px;
}

.footer-links a{

    display:flex;
    align-items:center;
    gap:10px;

    margin-bottom:18px;

    text-decoration:none;
    color:#cbd5e1;

    transition:.3s;
}

.footer-links a:hover{

    color:#60a5fa;
    transform:translateX(6px);
}

/* =========================
   BOTTOM
========================= */

.footer-bottom{

    border-top:1px solid rgba(255,255,255,.08);

    padding:25px;

    text-align:center;

    position:relative;
    z-index:2;
}

.footer-bottom p{
    color:#94a3b8;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:1000px){

    .footer-container{
        grid-template-columns:1fr 1fr;
    }

}

@media(max-width:700px){

    .footer-container{

        grid-template-columns:1fr;

        padding:70px 25px 50px;
    }

    .footer-brand h2{
        font-size:34px;
    }

}

</style>