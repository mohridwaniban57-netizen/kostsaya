<?= $this->include('home/header'); ?>



<div class="login-page">

    <div class="login-container">

        <!-- LEFT -->
        <div class="login-left">

            <div class="overlay"></div>

            <div class="left-content">

                <h1>
                    Kost<span>Saya</span>
                </h1>

                <p>
                    Cari kost nyaman, aman, dan sesuai kebutuhanmu
                    hanya dalam satu tempat.
                </p>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="login-right">

            <div class="login-form">

                <h2>Register</h2>

                <p class="subtitle">
                    Buat akun baru untuk mulai mencari kost
                </p>

                <form action="/register" method="post">

                    <div class="input-group">

                        <label>Nama Lengkap</label>

                        <input type="text"
                               name="nama"
                               placeholder="Masukkan nama lengkap"
                               required>

                    </div>

                    <div class="input-group">

                        <label>Email</label>

                        <input type="email"
                               name="email"
                               placeholder="Masukkan email"
                               required>

                    </div>

                    <div class="input-group">

                        <label>Password</label>

                        <input type="password"
                               name="password"
                               placeholder="Masukkan password"
                               required>

                    </div>

                    <div class="input-group">

                        <label>Daftar Sebagai</label>

                        <select name="role" required>

                            <option value="" disabled selected>
                                Pilih Peran
                            </option>

                            <option value="admin">
                                Admin
                            </option>

                            <option value="pemilik">
                                Pemilik Kost
                            </option>

                            <option value="user">
                                Pencari Kost
                            </option>

                        </select>

                    </div>

                    <button type="submit" class="btn-login">
                        Register
                    </button>

                </form>

                <div class="bottom-text">

                    Sudah punya akun?
                    <a href="/login">
                        Login sekarang
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<style>

/* ===== RESET ===== */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* ===== BODY ===== */
body{
    font-family: 'Poppins', sans-serif;
    background: #f3f5fb;
}

/* ===== PAGE ===== */
.login-page{
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

/* ===== CONTAINER ===== */
.login-container{
    width: 1000px;
    min-height: 650px;
    display: flex;
    border-radius: 30px;
    overflow: hidden;
    background: white;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ===== LEFT SIDE ===== */
.login-left{
    width: 45%;
    position: relative;
    background:
        linear-gradient(rgba(31,42,68,0.85),
        rgba(31,42,68,0.85)),
        url('https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1200');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px;
}

.left-content{
    position: relative;
    z-index: 2;
    color: white;
}

.left-content h1{
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.left-content h1 span{
    color: #3461ff;
}

.left-content p{
    font-size: 17px;
    line-height: 1.8;
    color: #dce4ff;
}

/* ===== RIGHT SIDE ===== */
.login-right{
    width: 55%;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px;
}

.login-form{
    width: 100%;
    max-width: 420px;
}

.login-form h2{
    font-size: 36px;
    color: #1f2a44;
    margin-bottom: 10px;
}

.subtitle{
    color: #6b7280;
    margin-bottom: 35px;
    font-size: 15px;
}

/* ===== INPUT ===== */
.input-group{
    margin-bottom: 22px;
}

.input-group label{
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #1f2a44;
}

.input-group input,
.input-group select{
    width: 100%;
    height: 55px;
    border: 1px solid #dbe2f0;
    border-radius: 14px;
    padding: 0 18px;
    font-size: 15px;
    background: #f9fbff;
    transition: 0.3s;
}

.input-group input:focus,
.input-group select:focus{
    outline: none;
    border-color: #3461ff;
    box-shadow: 0 0 10px rgba(52,97,255,0.15);
    background: white;
}

/* ===== BUTTON ===== */
.btn-login{
    width: 100%;
    height: 55px;
    border: none;
    border-radius: 14px;
    background: linear-gradient(90deg, #2f5bea, #3461ff);
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
    margin-top: 10px;
    box-shadow: 0 8px 20px rgba(52,97,255,0.25);
}

.btn-login:hover{
    transform: translateY(-2px);
    opacity: 0.95;
}

/* ===== BOTTOM TEXT ===== */
.bottom-text{
    text-align: center;
    margin-top: 25px;
    color: #6b7280;
    font-size: 14px;
}

.bottom-text a{
    text-decoration: none;
    color: #3461ff;
    font-weight: 600;
}

/* ===== RESPONSIVE ===== */
@media(max-width: 900px){

    .login-container{
        flex-direction: column;
        width: 100%;
    }

    .login-left,
    .login-right{
        width: 100%;
    }

    .login-left{
        min-height: 250px;
    }

    .login-right{
        padding: 40px 25px;
    }

    .left-content h1{
        font-size: 38px;
    }

}

</style>
<?= $this->include('home/footer'); ?>