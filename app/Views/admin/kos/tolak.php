<?= $this->include('admin/sidebar'); ?>

<div class="content">

<div class="section">

<h2>
Alasan Penolakan Kost
</h2>

<form action="/admin/kost/tolak/simpan/<?= $kost['kos_id'] ?>" method="post">

<label>
Alasan
</label>

<textarea 
name="alasan"
required
placeholder="Masukkan alasan kost ditolak"></textarea>


<button>
Tolak Kost
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
    height:120px;
    margin-top:10px;
    padding:15px;
    border-radius:10px;
}

button{
    margin-top:15px;
    padding:10px 20px;
    border:0;
    border-radius:10px;
    background:#dc2626;
    color:white;
}

</style>