<?= $this->include('layout/header'); ?>

<section class="hero">

    <!-- KIRI -->
    <div class="hero-text">

        <span>WEBSITE PENCARIAN KOST</span>

        <h2>
            Temukan kost terbaik <br>
            sesuai kebutuhanmu
        </h2>

        <p>
            Cari kost nyaman, aman, bersih, dan dekat
            dengan lokasi favoritmu. Temukan berbagai
            pilihan kost dengan harga terbaik hanya di sini.
        </p>

        <!-- BUTTON -->
        <div class="search-box">

            <button onclick="window.location.href='<?= base_url('beranda'); ?>'">
                MASUK KE BERANDA
            </button>

        </div>

    </div>

    <!-- KANAN -->
    <div class="hero-image">

        <img
            src="<?= base_url('img/kost.jpg'); ?>"
            alt="Kost"
        >

    </div>

</section>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body{
        background: #f5f7fb;
    }

    /* HERO */
    .hero{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 60px 8%;
        gap: 50px;
        background: linear-gradient(to right, #ffffff, #eef4ff);
    }

    /* KIRI */
    .hero-text{
        flex: 1;
    }

    .hero-text span{
        color: #2563eb;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .hero-text h2{
        font-size: 55px;
        color: #1e293b;
        line-height: 1.2;
        margin: 20px 0;
    }

    .hero-text p{
        font-size: 18px;
        color: #64748b;
        line-height: 1.7;
        max-width: 500px;
        margin-bottom: 35px;
    }

    /* BUTTON */
    .search-box{
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .search-box button{
        padding: 15px 35px;
        border: none;
        border-radius: 12px;
        background: #2563eb;
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 5px 15px rgba(37,99,235,0.3);
    }

    .search-box button:hover{
        background: #1d4ed8;
        transform: translateY(-3px);
    }

    /* KANAN */
    .hero-image{
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .hero-image img{
        width: 100%;
        max-width: 550px;
        border-radius: 25px;
        object-fit: cover;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    /* RESPONSIVE */
    @media(max-width: 900px){

        .hero{
            flex-direction: column-reverse;
            text-align: center;
            padding-top: 120px;
        }

        .hero-text h2{
            font-size: 38px;
        }

        .hero-text p{
            margin: auto;
            margin-bottom: 30px;
        }

        .search-box{
            justify-content: center;
        }

        .hero-image img{
            max-width: 100%;
        }
    }
</style>

<?= $this->include('layout/footer'); ?>