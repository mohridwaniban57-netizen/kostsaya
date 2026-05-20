<header class="navbar">

    <div class="logo">
        <img src="<?= base_url('img/logo.png'); ?>" alt="Logo">
        <h2>KostSaya</h2>
    </div>

    <nav class="nav-menu">
        <a href="#">Beranda</a>
        <a href="#">Favorit</a>
        <a href="#">Kamar</a>
        <a href="#">Fasilitas</a>
        <a href="#">Kontak</a>
    </nav>

    <div class="login-btn">
        <a href="#">login</a>
    </div>

</header>

<style>

    .navbar{
        width: 100%;
        height: 90px;

        background: white;

        display: flex;
        align-items: center;

        padding: 0 60px;

        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    /* LOGO */

    .logo{
        display: flex;
        align-items: center;
        gap: 0px;
    }

    .logo img{
        width: 120px;
    }

    .logo h2{
        font-size: 22px;
        color: #1d2740;
    }

    /* MENU */

    .nav-menu{
        display: flex;
        gap: 35px;

        margin-left: auto;
        margin-right: 30px;
    }

    .nav-menu a{
        text-decoration: none;
        color: #333;
        font-size: 17px;
        transition: 0.3s;
    }

    .nav-menu a:hover{
        color: #0d1b3d;
    }

    /* LOGIN */

    .login-btn a{
        text-decoration: none;
        background: #0d1835;
        color: white;

        padding: 12px 25px;

        border-radius: 15px;

        font-size: 16px;
        transition: 0.3s;
    }

    .login-btn a:hover{
        background: #16244a;
    }

</style>