<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Kost</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?= $this->include('pemilik/sidebar') ?>

<div class="container">

    <a href="<?= base_url('pemilik/kost') ?>" class="back-link">

        <i class="fas fa-arrow-left"></i>
        Kembali ke Kost Saya

    </a>

    <div class="card">

        <div class="page-header">

            <h1>

                <i class="fas fa-edit"></i>
                Edit Data Kost

            </h1>

            <p>
                Perbarui informasi kost Anda
            </p>

        </div>

        <form
            action="<?= base_url('pemilik/update-kost/'.$kos['kos_id']) ?>"
            method="post"
            enctype="multipart/form-data">

            <div class="form-group">

                <label>Nama Kost</label>

                <input
                    type="text"
                    name="nama_kos"
                    value="<?= esc($kos['nama_kos']) ?>"
                    required>

            </div>

            <div class="form-group">

                <label>Tipe Kost</label>

                <select name="tipekost" required>

                    <option value="Putra"
                    <?= $kos['tipekost']=='Putra' ? 'selected' : '' ?>>
                        Putra
                    </option>

                    <option value="Putri"
                    <?= $kos['tipekost']=='Putri' ? 'selected' : '' ?>>
                        Putri
                    </option>

                    <option value="Campur"
                    <?= $kos['tipekost']=='Campur' ? 'selected' : '' ?>>
                        Campur
                    </option>

                </select>

            </div>

            <div class="form-group">

                <label>Lokasi</label>

                <textarea
                    name="lokasi"
                    rows="3"
                    required><?= esc($kos['lokasi']) ?></textarea>

            </div>

            <div class="form-group">

                <label>Harga per Bulan</label>

                <input
                    type="number"
                    name="harga"
                    value="<?= esc($kos['harga']) ?>"
                    required>

            </div>

            <div class="form-group">

                <label>Deskripsi Kost</label>

                <textarea
                    name="deskripsi"
                    rows="6"
                    required><?= esc($kos['deskripsi']) ?></textarea>

            </div>

            <div class="form-group">

                <label>Fasilitas</label>

                <textarea
                    name="fasilitas"
                    rows="4"
                    required><?= esc($kos['fasilitas']) ?></textarea>

            </div>

            <div class="form-group">

                <label>Foto Saat Ini</label>

                <?php if(!empty($kos['foto'])): ?>

                    <div class="preview">

                        <img
                        src="<?= base_url('uploads/'.$kos['foto']) ?>"
                        alt="Foto Kost">

                    </div>

                <?php endif; ?>

            </div>

            <div class="form-group">

                <label>Ganti Foto (Opsional)</label>

                <input
                    type="file"
                    name="foto"
                    accept="image/*">

            </div>

            <div class="button-group">

                <button
                    type="submit"
                    class="btn-simpan">

                    <i class="fas fa-save"></i>
                    Simpan Perubahan

                </button>

                <a
                    href="<?= base_url('pemilik/kost') ?>"
                    class="btn-batal">

                    <i class="fas fa-times"></i>
                    Batal

                </a>

            </div>

        </form>

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

.back-link{
    text-decoration:none;
    color:#2563eb;
    font-weight:600;
    display:inline-block;
    margin-bottom:20px;
}

.card{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.page-header{
    margin-bottom:25px;
}

.page-header h1{
    color:#0f172a;
    font-size:28px;
    margin-bottom:8px;
}

.page-header p{
    color:#64748b;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#0f172a;
}

.form-group input,
.form-group textarea,
.form-group select{
    width:100%;
    padding:12px 15px;
    border:1px solid #cbd5e1;
    border-radius:10px;
    outline:none;
    font-size:14px;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus{
    border-color:#2563eb;
}

.preview{
    margin-top:10px;
}

.preview img{
    width:220px;
    height:150px;
    object-fit:cover;
    border-radius:12px;
    border:1px solid #e2e8f0;
}

.button-group{
    display:flex;
    gap:15px;
    margin-top:30px;
}

.btn-simpan{
    border:none;
    background:#2563eb;
    color:white;
    padding:14px 22px;
    border-radius:12px;
    cursor:pointer;
    font-size:14px;
    font-weight:600;
}

.btn-batal{
    text-decoration:none;
    background:#e2e8f0;
    color:#334155;
    padding:14px 22px;
    border-radius:12px;
    font-weight:600;
}

.btn-simpan:hover{
    opacity:.9;
}

.btn-batal:hover{
    background:#cbd5e1;
}

@media(max-width:768px){

    .container{
        margin-left:0;
        padding:20px;
    }

    .button-group{
        flex-direction:column;
    }

    .preview img{
        width:100%;
        height:auto;
    }

}

</style>

</body>
</html>

