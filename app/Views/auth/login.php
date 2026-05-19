<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-body">

                    <h3 class="text-center mb-4">
                        Login
                    </h3>

                    <form action="/login" method="post">

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

                        <button class="btn btn-dark w-100">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->include('layout/footer') ?>