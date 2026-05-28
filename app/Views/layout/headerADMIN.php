<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Header Admin KostSaya</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

    <!-- =========================
            HEADER ADMIN
    ========================== -->

    <nav class="navbar navbar-expand-lg admin-navbar">

        <!-- LOGO -->
        <a href="#" class="navbar-brand admin-logo">

            <div class="logo-box">
                <i class="bi bi-house-door-fill"></i>
            </div>

            <span class="logo-black">Kost</span>
            <span class="logo-blue">Saya</span>

            <span class="admin-text">Admin</span>

        </a>

        <!-- TOGGLE MOBILE -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarAdmin">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse"
             id="navbarAdmin">

            <!-- MENU KIRI -->
            <ul class="navbar-nav ms-4 me-auto">

                <li class="nav-item">
                    <a href="#"
                       class="nav-link active">

                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link">

                        Data Kost
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link">

                        Data Kamar
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link">

                        Booking
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link">

                        User
                    </a>
                </li>

            </ul>

            <!-- SEARCH -->
            <div class="search-box">

                <i class="bi bi-search"></i>

                <input type="text"
                       placeholder="Cari data admin...">

            </div>

            <!-- NOTIFIKASI -->
            <button class="notif-btn">

                <i class="bi bi-bell-fill"></i>

            </button>

            <!-- PROFILE -->
            <div class="dropdown ms-3">

                <button class="btn admin-btn dropdown-toggle"
                        data-bs-toggle="dropdown">

                    Admin

                </button>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <a href="#"
                           class="dropdown-item">

                            Profile
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="dropdown-item">

                            Settings
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a href="#"
                           class="dropdown-item text-danger">

                            Logout
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- =========================
              CSS
    ========================== -->

    <style>

        /* BODY */
        body{
            margin: 0;
            padding: 0;
            background: #f5f7fb;
            font-family: sans-serif;
        }


        /* NAVBAR */
        .admin-navbar{
            background: white;
            padding: 15px 35px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }


        /* LOGO */
        .admin-logo{
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 30px;
            font-weight: bold;
        }

        .logo-box{
            width: 55px;
            height: 55px;
            background: #eef2ff;
            border-radius: 16px;

            display: flex;
            justify-content: center;
            align-items: center;

            margin-right: 15px;
        }

        .logo-box i{
            font-size: 25px;
            color: #1e3a8a;
        }

        .logo-black{
            color: #111827;
        }

        .logo-blue{
            color: #2563eb;
        }

        .admin-text{
            font-size: 16px;
            margin-left: 10px;
            background: #2563eb;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
        }


        /* MENU */
        .nav-link{
            color: #374151;
            font-weight: 600;
            margin-right: 12px;
            transition: 0.3s;
        }

        .nav-link:hover{
            color: #2563eb;
        }

        .nav-link.active{
            color: #2563eb;
        }


        /* SEARCH */
        .search-box{
            position: relative;
            margin-right: 20px;
        }

        .search-box input{
            width: 260px;
            border: 1px solid #d1d5db;
            border-radius: 12px;

            padding: 11px 15px 11px 42px;

            outline: none;

            transition: 0.3s;
        }

        .search-box input:focus{
            border-color: #2563eb;
        }

        .search-box i{
            position: absolute;
            top: 12px;
            left: 15px;
            color: gray;
        }


        /* BUTTON NOTIF */
        .notif-btn{
            width: 45px;
            height: 45px;

            border: none;
            border-radius: 12px;

            background: #f3f4f6;

            transition: 0.3s;
        }

        .notif-btn:hover{
            background: #2563eb;
            color: white;
        }


        /* BUTTON ADMIN */
        .admin-btn{
            background: #2563eb;
            color: white;

            border: none;

            padding: 10px 20px;

            border-radius: 12px;

            font-weight: 600;
        }

        .admin-btn:hover{
            background: #1d4ed8;
            color: white;
        }


        /* RESPONSIVE */
        @media(max-width: 992px){

            .search-box{
                width: 100%;
                margin-top: 20px;
                margin-bottom: 15px;
            }

            .search-box input{
                width: 100%;
            }

            .notif-btn{
                margin-bottom: 15px;
            }

        }

    </style>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>