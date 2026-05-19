<?= $this->include('layout/header'); ?>

<section class="hero">

    <!-- KIRI -->
    <div class="hero-text">

        <h2>
            Temukan kost terbaik <br>
            sesuai kebutuhanmu
        </h2>

        <p>
            Cari kost nyaman, aman, dan dekat
            dengan lokasi favoritmu.
        </p>

        <div class="search-box">

            <input type="text" placeholder="Cari kost...">

            <button>Cari</button>

        </div>

    </div>

    <!-- KANAN -->
    <div class="hero-image">

        <img src="<?= base_url('img/kost.jpg'); ?>" alt="Kost">

    </div>

</section>

<?= $this->include('layout/footer'); ?>