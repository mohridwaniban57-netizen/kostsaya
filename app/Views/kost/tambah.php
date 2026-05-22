<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-body">

            <h3>Tambah Kost</h3>

            <form action="/kost/store" method="post">

                <input type="text"
                       name="nama_kost"
                       placeholder="Nama Kost"
                       class="form-control mb-3">

                <input type="text"
                       name="alamat"
                       placeholder="Alamat"
                       class="form-control mb-3">

                <input type="number"
                       name="harga"
                       placeholder="Harga"
                       class="form-control mb-3">

                <button class="btn btn-success">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

<?= $this->include('layout/footer') ?>