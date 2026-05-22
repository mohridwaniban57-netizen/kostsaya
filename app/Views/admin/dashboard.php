<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-4">

    <h1>Dashboard Admin</h1>

    <div class="row mt-4">

        <div class="col-md-4">

            <div class="card bg-primary text-white">

                <div class="card-body">

                    <h4>Total Kost</h4>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card bg-success text-white">

                <div class="card-body">

                    <h4>Total Booking</h4>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card bg-dark text-white">

                <div class="card-body">

                    <h4>Total User</h4>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->include('layout/footer') ?>