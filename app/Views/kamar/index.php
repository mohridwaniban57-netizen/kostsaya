<?= $this->include('layout/header') ?>


<div class="container mt-4">

    <h2>Data Kamar</h2>

    <table class="table table-bordered">

        <tr>
            <th>No Kamar</th>
            <th>Harga</th>
            <th>Status</th>
        </tr>

        <?php foreach($kamar as $k): ?>

        <tr>

            <td><?= $k['nomor'] ?></td>

            <td>
                Rp<?= number_format($k['harga']) ?>
            </td>

            <td><?= $k['status'] ?></td>

        </tr>

        <?php endforeach; ?>

    </table>

</div>

<?= $this->include('layout/footer') ?>