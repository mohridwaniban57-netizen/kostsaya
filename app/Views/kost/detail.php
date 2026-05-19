<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-body">

            <h2><?= $kost['nama_kost'] ?></h2>

            <p><?= $kost['alamat'] ?></p>

            <h4>
                Rp<?= number_format($kost['harga']) ?>
            </h4>

        </div>

    </div>

</div>

<?= $this->include('layout/footer') ?>