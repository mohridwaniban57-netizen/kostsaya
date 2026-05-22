<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container mt-4">

    <h2>Booking Kamar</h2>

    <form action="/booking/store" method="post">

        <input type="number"
               name="kamar_id"
               class="form-control mb-3"
               placeholder="ID Kamar">

        <button class="btn btn-primary">
            Booking
        </button>

    </form>

</div>

<?= $this->include('layout/footer') ?>