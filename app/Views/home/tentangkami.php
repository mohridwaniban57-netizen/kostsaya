<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Kost Palu</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Poppins', sans-serif;
            background: #f4f6fb;
            color: #222;
        }

        .container{
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        /* HERO */
        .hero{
            margin-top: 40px;
            background: linear-gradient(135deg, #111827, #1f2937);
            color: white;
            padding: 90px 30px;
            border-radius: 18px;
            text-align: center;
        }

        .hero h1{
            font-size: 38px;
            margin-bottom: 10px;
        }

        .hero p{
            opacity: 0.85;
            max-width: 750px;
            margin: auto;
            line-height: 1.7;
        }

        /* SECTION */
        .section{
            margin-top: 60px;
        }

        .section h2{
            text-align: center;
            font-size: 26px;
            margin-bottom: 30px;
        }

        /* GRID */
        .grid{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        /* CARD */
        .card{
            background: white;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.06);
            transition: 0.3s;
        }

        .card:hover{
            transform: translateY(-6px);
        }

        .card h3{
            margin-bottom: 10px;
            color: #111827;
        }

        .card p{
            color: #555;
            line-height: 1.6;
        }

        /* STORY */
        .story{
            background: white;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.06);
            line-height: 1.8;
            color: #444;
        }

        /* FOOTER NOTE */
        .note{
            text-align: center;
            margin: 60px 0;
            font-size: 14px;
            color: #666;
        }

    </style>
</head>

<body>

<div class="container">

    <!-- HERO -->
    <div class="hero">
        <h1>Tentang Kost Palu</h1>
        <p>
            Kost Palu adalah platform sederhana yang membantu mahasiswa dan pekerja di Kota Palu menemukan tempat tinggal yang nyaman, aman, dan terjangkau.
        </p>
    </div>

    <!-- CERITA -->
    <div class="section">
        <h2>Cerita Kami</h2>
        <div class="story">
            Banyak mahasiswa dan pendatang di Kota Palu mengalami kesulitan saat mencari kost yang sesuai kebutuhan, baik dari segi lokasi, harga, maupun fasilitas.

            <br><br>

            Informasi kost masih tersebar dari mulut ke mulut atau media sosial yang tidak terstruktur.

            <br><br>

            Kost Palu hadir sebagai solusi lokal untuk membantu masyarakat menemukan informasi kost di wilayah Palu dengan lebih mudah, rapi, dan terpusat dalam satu platform sederhana.

            <br><br>

            Website ini kami buat sebagai langkah awal untuk membantu mahasiswa dan pekerja yang baru datang ke Kota Palu agar lebih mudah mendapatkan tempat tinggal.
        </div>
    </div>

    <!-- NILAI -->
    <div class="section">
        <h2>Nilai Kami</h2>

        <div class="grid">
            <div class="card">
                <h3>Fokus Lokal</h3>
                <p>Kami hanya menampilkan kost di wilayah Kota Palu dan sekitarnya agar lebih relevan.</p>
            </div>

            <div class="card">
                <h3>Informasi Sederhana</h3>
                <p>Data kost ditampilkan dengan jelas agar mudah dipahami tanpa kebingungan.</p>
            </div>

            <div class="card">
                <h3>Untuk Masyarakat Palu</h3>
                <p>Platform ini dibuat khusus untuk membantu mahasiswa, pekerja, dan pendatang di Kota Palu.</p>
            </div>
        </div>
    </div>

    <!-- MASALAH & SOLUSI -->
    <div class="section">
        <h2>Masalah & Solusi</h2>

        <div class="grid">
            <div class="card">
                <h3>Masalah</h3>
                <p>Calon penghuni kost di Palu kesulitan mendapatkan informasi yang lengkap dan terpercaya dalam satu tempat.</p>
            </div>

            <div class="card">
                <h3>Solusi</h3>
                <p>Kost Palu mengumpulkan informasi kost di sekitar Palu agar lebih mudah dicari, lebih terstruktur, dan lebih cepat diakses.</p>
            </div>
        </div>
    </div>

    <!-- TIM -->
    <div class="section">
        <h2>Tim Kami</h2>

        <div class="grid">
            <div class="card">
                <h3>Developer Lokal</h3>
                <p>Pengembang web yang berfokus membuat sistem informasi kost untuk wilayah Kota Palu.</p>
            </div>

            <div class="card">
                <h3>UI/UX Designer</h3>
                <p>Mendesain tampilan sederhana, modern, dan mudah digunakan oleh pengguna di Palu.</p>
            </div>

            <div class="card">
                <h3>Data & Informasi</h3>
                <p>Mengelola data kost agar tetap relevan dan sesuai kondisi di lapangan.</p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="note">
        © 2026 Kost Palu — Platform lokal untuk membantu pencarian kost di Kota Palu dan sekitarnya.
    </div>

</div>

</body>
</html>