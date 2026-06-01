<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KostSaya</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f4f7fb;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar{

            width:100%;

            position:sticky;
            top:0;
            z-index:999;

            display:flex;
            align-items:center;
            justify-content:space-between;

            padding:16px 70px;

            background:rgba(255,255,255,0.75);
            backdrop-filter:blur(14px);

            border-bottom:1px solid rgba(255,255,255,0.2);

            box-shadow:0 8px 30px rgba(0,0,0,0.05);
        }

        /* =========================
           LOGO
        ========================= */

        .logo{

            display:flex;
            align-items:center;
            gap:14px;
        }

        .logo img{

            width:55px;
            height:55px;

            object-fit:cover;

            border-radius:18px;

            box-shadow:0 10px 25px rgba(0,0,0,0.08);
        }

        .logo h1{

            color:#0f172a;

            font-size:30px;
            font-weight:800;
            letter-spacing:.5px;
        }

        .logo h1 span{
            color:#2563eb;
        }

        /* =========================
           NAVIGATION
        ========================= */

        nav{
            margin-left:auto;
        }

        .menu{

            display:flex;
            align-items:center;
            gap:18px;

            list-style:none;
        }

        .menu li a{
            text-decoration:none;
            transition:.35s ease;
        }

        /* =========================
           BUTTON
        ========================= */

        .btn-pusat{

            display:flex;
            align-items:center;
            gap:8px;

            background:#0f172a;
            color:white;

            padding:11px 18px;

            border-radius:14px;

            font-size:14px;
            font-weight:600;

            box-shadow:0 10px 20px rgba(15,23,42,.12);

            transition:.35s ease;
        }

        .btn-pusat:hover{

            transform:translateY(-3px);

            background:#1e293b;

            box-shadow:0 16px 28px rgba(15,23,42,.20);
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width:768px){

            .navbar{
                padding:16px 25px;
            }

            .logo h1{
                font-size:24px;
            }

            .btn-pusat{

                padding:10px 15px;
                font-size:13px;
            }

        }

    </style>

</head>

<body>

<header class="navbar">

    <!-- LOGO -->

    <div class="logo">

        <img src="<?= base_url('img/logo.png'); ?>" alt="Logo KostSaya">

        <h1>
            Kost<span>Saya</span>
        </h1>

    </div>

    <!-- MENU -->

    <nav>

        <ul class="menu">

            <li>

                <a href="#" class="btn-pusat">

                    <i class="fa-solid fa-circle-question"></i>

                    Tentang kami

                </a>

            </li>

        </ul>

    </nav>

</header>