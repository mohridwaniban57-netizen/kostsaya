

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
                <div class="form-group">
                            <label for="role">Login sebagai</label>
                            <select id="role" name="role" class="form-control" required>
                                <option value="" disabled selected hidden>Pilih peran</option>
                                <option value="pmi">Admin</option>
                                <option value="rumah_sakit">Pamilik kost</option>
                                <option value="admin">Pencari kost</option>
                            </select>
                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn-login-custom">
                    Login
                </button>
                <!-- BUTTON -->

                <!-- REGISTER LINK -->
                <p class="register-text">
                    Belum punya akun?
                    <a href="/register">Daftar sekarang</a>
                </p>

            </form>

        </div>

    </div>

</section>
