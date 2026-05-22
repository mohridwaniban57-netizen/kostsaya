<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-body">

                    <h3 class="text-center mb-4">
                        Register
                    </h3>

                    <form action="/register" method="post">

                        <div class="mb-3">
                            <label>Nama</label>

                            <input type="text"
                                   name="nama"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control">
                        </div>

                        <button class="btn btn-primary w-100">
                            Register
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->include('layout/footer') ?>