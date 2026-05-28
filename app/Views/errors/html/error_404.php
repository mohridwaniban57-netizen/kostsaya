<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>404 - KostSaya</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

    <!-- =========================
            BACKGROUND
    ========================== -->

    <div class="background-circle circle-1"></div>
    <div class="background-circle circle-2"></div>

    <!-- =========================
            CONTENT
    ========================== -->

    <div class="container">

        <div class="row min-vh-100 align-items-center justify-content-center">

            <div class="col-lg-6">

                <div class="error-card">

                    <!-- Logo -->
                    <div class="logo-box">

                        <i class="bi bi-house-door-fill"></i>

                    </div>

                    <!-- Brand -->
                    <h2 class="brand-title">

                        Kost<span>Saya</span>

                    </h2>

                    <!-- 404 -->
                    <h1 class="error-code">

                        404

                    </h1>

                    <!-- Text -->
                    <h3 class="error-title">

                        Halaman Tidak Ditemukan

                    </h3>

                    <p class="error-text">

                        Maaf, halaman yang kamu cari tidak tersedia
                        atau mungkin sudah dipindahkan.

                    </p>

                    <!-- Button -->
                    <a href="/"
                       class="home-btn">

                        <i class="bi bi-arrow-left-circle"></i>

                        Kembali ke Dashboard

                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================
                CSS
    ========================== -->

    <style>

        /* BODY */
        body{
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(
                135deg,
                #eff6ff,
                #dbeafe
            );
        }


        /* BACKGROUND CIRCLE */
        .background-circle{
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            z-index: -1;
        }

        .circle-1{
            width: 300px;
            height: 300px;
            background: #2563eb;
            top: -100px;
            left: -100px;
            opacity: 0.4;
        }

        .circle-2{
            width: 350px;
            height: 350px;
            background: #60a5fa;
            bottom: -120px;
            right: -120px;
            opacity: 0.4;
        }


        /* CARD */
        .error-card{

            background: rgba(255,255,255,0.7);

            backdrop-filter: blur(15px);

            border-radius: 30px;

            padding: 60px 40px;

            text-align: center;

            box-shadow:
                0 10px 40px rgba(0,0,0,0.08);

            border:
                1px solid rgba(255,255,255,0.5);

        }


        /* LOGO */
        .logo-box{

            width: 90px;
            height: 90px;

            background: #eff6ff;

            border-radius: 25px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: auto;
            margin-bottom: 20px;

        }

        .logo-box i{

            font-size: 42px;
            color: #2563eb;

        }


        /* BRAND */
        .brand-title{

            font-size: 38px;
            font-weight: bold;

            color: #111827;

            margin-bottom: 15px;

        }

        .brand-title span{

            color: #2563eb;

        }


        /* ERROR CODE */
        .error-code{

            font-size: 120px;
            font-weight: 800;

            color: #2563eb;

            line-height: 1;

            margin-bottom: 10px;

        }


        /* TITLE */
        .error-title{

            font-size: 30px;
            font-weight: 700;

            color: #1f2937;

            margin-bottom: 15px;

        }


        /* TEXT */
        .error-text{

            color: #6b7280;

            font-size: 17px;

            line-height: 1.7;

            margin-bottom: 35px;

        }


        /* BUTTON */
        .home-btn{

            display: inline-flex;

            align-items: center;

            gap: 10px;

            text-decoration: none;

            background: #2563eb;

            color: white;

            padding: 14px 28px;

            border-radius: 14px;

            font-weight: 600;

            transition: 0.3s;

        }

        .home-btn:hover{

            background: #1d4ed8;

            transform: translateY(-3px);

            color: white;

        }


        /* RESPONSIVE */
        @media(max-width: 768px){

            .error-card{

                padding: 40px 25px;

            }

            .error-code{

                font-size: 90px;

            }

            .brand-title{

                font-size: 30px;

            }

            .error-title{

                font-size: 24px;

            }

        }

    </style>

</body>
</html>