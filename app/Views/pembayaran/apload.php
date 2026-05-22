<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-body">

            <h3>Upload Bukti Pembayaran</h3>

            <form action="/pembayaran/upload"
                  method="post"
                  enctype="multipart/form-data">

                <input type="file"
                       name="bukti"
                       class="form-control mb-3">

                <button class="btn btn-success">
                    Upload
                </button>

            </form>

        </div>

    </div>

</div>

<?= $this->include('layout/footer') ?>