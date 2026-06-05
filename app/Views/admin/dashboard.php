<?= $this->include('layout/header') ?>

<style>
.admin-dashboard{
    background: #f4f6f9;
    min-height: 100vh;
    padding: 30px;
}

.dashboard-header{
    margin-bottom: 30px;
}

.dashboard-header h1{
    font-size: 32px;
    font-weight: 700;
    color: #222;
}

.dashboard-header p{
    color: #777;
    margin-top: 5px;
}

.dashboard-card{
    display: flex;
    align-items: center;
    padding: 25px;
    border-radius: 15px;
    color: #fff;
    box-shadow: 0 5px 20px rgba(0,0,0,.1);
    transition: .3s;
}

.dashboard-card:hover{
    transform: translateY(-5px);
}

.dashboard-card.primary{
    background: linear-gradient(135deg,#0d6efd,#4f8cff);
}

.dashboard-card.success{
    background: linear-gradient(135deg,#198754,#43c27a);
}

.dashboard-card.dark{
    background: linear-gradient(135deg,#212529,#495057);
}

.card-icon{
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: rgba(255,255,255,.2);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
}

.card-icon i{
    font-size: 30px;
}

.card-content h3{
    font-size: 32px;
    font-weight: bold;
    margin: 0;
}

.card-content p{
    margin: 0;
    font-size: 16px;
}

.content-card{
    background: #fff;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 3px 15px rgba(0,0,0,.08);
}

.content-card h4{
    margin-bottom: 20px;
    font-weight: 600;
    color: #333;
}

.table th{
    background: #f8f9fa;
}

.list-group-item{
    border: none;
    border-bottom: 1px solid #eee;
}
</style>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<div class="admin-dashboard">
    <div class="container-fluid">

        <div class="dashboard-header">
            <h1>Dashboard Admin</h1>
            <p>Selamat datang di Sistem Informasi Kost</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="dashboard-card primary">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="card-content">
                        <h3>25</h3>
                        <p>Total Kost</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card success">
                    <div class="card-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="card-content">
                        <h3>120</h3>
                        <p>Total Booking</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card dark">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-content">
                        <h3>85</h3>
                        <p>Total User</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-5">

            <div class="col-md-8">
                <div class="content-card">
                    <h4>Aktivitas Terbaru</h4>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Aktivitas</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ridwan</td>
                                <td>Booking Kost Mawar</td>
                                <td>05 Juni 2026</td>
                            </tr>
                            <tr>
                                <td>Andi</td>
                                <td>Tambah Data Kost</td>
                                <td>04 Juni 2026</td>
                            </tr>
                            <tr>
                                <td>Siti</td>
                                <td>Registrasi Akun</td>
                                <td>04 Juni 2026</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-md-4">
                <div class="content-card">

                    <h4>Informasi Sistem</h4>

                    <ul class="list-group">
                        <li class="list-group-item">
                            Total Kost Aktif : <strong>25</strong>
                        </li>
                        <li class="list-group-item">
                            Booking Hari Ini : <strong>8</strong>
                        </li>
                        <li class="list-group-item">
                            User Baru : <strong>5</strong>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
</div>

<?= $this->include('home/footer') ?>