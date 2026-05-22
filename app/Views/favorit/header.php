<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KostSaya</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        /* NAVBAR */

        .navbar{
            width:100%;
            background:white;
            padding:20px 50px;

            display:flex;
            align-items:center;

            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .logo{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .logo h2{
            color: #152a58;
            font-size:25px;
            font-weight:bold;
        }

        .logo img{
            width:75px;
            height:75px;
            object-fit:cover;
        }

        nav{
            margin-left:auto;
            margin-right: 25px;
        }

        nav ul{
            display:flex;
            list-style:none;
            gap:30px;
        }

        nav ul li a{
            text-decoration:none;
            color:#333;
            font-weight:500;
        }

        nav ul li a.active{
            background: #f0f0f0;
            padding:8px 14px;
            border-radius:8px;
        }

        .login-btn{
            background: #122141;
            color:white;
            border:none;
            padding:10px 20px;
            border-radius:10px;
            cursor:pointer;
        }
    </style>

</head>
<body>

<header class="navbar">

    <div class="logo">
        <img src="<?= base_url('img/logo.png'); ?>" alt="Logo">
        <h2>KostSaya</h2>
    </div>

    <nav>
        <ul>
            <li><a href="<?= base_url('/'); ?>">Beranda</a></li>

            <li><a class="active" href="<?= base_url('favorit'); ?>">
                Favorit
            </a></li>

            <li><a href="<?= base_url('kamar'); ?>">
                Kamar
            </a></li>

            <li><a href="<?= base_url('fasilitas'); ?>">
                Fasilitas
            </a></li>

            <li><a href="<?= base_url('kontak'); ?>">
                Kontak
            </a></li>
        </ul>
    </nav>

    <button class="login-btn">Login</button>

</header>