<?= $this->include('home/header'); ?>

<link rel="stylesheet" href="<?= base_url('css/login.css') ?>">

<section class="login-page">

    <!-- BACKGROUND IMAGE -->
    <div class="background-overlay"></div>

    <!-- LOGIN CARD -->
    <div class="login-container">

        <div class="login-card">

            <h2>Login</h2>

            <p class="subtitle">
                Masuk untuk melanjutkan pencarian kost terbaikmu.
            </p>

            <?php if(session()->getFlashdata('success')) : ?>
                <div style="
                    background:#d1fae5;
                    color:#065f46;
                    padding:12px 15px;
                    border-radius:10px;
                    margin-bottom:20px;
                    text-align:center;
                    font-weight:500;
                ">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('error')) : ?>
                <div style="
                    background:#fee2e2;
                    color:#991b1b;
                    padding:12px 15px;
                    border-radius:10px;
                    margin-bottom:20px;
                    text-align:center;
                    font-weight:500;
                ">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="/login" method="post">

                <!-- EMAIL -->
                <div class="input-group">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Masukkan email"
                        required
                    >
                </div>

                <!-- PASSWORD -->
                <div class="input-group">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required
                    >

                </div>
                

                <!-- BUTTON -->
                <button
                    type="submit"
                    class="btn-login-custom"
                >
                    Login
                </button>

                <!-- REGISTER LINK -->
                <p class="register-text">

                    Belum punya akun?

                    <a href="/register">
                        Daftar sekarang
                    </a>

                </p>

            </form>

        </div>

    </div>

</section>
<?= $this->include('home/footer'); ?>