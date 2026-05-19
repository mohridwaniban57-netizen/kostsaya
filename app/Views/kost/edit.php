<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-body">

            <h3>Edit Kost</h3>

            <form action="/kost/update/<?= $kost['id'] ?>"
                  method="post">

                <input type="text"
                       name="nama_kost"
                       value="<?= $kost['nama_kost'] ?>"
                       class="form-control mb-3">

                <input type="text"
                       name="alamat"
                       value="<?= $kost['alamat'] ?>"
                       class="form-control mb-3">

                <input type="number"
                       name="harga"
                       value="<?= $kost['harga'] ?>"
                       class="form-control mb-3">

                <button class="btn btn-warning">
                    Update
                </button>

            </form>

        </div>

    </div>

</div>

<?= $this->include('layout/footer') ?>