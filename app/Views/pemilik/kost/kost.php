<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kost Saya</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?= $this->include('pemilik/sidebar') ?>

<div class="container">

    <?php if(session()->getFlashdata('success')): ?>

        <div class="alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>

    <?php endif; ?>

    <div class="page-header">

        <div>

            <h1>Kost Saya</h1>

            <p>
                Kelola data kost dan pengajuan verifikasi
            </p>

        </div>

        <a href="<?= base_url('pemilik/tambah-kost') ?>"
           class="btn-tambah">

            <i class="fas fa-plus"></i>
            Tambah Kost

        </a>

    </div>

    <div class="card">

        <div class="table-responsive">

            <table>

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Kost</th>
                        <th>Tipe</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                <?php if(empty($kos)): ?>

                    <tr>

                        <td colspan="8" class="empty">

                            <i class="fas fa-building"></i>

                            <p>Belum ada data kost.</p>

                        </td>

                    </tr>

                <?php else: ?>

                    <?php $no = 1; ?>

                    <?php foreach($kos as $item): ?>

                    <tr>

                        <td><?= $no++ ?></td>

                        <td>

                            <?php if(!empty($item['foto'])): ?>

                                <img
                                    src="<?= base_url('uploads/' . $item['foto']) ?>"
                                    class="kost-img">

                            <?php else: ?>

                                Tidak ada foto

                            <?php endif; ?>

                        </td>

                        <td>

                            <strong>
                                <?= esc($item['nama_kos']) ?>
                            </strong>

                        </td>

                        <td>

                            <?= esc($item['tipekost']) ?>

                        </td>

                        <td>

                            <?= esc($item['lokasi']) ?>

                        </td>

                        <td>

                            Rp <?= number_format($item['harga'],0,',','.') ?>

                        </td>

                        <td>

                            <?php if($item['status'] == 'pending'): ?>

                                <span class="status pending">
                                    Menunggu
                                </span>

                            <?php elseif($item['status'] == 'aktif'): ?>

                                <span class="status aktif">
                                    Aktif
                                </span>

                            <?php elseif($item['status'] == 'draft'): ?>

                                <span class="status draft">
                                    Draft
                                </span>

                            <?php elseif($item['status'] == 'ditolak'): ?>

                                <span class="status ditolak">
                                    Ditolak
                                </span>

                            <?php endif; ?>

                        </td>

                            <td>

                                <div class="action">

                                    <a href="<?= base_url('pemilik/detail-kost/' . $item['kos_id']) ?>"
                                    class="btn detail">

                                        <i class="fa fa-eye"></i>
                                        Detail

                                    </a>

                                </div>

                            </td>

                    </tr>

                    <?php endforeach; ?>

                <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<style>

body{
    background:#f8fafc;
}

.container{
    margin-left:270px;
    padding:35px;
}

.alert-success{
    background:#dcfce7;
    color:#166534;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

.page-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.page-header h1{
    color:#0f172a;
    font-size:30px;
}

.page-header p{
    color:#64748b;
}

.btn-tambah{
    background:#2563eb;
    color:white;
    text-decoration:none;
    padding:12px 20px;
    border-radius:10px;
}

.card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.table-responsive{
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#2563eb;
    color:white;
    padding:16px;
    text-align:left;
}

td{
    padding:16px;
    border-bottom:1px solid #e5e7eb;
}

.kost-img{
    width:90px;
    height:70px;
    object-fit:cover;
    border-radius:10px;
}

.status{
    padding:8px 14px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

.pending{
    background:#fef3c7;
    color:#d97706;
}

.aktif{
    background:#dcfce7;
    color:#16a34a;
}

.draft{
    background:#dbeafe;
    color:#2563eb;
}

.ditolak{
    background:#fee2e2;
    color:#dc2626;
}

.action{
    display:flex;
    gap:8px;
}

.btn{
    text-decoration:none;
    padding:8px 12px;
    border-radius:8px;
}

.detail{
    background:#dbeafe;
    color:#2563eb;
}

.empty{
    text-align:center;
    padding:40px;
}

.empty i{
    font-size:40px;
    color:#94a3b8;
    margin-bottom:10px;
}

.empty p{
    margin-top:10px;
    color:#64748b;
}

@media(max-width:768px){

    .container{
        margin-left:0;
        padding:20px;
    }

    .page-header{
        flex-direction:column;
        gap:15px;
        align-items:flex-start;
    }

}

</style>

</body>
</html>