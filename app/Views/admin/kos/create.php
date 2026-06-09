<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Data Kost</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#eef2f7;
}

/* NAVBAR */

.navbar{
    background:#fff;
    height:75px;
    padding:0 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 15px rgba(0,0,0,.05);
}

.logo{
    display:flex;
    align-items:center;
    gap:12px;
}

.logo i{
    color:#2563eb;
    font-size:28px;
}

.logo h2{
    color:#1e293b;
}

.logo p{
    color:#64748b;
    font-size:13px;
}

.profile{
    display:flex;
    align-items:center;
    gap:10px;
}

.avatar{
    width:45px;
    height:45px;
    border-radius:50%;
    background:#2563eb;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* CONTENT */

.container{
    max-width:900px;
    margin:35px auto;
    padding:0 20px;
}

/* BACK BUTTON */

.back-btn{
    display:inline-flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    background:#64748b;
    color:white;
    padding:12px 18px;
    border-radius:10px;
    margin-bottom:20px;
    transition:.3s;
}

.back-btn:hover{
    background:#475569;
}

/* CARD */

.card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.card-header{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:white;
    padding:30px;
}

.card-header h2{
    margin-bottom:5px;
}

.card-body{
    padding:30px;
}

/* ALERT */

.alert{
    background:#fee2e2;
    color:#991b1b;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

.alert ul{
    margin-left:20px;
}

/* FORM */

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#334155;
}

.form-control{
    width:100%;
    padding:14px;
    border:1px solid #dbe2ea;
    border-radius:12px;
    font-size:15px;
    outline:none;
    transition:.3s;
}

.form-control:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.15);
}

textarea.form-control{
    resize:none;
    height:120px;
}

/* PREVIEW */

.preview{
    margin-top:15px;
    text-align:center;
}

.preview img{
    width:220px;
    height:160px;
    object-fit:cover;
    border-radius:15px;
    border:3px solid #e2e8f0;
    display:none;
}

/* BUTTON */

.btn-group{
    display:flex;
    gap:10px;
    margin-top:25px;
}

.btn{
    border:none;
    padding:13px 20px;
    border-radius:10px;
    text-decoration:none;
    color:white;
    cursor:pointer;
    font-weight:600;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-primary{
    background:#2563eb;
}

.btn-secondary{
    background:#64748b;
}

</style>
</head>
<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo">
        <i class="fas fa-building"></i>

        <div>
            <h2>KostSaya</h2>
            <p>Tambah Data Kost</p>
        </div>
    </div>

    <div class="profile">

        <div class="avatar">
            <i class="fas fa-user"></i>
        </div>

        <strong>Administrator</strong>

    </div>

</div>

<!-- CONTENT -->

<div class="container">

    <a href="<?= base_url('admin/kost') ?>" class="back-btn">
        <i class="fas fa-arrow-left"></i>
        Kembali ke Data Kost
    </a>

    <div class="card">

        <div class="card-header">

            <h2>
                <i class="fas fa-plus-circle"></i>
                Tambah Kost Baru
            </h2>

            <p>
                Lengkapi data kost yang akan ditambahkan ke sistem.
            </p>

        </div>

        <div class="card-body">

            <?php if(session()->getFlashdata('errors')) : ?>

                <div class="alert">

                    <strong>Terjadi Kesalahan:</strong>

                    <ul>
                        <?php foreach(session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>

                </div>

            <?php endif; ?>

            <form id="formTambah" enctype="multipart/form-data">

                <?= csrf_field() ?>

                <div class="form-group">

                    <label>Nama Kost</label>

                    <input
                        type="text"
                        name="nama_kos"
                        class="form-control"
                        value="<?= old('nama_kos') ?>"
                        placeholder="Contoh: Kost Mawar Putri"
                        required>

                </div>

                <div class="form-group">

                    <label>Lokasi Kost</label>

                    <textarea
                        name="lokasi"
                        class="form-control"
                        placeholder="Masukkan alamat lengkap kost"
                        required><?= old('lokasi') ?></textarea>

                </div>

                <div class="form-group">

                    <label>Harga Kost</label>

                    <input
                        type="number"
                        name="harga"
                        class="form-control"
                        value="<?= old('harga') ?>"
                        placeholder="Contoh: 750000"
                        required>

                </div>

                <div class="form-group">

                    <label>Upload Foto Kost</label>

                    <input
                        type="file"
                        name="foto"
                        class="form-control"
                        accept="image/*"
                        onchange="previewImage(event)"
                        required>

                    <div class="preview">
                        <img id="preview">
                    </div>

                </div>

                <div class="btn-group">

                    <button type="submit" class="btn btn-primary">

                        <i class="fas fa-save"></i>
                        Simpan Data

                    </button>

                    <a href="<?= base_url('admin/kost') ?>"
                       class="btn btn-secondary">

                        <i class="fas fa-arrow-left"></i>
                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

$('#formTambah').submit(function(e){

    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({

        url: "<?= base_url('admin/kost/store') ?>",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",

        success:function(response){

            if(response.success){

                alert(response.message);

                window.location.href =
                "<?= base_url('admin/kost') ?>";
            }
        }
    });
});

</script>

</body>
</html>