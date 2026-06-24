<div class="kost-login-page">

    <div class="kost-login-container">

        <div class="kost-login-left">

            <div class="kost-login-left-content">

                <h1>Kost<span>Saya</span></h1>

                <p>
                    Selamat datang di KostSaya. Masuk untuk menemukan 
                    dan mengakses pilihan kost terbaik dengan mudah dan cepat.
                </p>

            </div>

        </div>

        <div class="kost-login-right">

            <div class="kost-login-form">

                <h2 class="kost-login-title">Login</h2>

                <p class="kost-login-subtitle">
                    Masuk untuk melanjutkan pencarian kost terbaikmu
                </p>

                <div class="kost-login-group">
                    <label>Email</label>
                    <input type="email"
                           class="kost-login-input">
                </div>

                <div class="kost-login-group">
                    <label>Sandi</label>
                    <input type="password"
                           class="kost-login-input">
                </div>
                
                <div class="kost-login-opsi">

                    <label class="kost-login-ingat">
                        <input type="checkbox" class="kost-login-checkbox">
                        Simpan sandi
                    </label>

                    <a href="/forgot-password" class="kost-login-link-lupa">
                        Lupa sandi?
                    </a>

                </div>

                <button class="kost-login-button">
                    Masuk
                </button>

                <div class="kost-login-bottom">
                    Belum punya akun?
                    <a href="/register">Daftar sekarang</a>
                </div>

            </div>

        </div>

    </div>

</div>

<style>


/* ===== BODY ===== */
body{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background:var(--bg);
    overflow-x:hidden;
    color:var(--dark);
}

/* =========================
   LOGIN PAGE
========================= */

.kost-login-page{
    width:100%;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:0px;
    background:#f3f5fb;
    font-family:'Poppins',sans-serif;
}

/* =========================
   CONTAINER
========================= */

.kost-login-container{
    width: 100%;
    max-width: 800px;  
    height: 90vh;       
    display: flex;
    border-radius: 30px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 15px 40px rgba(0,0,0,.08);
}
/* =========================
   LEFT SIDE
========================= */

.kost-login-left{
    width:45%;
    position:relative;

    background:
    linear-gradient(
        rgba(31,42,68,.85),
        rgba(31,42,68,.85)
    ),
    url('https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1200');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:30px;
}

/* =========================
   LEFT CONTENT
========================= */

.kost-login-left-content{
    color:white;
    position:relative;
    z-index:2;
}

.kost-login-left-content h1{
    font-size:40px;
    font-weight:700;
    margin-bottom:20px;
}

.kost-login-left-content h1 span{
    color:#3461ff;
}

.kost-login-left-content p{
    font-size:15px;
    line-height:1.7;
    color:#dce4ff;
}

/* =========================
   RIGHT SIDE
========================= */

.kost-login-right{
    width:55%;
    height: 100%;
    display:flex;
    justify-content:flex-start;
    align-items:center;
    padding:35px;
    padding-top: 20px;
    background:#fff;
}

/* =========================
   FORM
========================= */

.kost-login-form{
    width:100%;
    max-width:380px;
    
}

.kost-login-title{
    font-size:30px;
    color:#3461ff;
    margin-bottom:10px;
    font-weight:700;
}

.kost-login-subtitle{
    color:#6b7280;
    margin-bottom:25px;
    font-size:15px;
}

/* =========================
   ALERT MESSAGES
========================= */

.kost-login-success{
    background:#d1fae5;
    color:#065f46;
    padding:12px;
    border-radius:12px;
    margin-bottom:15px;
    text-align:center;
}

.kost-login-error{
    background:#fee2e2;
    color:#991b1b;
    padding:12px;
    border-radius:12px;
    margin-bottom:15px;
    text-align:center;
}

/* =========================
   INPUT FIELDS
========================= */

.kost-login-group{
    margin-bottom:15px;
}

.kost-login-group label{
    display:block;
    margin-bottom:5px;
    font-size:13px;
    font-weight:600;
}

.kost-login-input{
    width:100%;
    height:48px;

    border:1px solid #dbe2f0;
    border-radius:14px;

    padding:0 18px;

    font-size:14px;

    background: #fff;

    transition:.3s;
}

.kost-login-input:focus{
    outline:none;
    border-color: #3461ff;
    box-shadow:0 0 10px rgba(52,97,255,.15);
    background: #ffffff;
}

/* =========================
   LOGIN OPTIONS
========================= */

.kost-login-opsi{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:15px;
    font-size:13px;
    gap:10px;
}

/* =========================
   REMEMBER ME
========================= */

.kost-login-ingat{
    display:flex;
    align-items:center;
    gap:8px;
    color:#6b7280;
    cursor:pointer;
    user-select:none;
}

/* checkbox */
.kost-login-checkbox{
    width:15px;
    height:15px;
    accent-color:#3461ff;
    cursor:pointer;
}

/* =========================
   FORGOT PASSWORD LINK
========================= */

.kost-login-link-lupa{
    color:#3461ff;
    font-weight:600;
    text-decoration:none;
    transition:.2s;
}

.kost-login-link-lupa:hover{
    text-decoration:underline;
}

/* =========================
   BUTTON
========================= */

.kost-login-button{
    width:100%;
    height:48px;

    border:none;
    border-radius:14px;

    background:linear-gradient(
        90deg,
        #2f5bea,
        #3461ff
    );

    color:white;
    font-size:15px;
    font-weight:600;

    cursor:pointer;

    margin-top:5px;

    transition:.3s;

    box-shadow:
    0 8px 20px rgba(52,97,255,.25);
}

.kost-login-button:hover{
    transform:translateY(-2px);
}

/* =========================
   BOTTOM TEXT
========================= */

.kost-login-bottom{
    text-align:center;
    margin-top:15px;
    font-size:13px;
    color:#6b7280;
}

.kost-login-bottom a{
    text-decoration:none;
    color:#3461ff;
    font-weight:600;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:900px){

    .kost-login-container{
        flex-direction:column;
        width:100%;
    }

    .kost-login-left,
    .kost-login-right{
        width:100%;
    }

    .kost-login-left{
        min-height:250px;
    }

    .kost-login-right{
        padding:30px 25px;
    }
}

</style>