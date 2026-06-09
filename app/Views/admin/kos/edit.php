<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Data Kost</title>

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
    color:#f59e0b;
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
    background:#f59e0b;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    max-width:900px;
    margin:35px auto;
    padding:0 20px;
}

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

.card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.card-header{
    background:linear-gradient(135deg,#f59e0b,#d97706);
    color:white;
    padding:30px;
}

.card-body{
    padding:30px;
}

.alert{
    background:#fee2e2;
    color:#991b1b;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
}

.form-control{
    width:100%;
    padding:14px;
    border:1px solid #dbe2ea;
    border-radius:12px;
    outline:none;
}

.form-control:focus{
    border-color:#f59e0b;
    box-shadow:0 0 0 4px rgba(245,158,11,.15);
}

textarea.form-control{
    height:120px;
    resize:none;
}

.preview{
    margin-top:15px;
}

.preview img{
    width:250px;
    height:180px;
    object-fit:cover;
    border-radius:15px;
    border:2px solid #e2e8f0;
}

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
}

.btn-warning{
    background:#f59e0b;
}

.btn-secondary{
    background:#64748b;
}

</style>

</head>
<body>

<div class="navbar">

    <div class="logo">

        <i class="fas fa-pen-to-square"></i>

        <div>
            <h2>KostSaya</h2>
            <p>Edit Data Kost</p>
        </div>

    </div>

    <div class="profile">

        <div class="avatar">
            <i class="fas fa-user"></i>
        </div>

        <strong>Administrator</strong>

    </div>

</div>

<div class="container">

    <a href="<?= base_url('admin/kost') ?>" class="back-btn">
        <i class="fas fa-arrow-left"></i>
        Kembali ke Data Kost
    </a>

    <div class="card">

        <div class="card-header">

            <h2>
                <i class="fas fa-edit"></i>
                Edit Data Kost
            </h2>

            <p>Perbarui informasi kost.</p>

        </div>

        <div class="card-body">

            <form id="formEdit" enctype="multipart/form-data">

                <?= csrf_field() ?>

                <div class="form-group">

                    <label>Nama Kost</label>

                    <input
                        type="text"
                        name="nama_kos"
                        class="form-control"
                        value="<?= esc($kost['nama_kos']) ?>"
                        required>

                </div>

                <div class="form-group">

                    <label>Lokasi</label>

                    <textarea
                        name="lokasi"
                        class="form-control"
                        required><?= esc($kost['lokasi']) ?></textarea>

                </div>

                <div class="form-group">

                    <label>Harga</label>

                    <input
                        type="number"
                        name="harga"
                        class="form-control"
                        value="<?= esc($kost['harga']) ?>"
                        required>

                </div>

                <div class="form-group">

                    <label>Foto Saat Ini</label>

                    <?php if(!empty($kost['foto'])) : ?>

                        <div class="preview">

                            <img
                                id="preview"
                                src="<?= base_url('uploads/'.$kost['foto']) ?>">

                        </div>

                    <?php else: ?>

                        <div class="preview">
                            <img id="preview" style="display:none;">
                        </div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                    <label>Ganti Foto</label>

                    <input
                        type="file"
                        name="foto"
                        class="form-control"
                        accept="image/*"
                        onchange="previewImage(event)">

                </div>

                <div class="btn-group">

                    <button type="submit" class="btn btn-warning">

                        <i class="fas fa-save"></i>
                        Update Data

                    </button>

                    <a href="<?= base_url('admin/kost') ?>"
                       class="btn btn-secondary">

                        <i class="fas fa-times"></i>
                        Batal

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

function previewImage(event){

    const preview = document.getElementById('preview');

    preview.src = URL.createObjectURL(event.target.files[0]);

    preview.style.display = 'block';
}

$(document).ready(function(){

    $('#formEdit').submit(function(e){

        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({

            url: "<?= base_url('admin/kost/update/'.$kost['kos_id']) ?>",

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

                }else{

                    alert(response.message);

                }

            },

            error:function(xhr){

                console.log(xhr.responseText);

                alert('Terjadi kesalahan pada server');

            }

        });

    });

});

</script>

</body>
</html>