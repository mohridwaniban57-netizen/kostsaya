<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Kost</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>

<?= $this->include('pemilik/sidebar') ?>

<div class="container">

    <div class="page-header">

        <div>
            <h1>Tambah Kost</h1>
            <p>Lengkapi data kost sebelum dikirim untuk verifikasi</p>
        </div>

    </div>

    <?php if(session()->getFlashdata('success')): ?>

    <div class="alert-success">
        <?= session()->getFlashdata('success'); ?>
    </div>

    <?php endif; ?>

    <div class="card">

        <form action="<?= base_url('pemilik/simpan-kost') ?>"
              method="post"
              enctype="multipart/form-data">

            <div class="form-group">
                <label>Nama Kost</label>
                <input type="text"
                       name="nama_kos"
                       placeholder="Masukkan nama kost"
                       required>
            </div>

            <div class="form-group">
                <label>Foto Kost</label>

                <input type="file"
                       name="foto"
                       accept="image/*"
                       required>
            </div>

            <div class="form-group">
                <label>Lokasi</label>

                <textarea name="lokasi"
                          rows="3"
                          placeholder="Masukkan alamat lengkap"
                          required></textarea>
            </div>

            <div class="form-group">
                <label>Harga per Bulan</label>

                <input type="number"
                       name="harga"
                       placeholder="Contoh: 750000"
                       required>
            </div>

            <div class="form-group">
                <label>Tipe Kost</label>

                <select name="tipekost" required>

                    <option value="">Pilih Tipe Kost</option>

                    <option value="Putra">Putra</option>

                    <option value="Putri">Putri</option>

                    <option value="Campur">Campur</option>

                </select>

            </div>

            <div class="form-group">
                <label>Deskripsi</label>

                <textarea name="deskripsi"
                          rows="5"
                          placeholder="Jelaskan kost Anda"></textarea>
            </div>

            <div class="form-group">
                <label>Fasilitas</label>

                <textarea name="fasilitas"
                          rows="4"
                          placeholder="Contoh: WiFi, AC, Lemari, Parkiran"></textarea>
            </div>

            <div class="button-group">

                <button type="submit"
                        name="status"
                        value="draft"
                        class="btn draft">

                    <i class="fas fa-save"></i>
                    Simpan Draft

                </button>

                <button type="submit"
                        name="status"
                        value="pending"
                        class="btn verifikasi">

                    <i class="fas fa-paper-plane"></i>
                    Kirim Verifikasi

                </button>

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
.form-group select{
    width:100%;
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
}

.alert-success{
    background:#dcfce7;
    color:#166534;
    padding:15px;
    border-radius:12px;
    margin-bottom:20px;
}

.page-header{
    margin-bottom:25px;
}

.page-header h1{
    color:#0f172a;
    font-size:30px;
}

.page-header p{
    color:#64748b;
    margin-top:5px;
}

.card{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
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
.form-group textarea{
    width:100%;
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    outline:none;
    font-size:14px;
}

.form-group input:focus,
.form-group textarea:focus{
    border-color:#2563eb;
}

.button-group{
    margin-top:30px;
    display:flex;
    gap:15px;
}

.btn{
    border:none;
    padding:14px 22px;
    border-radius:12px;
    cursor:pointer;
    font-size:14px;
    font-weight:600;
}

.draft{
    background:#e2e8f0;
    color:#334155;
}

.verifikasi{
    background:#2563eb;
    color:white;
}

@media(max-width:768px){

    .container{
        margin-left:0;
        padding:20px;
    }

    .button-group{
        flex-direction:column;
    }

}

</style>

</body>
</html>