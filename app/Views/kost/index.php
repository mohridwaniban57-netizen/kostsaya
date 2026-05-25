<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-4">

        <h2>Daftar Kost</h2>

        <a href="/kost/tambah"
           class="btn btn-success">
            Tambah Kost
        </a>

    </div>

    <div class="row">

        <?php foreach($kost as $k): ?>

            <div class="col-md-4 mb-4">

                <div class="card shadow">

                    <img src="/assets/img/default.jpg"
                         class="card-img-top">

                    <div class="card-body">

                        <h5>
                            <?= $k['nama_kost'] ?>
                        </h5>

                        <p>
                            <?= $k['lokasi'] ?>
                        </p>

                        <p>
                            Rp<?= number_format($k['harga']) ?>
                        </p>

                        <a href="/kost/detail/<?= $k['kos_id'] ?>"
                           class="btn btn-primary">
                            Detail
                        </a>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?= $this->include('layout/footer') ?>