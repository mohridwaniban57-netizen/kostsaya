<?= $this->include('admin/sidebar'); ?>

<div class="content">

<div class="section">

<h2>
Alasan Penolakan Kost
</h2>

<h3>
<?= $kost['nama_kos'] ?>
</h3>


<form action="/admin/kost/tolak/simpan/<?= $kost['kos_id'] ?>" method="post">

<textarea name="alasan" placeholder="Masukkan alasan penolakan..." required></textarea>


<button type="submit">
Kirim Penolakan
</button>

</form>


</div>

</div>


<style>

.content{
margin-left:260px;
padding:30px;
background:#f8fafc;
}

.section{
background:white;
padding:25px;
border-radius:20px;
}

textarea{
width:100%;
height:150px;
padding:15px;
border-radius:10px;
border:1px solid #ddd;
}

button{
margin-top:15px;
padding:12px 20px;
background:#dc2626;
color:white;
border:none;
border-radius:10px;
}

</style>