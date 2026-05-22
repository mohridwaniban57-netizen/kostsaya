<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

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

            <form action="/login" method="post">

                <!-- EMAIL -->
                <div class="input-group">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Masukkan email"
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
                    >

                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn-login-custom">
                    Login
                </button>

            </form>

        </div>

    </div>

</section>

<?= $this->include('layout/footer') ?>