<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>KostSaya Search System</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- ICON -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

:root{
    --primary:#2563eb;
    --yellow:#2563eb;
    --dark:#0f172a;
    --gray:#64748b;
    --light:#f8fafc;
    --border:#e2e8f0;
}

body{
    background:
    linear-gradient(to bottom,#f8fbff,#eef4ff);

    min-height:100vh;
}

/* =========================
   NAVBAR
========================= */

.navbar{

    width:100%;

    display:flex;
    align-items:center;
    justify-content:space-between;

    padding:14px 45px;

    background:rgba(255,255,255,.75);

    backdrop-filter:blur(18px);

    border-bottom:1px solid rgba(255,255,255,.5);

    position:sticky;
    top:0;
    z-index:1000;
}

/* =========================
   LOGO
========================= */

.logo{

    display:flex;
    align-items:center;
    gap:20px;
}

.logo h1{

    font-size:24px;
    font-weight:800;

    color:var(--dark);

    letter-spacing:-1px;
}

.logo h1 span{
    color:var(--primary);
}

.logo img{

    width:42px;
    height:42px;

    object-fit:cover;

    border-radius:14px;

    box-shadow:
    0 8px 20px rgba(0,0,0,0.08);
}

/* =========================
   SEARCH NAVBAR
========================= */

.search-navbar{
    width:34%;
}

.search-trigger{

    width:100%;
    height:48px;

    border:none;
    border-radius:16px;

    background:white;

    display:flex;
    align-items:center;
    gap:12px;

    padding:0 18px;

    cursor:pointer;

    color:var(--gray);
    font-size:14px;

    transition:.3s;

    box-shadow:
    0 6px 22px rgba(37,99,235,.08);
}

.search-trigger:hover{

    transform:translateY(-2px);

    box-shadow:
    0 12px 30px rgba(37,99,235,.14);
}

/* =========================
   PROFILE MENU
========================= */

.profile-menu-wrapper{
    position:relative;
}

.profile-toggle{
    height:39px;

    border:none;
    border-radius:40px;

    background:white;

    display:flex;
    align-items:center;
    gap:12px;

    padding:0 14px;

    cursor:pointer;

    box-shadow:
    0 8px 24px rgba(0,0,0,.08);

    transition:.25s;

    width:auto;
}

.profile-toggle:hover{
    transform:translateY(-2px);
}

.profile-toggle i{

    font-size:16px;
    color: #444;
}

.profile-icon{

    width:33px;
    height:33px;

    border-radius:50%;

    background: #203e68;

    display:flex;
    align-items:center;
    justify-content:center;
}

.profile-icon i{

    color: white;
    font-size:13px;
}

/* =========================
   DROPDOWN
========================= */

.profile-dropdown{

    position:absolute;

    top:62px;
    right:0;

    width:220px;

    background:white;

    border-radius:18px;

    padding:8px;

    display:none;

    flex-direction:column;

    gap:4px;

    box-shadow:
    0 18px 40px rgba(0,0,0,.12);

    z-index:9999;
}

.profile-dropdown.active{
    display:flex;
}

.dropdown-item{

    text-decoration:none;

    color:#222;

    font-size:14px;
    font-weight:500;

    padding:13px 15px;

    border-radius:12px;

    transition:.2s;
}

.dropdown-item:hover{
    background:#f5f5f5;
}

.logout-item{
    color: #dc2626;
}

/* =========================
   SEARCH MODAL
========================= */

.search-overlay{

    position:fixed;
    inset:0;

    background:rgba(15,23,42,.45);

    backdrop-filter:blur(8px);

    display:flex;
    justify-content:center;
    align-items:center;

    opacity:0;
    visibility:hidden;

    transition:.3s;

    z-index:9999;
}

.search-overlay.active{
    opacity:1;
    visibility:visible;
}

.search-modal{

    width:580px;

    background:white;

    border-radius:28px;

    overflow:hidden;

    box-shadow:
    0 25px 80px rgba(15,23,42,.2);

    animation:popup .25s ease;
}

@keyframes popup{

    from{
        transform:scale(.95);
        opacity:0;
    }

    to{
        transform:scale(1);
        opacity:1;
    }
}

/* =========================
   TOP
========================= */

.search-top{

    display:flex;
    align-items:center;
    gap:14px;

    padding:18px;
}

.close-search{

    border:none;
    background: #f1f5f9;

    width:42px;
    height:42px;

    border-radius:12px;

    font-size:16px;

    cursor:pointer;

    transition:.3s;
}

.close-search:hover{
    background:#e2e8f0;
}

.search-input-area{

    flex:1;

    display:flex;
    gap:12px;
}

.search-input-area input{

    flex:1;
    height:46px;

    border:1px solid var(--border);

    border-radius:14px;

    padding:0 18px;

    font-size:14px;

    outline:none;

    transition:.3s;
}

.search-input-area input:focus{

    border-color:var(--primary);

    box-shadow:
    0 0 0 4px rgba(37,99,235,.12);
}

.filter-open{

    width:54px;
    height:46px;

    border:none;
    border-radius:14px;

    background:var(--yellow);

    cursor:pointer;

    font-size:15px;

    position:relative;

    color:white;

    transition:.3s;
}

.filter-open:hover{
    transform:translateY(-2px);
}

.filter-badge{

    position:absolute;
    top:4px;
    right:4px;

    width:18px;
    height:18px;

    border-radius:50%;

    background:#ef4444;
    color:white;

    font-size:10px;
    font-weight:700;

    display:flex;
    align-items:center;
    justify-content:center;
}

/* =========================
   TAB
========================= */

.search-tabs{

    display:flex;
    gap:12px;

    padding:0 18px 18px;
}

.tab-btn{

    flex:1;

    height:46px;

    border:none;
    border-radius:14px;

    background: #f1f5f9;

    font-size:14px;
    font-weight:600;

    cursor:pointer;

    transition:.3s;
}

.tab-btn:hover{
    background:#e2e8f0;
}

.tab-btn.active{

    background:var(--primary);

    color:white;
}

/* =========================
   LOCATION GRID
========================= */

.location-grid{

    display:none;

    grid-template-columns:repeat(4,1fr);

    gap:12px;

    padding:0 18px 18px;
}

.location-grid.active-grid{
    display:grid;
}

.location-item{

    min-height:50px;

    background:white;

    border:1px solid var(--border);

    border-radius:14px;

    display:flex;
    align-items:center;
    justify-content:center;

    cursor:pointer;

    transition:.3s;

    text-align:center;

    padding:12px;

    font-size:13px;
    font-weight:500;
}

.location-item:hover{

    border-color:var(--primary);

    transform:translateY(-2px);

    box-shadow:
    0 12px 24px rgba(37,99,235,.10);
}

.location-item.active{

    background:var(--primary);

    color:white;

    border-color:var(--primary);
}

/* =========================
   SELECTED
========================= */

.selected-wrapper{
    padding:0 18px 16px;
}

.selected-box{

    width:100%;

    border:none;

    background:#f8fbff;

    border-radius:16px;

    padding:14px 16px;

    display:none;
    align-items:center;
    justify-content:space-between;

    margin-bottom:12px;

    box-shadow:
    inset 0 0 0 1px #dbeafe;
}

.selected-left{
    display:flex;
    gap:14px;
}

.selected-left i{

    width:38px;
    height:38px;

    border-radius:12px;

    background:#dbeafe;

    color:var(--primary);

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:14px;
}

.selected-left small{
    color:var(--gray);
    font-size:12px;
}

.selected-left h4{

    color:var(--dark);

    font-size:15px;
}

.selected-left p{
    color:var(--gray);
    margin-top:3px;
    font-size:13px;
}

.remove-selected{

    border:none;
    background:#f1f5f9;

    width:38px;
    height:38px;

    border-radius:12px;

    cursor:pointer;
}

/* =========================
   FOOTER
========================= */

.search-footer{

    padding:18px;

    border-top:1px solid var(--border);

    display:flex;
    justify-content:center;
}

.btn-search{

    width:220px;
    height:48px;

    border:none;
    border-radius:14px;

    background:var(--yellow);

    color:white;

    font-size:15px;
    font-weight:700;

    cursor:pointer;

    transition:.3s;
}

.btn-search:hover{

    transform:translateY(-2px);

    box-shadow:
    0 12px 30px rgba(37,99,235,.25);
}

/* =========================
   FILTER MODAL
========================= */

.filter-overlay{

    position:fixed;
    inset:0;

    background:rgba(15,23,42,.45);

    backdrop-filter:blur(8px);

    display:flex;
    justify-content:center;
    align-items:center;

    opacity:0;
    visibility:hidden;

    transition:.3s;

    z-index:10000;
}

.filter-overlay.active{
    opacity:1;
    visibility:visible;
}

.filter-modal{

    width:620px;
    max-height:90vh;

    background:white;

    border-radius:26px;

    overflow:hidden;

    box-shadow:
    0 25px 80px rgba(15,23,42,.2);
}

/* HEADER */

.filter-header{

    display:flex;
    align-items:center;
    gap:14px;

    padding:20px 22px;

    border-bottom:1px solid var(--border);
}

.filter-header h2{
    font-size:22px;
}

.back-filter{

    border:none;

    width:42px;
    height:42px;

    border-radius:12px;

    background:#f1f5f9;

    font-size:15px;

    cursor:pointer;
}

/* CONTENT */

.filter-content{

    padding:22px;

    max-height:65vh;

    overflow-y:auto;
}

.filter-section{
    margin-bottom:30px;
}

.filter-section h3{

    margin-bottom:18px;

    font-size:18px;

    color:var(--dark);
}

.radio-box,
.check-box{

    display:flex;
    align-items:center;
    gap:12px;

    margin-bottom:14px;

    font-size:14px;

    cursor:pointer;
}

.radio-box input,
.check-box input{

    width:18px;
    height:18px;

    accent-color:var(--primary);
}

/* FACILITY */

.facility-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);

    gap:12px;
}

/* FOOTER */

.filter-footer{

    display:flex;
    justify-content:center;
    gap:14px;

    padding:20px;

    border-top:1px solid var(--border);
}

.btn-reset,
.btn-apply{

    height:48px;

    border-radius:14px;

    font-size:14px;
    font-weight:700;

    cursor:pointer;
}

.btn-reset{

    width:160px;

    border:1px solid var(--border);

    background:white;
}

.btn-apply{

    width:220px;

    border:none;

    background:var(--yellow);

    color:white;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){

    .navbar{

        flex-direction:column;

        gap:18px;

        padding:20px;
    }

    .search-navbar{
        width:100%;
    }

    .search-modal,
    .filter-modal{
        width:95%;
    }

    .location-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .facility-grid{
        grid-template-columns:1fr;
    }

}

</style>

</head>
<body>

<!-- =========================
     NAVBAR
========================= -->

<header class="navbar">

    <!-- LOGO -->

    <div class="logo">

        <img src="<?= base_url('img/logo.png') ?>" alt="Logo KostSaya">

        <h1>
            Kost<span>Saya</span>
        </h1>

    </div>

    <!-- SEARCH -->

    <div class="search-navbar">

        <button class="search-trigger"
        id="openSearch">

            <i class="fa-solid fa-magnifying-glass"></i>

            <span id="searchText">
                Cari lokasi atau nama kost...
            </span>

        </button>

    </div>

    <!-- PROFILE -->

    <div class="profile-menu-wrapper">

    <button class="profile-toggle" id="profileToggle">

        <i class="fa-solid fa-bars"></i>
            <?php if(session()->get('user')) : ?>
                <div class="profile-icon">
                    <i class="fa-solid fa-user"></i>
                </div>
            <?php endif; ?>

    </button>

        <!-- DROPDOWN -->

        <div class="profile-dropdown" id="profileDropdown">

            <?php if(session()->get('user')) : ?>

                <a href="<?= base_url('profil') ?>" class="dropdown-item">
                    Profil Saya
                </a>

                <a href="<?= base_url('logout') ?>" class="dropdown-item logout-item">
                    Keluar
                </a>

            <?php else : ?>

                <a href="<?= base_url('login') ?>" class="dropdown-item">
                    Login
                </a>

            <?php endif; ?>

            <a href="<?= base_url('bantuan') ?>" class="dropdown-item">
                Bantuan
            </a>

        </div>

    </div>

</header>

<!-- =========================
     SEARCH MODAL
========================= -->

<div class="search-overlay"
id="searchOverlay">

    <div class="search-modal">

        <!-- TOP -->

        <div class="search-top">

            <button class="close-search"
            id="closeSearch">

                <i class="fa-solid fa-xmark"></i>

            </button>

            <div class="search-input-area">

                <input type="text"
                id="searchInput"
                placeholder="Cari lokasi atau nama kost...">

                <!-- FILTER -->

                <button class="filter-open"
                id="openFilter">

                    <i class="fa-solid fa-sliders"></i>

                    <span class="filter-badge"
                    id="filterBadge">

                        0

                    </span>

                </button>

            </div>

        </div>

        <!-- TAB -->

        <div class="search-tabs">

            <button class="tab-btn active"
            data-tab="daerah">

                Daerah

            </button>

            <button class="tab-btn"
            data-tab="kampus">

                Kampus

            </button>

        </div>

        <!-- DAERAH -->

        <div class="location-grid active-grid"
        id="daerahGrid">

            <div class="location-item">Tondo</div>
            <div class="location-item">Talise</div>
            <div class="location-item">Besusu</div>
            <div class="location-item">Birobuli</div>
            <div class="location-item">Petobo</div>
            <div class="location-item">Palu Barat</div>
            <div class="location-item">Palu Selatan</div>
            <div class="location-item">Palu Timur</div>
            <div class="location-item">Palu Utara</div>
            <div class="location-item">Mamboro</div>
            <div class="location-item">Kawatuna</div>
            <div class="location-item">Tipo</div>

        </div>

        <!-- KAMPUS -->

        <div class="location-grid"
        id="kampusGrid">

            <div class="location-item">Universitas Tadulako</div>
            <div class="location-item">UIN Datokarama Palu</div>
            <div class="location-item">Universitas Alkhairaat</div>
            <div class="location-item">Universitas Muhammadiyah Palu</div>
            <div class="location-item">Universitas Terbuka Palu</div>
            <div class="location-item">Poltekkes Kemenkes Palu</div>
            <div class="location-item">STMIK Bina Mulia Palu</div>
            <div class="location-item">STMIK Adhi Guna Palu</div>


        </div>

        <!-- RESULT -->

        <div class="selected-wrapper">

            <!-- LOCATION -->

            <div class="selected-box"
            id="locationSelected">

                <div class="selected-left">

                    <i class="fa-solid fa-location-dot"></i>

                    <div>

                        <small>
                            Lokasi terpilih:
                        </small>

                        <h4 id="selectedLocationText">
                        </h4>

                    </div>

                </div>

                <button class="remove-selected"
                id="removeLocation">

                    <i class="fa-solid fa-xmark"></i>

                </button>

            </div>

            <!-- FILTER -->

            <div class="selected-box"
            id="filterSelected">

                <div class="selected-left">

                    <i class="fa-solid fa-filter"></i>

                    <div>

                        <h4>

                            <span id="totalFilter">
                                0
                            </span>

                            filter dipilih

                        </h4>

                        <p id="filterResultText">
                        </p>

                    </div>

                </div>

                <button class="remove-selected"
                id="removeFilter">

                    <i class="fa-solid fa-xmark"></i>

                </button>

            </div>

        </div>

        <!-- FOOTER -->

        <div class="search-footer">

            <button class="btn-search" onclick="window.location.href='<?= base_url('jelajahi') ?>'">
                Cari Sekarang
            </button>

        </div>

    </div>

</div>

<!-- FILTER MODAL tetap ada -->
<!-- lanjutkan bagian filter modal dan javascript milikmu sebelumnya tanpa dihapus -->
 <!-- =========================
     FILTER MODAL
========================= -->

<div class="filter-overlay"
id="filterOverlay">

    <div class="filter-modal">

        <!-- HEADER -->

        <div class="filter-header">

            <button class="back-filter"
            id="closeFilter">

                <i class="fa-solid fa-arrow-left"></i>

            </button>

            <h2>Filter</h2>

        </div>

        <!-- CONTENT -->

        <div class="filter-content">

            <!-- TIPE -->

            <div class="filter-section">

                <h3>Tipe Penghuni</h3>

                <label class="radio-box">
                    <input type="radio"
                    name="gender"
                    checked>
                    <span>Semua</span>
                </label>

                <label class="radio-box">
                    <input type="radio"
                    name="gender">
                    <span>Campur</span>
                </label>

                <label class="radio-box">
                    <input type="radio"
                    name="gender">
                    <span>Pria</span>
                </label>

                <label class="radio-box">
                    <input type="radio"
                    name="gender">
                    <span>Wanita</span>
                </label>

            </div>

            <!-- SORT -->

            <div class="filter-section">

                <h3>Urutkan Berdasarkan</h3>

                <label class="radio-box">
                    <input type="radio"
                    name="sort"
                    checked>
                    <span>Paling Rekomendasi</span>
                </label>

                <label class="radio-box">
                    <input type="radio"
                    name="sort">
                    <span>Harga Termurah</span>
                </label>

                <label class="radio-box">
                    <input type="radio"
                    name="sort">
                    <span>Harga Tertinggi</span>
                </label>

                <label class="radio-box">
                    <input type="radio"
                    name="sort">
                    <span>Update Terbaru</span>
                </label>

            </div>

            <!-- FASILITAS -->

            <div class="filter-section">

                <h3>Fasilitas</h3>

                <div class="facility-grid">

                    <label class="check-box">
                        <input type="checkbox"
                        value="AC">
                        <span>AC</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="TV">
                        <span>TV</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="Lemari">
                        <span>Lemari</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="Internet">
                        <span>Internet</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="Air Minum">
                        <span>Air Minum</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="Kamar Mandi Dalam">
                        <span>Kamar Mandi Dalam</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="Kasur">
                        <span>Kasur</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="Meja & Kursi">
                        <span>Meja & Kursi</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="Parkir Motor">
                        <span>Parkir Motor</span>
                    </label>

                    <label class="check-box">
                        <input type="checkbox"
                        value="Parkir Mobil">
                        <span>Parkir Mobil</span>
                    </label>

                </div>

            </div>

        </div>

        <!-- FOOTER -->

        <div class="filter-footer">

            <button class="btn-reset"
            id="resetFilter">

                Reset

            </button>

            <button class="btn-apply"
            id="applyFilter">

                Terapkan Filter

            </button>

        </div>

    </div>

</div>
<script>

/* =========================
   PROFILE DROPDOWN
========================= */

const profileToggle =
document.getElementById('profileToggle');

const profileDropdown =
document.getElementById('profileDropdown');

profileToggle.addEventListener('click', () => {

    profileDropdown.classList.toggle('active');

});

/* CLOSE PROFILE */

document.addEventListener('click', (e) => {

    if(
        !profileToggle.contains(e.target) &&
        !profileDropdown.contains(e.target)
    ){

        profileDropdown.classList.remove('active');

    }

});

/* =========================
   SEARCH MODAL
========================= */

const openSearch =
document.getElementById('openSearch');

const closeSearch =
document.getElementById('closeSearch');

const searchOverlay =
document.getElementById('searchOverlay');

openSearch.onclick = () => {

    searchOverlay.classList.add('active');

}

closeSearch.onclick = () => {

    searchOverlay.classList.remove('active');

}

/* =========================
   FILTER MODAL
========================= */

const openFilter =
document.getElementById('openFilter');

const closeFilter =
document.getElementById('closeFilter');

const filterOverlay =
document.getElementById('filterOverlay');

openFilter.onclick = () => {

    filterOverlay.classList.add('active');

}

closeFilter.onclick = () => {

    filterOverlay.classList.remove('active');

}

/* =========================
   TAB SYSTEM
========================= */

const tabButtons =
document.querySelectorAll('.tab-btn');

const daerahGrid =
document.getElementById('daerahGrid');

const kampusGrid =
document.getElementById('kampusGrid');

tabButtons.forEach(tab => {

    tab.addEventListener('click', () => {

        tabButtons.forEach(btn => {
            btn.classList.remove('active');
        });

        tab.classList.add('active');

        const tabType =
        tab.getAttribute('data-tab');

        if(tabType === 'daerah'){

            daerahGrid.classList.add('active-grid');

            kampusGrid.classList.remove('active-grid');

        }else{

            kampusGrid.classList.add('active-grid');

            daerahGrid.classList.remove('active-grid');

        }

    });

});

/* =========================
   LOCATION SELECT
========================= */

const allLocationItems =
document.querySelectorAll('.location-item');

const locationSelected =
document.getElementById('locationSelected');

const selectedLocationText =
document.getElementById('selectedLocationText');

const removeLocation =
document.getElementById('removeLocation');

const searchInput =
document.getElementById('searchInput');

const searchText =
document.getElementById('searchText');

allLocationItems.forEach(item => {

    item.addEventListener('click', () => {

        allLocationItems.forEach(el => {
            el.classList.remove('active');
        });

        item.classList.add('active');

        locationSelected.style.display =
        'flex';

        const selectedText =
        item.innerText;

        selectedLocationText.innerText =
        selectedText;

        searchInput.value =
        selectedText;

        searchText.innerText =
        selectedText;

    });

});

/* REMOVE LOCATION */

removeLocation.addEventListener('click', () => {

    locationSelected.style.display =
    'none';

    searchInput.value = '';

    searchText.innerText =
    'Cari lokasi atau nama kost...';

    allLocationItems.forEach(el => {
        el.classList.remove('active');
    });

});

/* =========================
   APPLY FILTER
========================= */

const applyFilter =
document.getElementById('applyFilter');

const filterSelected =
document.getElementById('filterSelected');

const filterResultText =
document.getElementById('filterResultText');

const totalFilter =
document.getElementById('totalFilter');

const filterBadge =
document.getElementById('filterBadge');

const removeFilter =
document.getElementById('removeFilter');

const facilityCheckbox =
document.querySelectorAll(
'.facility-grid input[type="checkbox"]'
);

applyFilter.addEventListener('click', () => {

    let selected = [];

    facilityCheckbox.forEach(item => {

        if(item.checked){

            selected.push(item.value);

        }

    });

    if(selected.length > 0){

        filterSelected.style.display =
        'flex';

        filterResultText.innerText =
        selected.join(', ');

        totalFilter.innerText =
        selected.length;

        filterBadge.innerText =
        selected.length;

    }else{

        filterSelected.style.display =
        'none';

        filterBadge.innerText = 0;
    }

    filterOverlay.classList.remove('active');

});

/* =========================
   REMOVE FILTER
========================= */

removeFilter.addEventListener('click', () => {

    filterSelected.style.display =
    'none';

    totalFilter.innerText = 0;

    filterBadge.innerText = 0;

    facilityCheckbox.forEach(item => {
        item.checked = false;
    });

});

/* =========================
   RESET FILTER
========================= */

const resetFilter =
document.getElementById('resetFilter');

resetFilter.addEventListener('click', () => {

    facilityCheckbox.forEach(item => {
        item.checked = false;
    });

    filterSelected.style.display =
    'none';

    totalFilter.innerText = 0;

    filterBadge.innerText = 0;

});

/* =========================
   CLOSE MODAL OUTSIDE
========================= */

searchOverlay.addEventListener('click', (e)=>{

    if(e.target === searchOverlay){
        searchOverlay.classList.remove('active');
    }

});

filterOverlay.addEventListener('click', (e)=>{

    if(e.target === filterOverlay){
        filterOverlay.classList.remove('active');
    }

});

/* =========================
   ESC CLOSE
========================= */

document.addEventListener('keydown', (e)=>{

    if(e.key === 'Escape'){

        searchOverlay.classList.remove('active');

        filterOverlay.classList.remove('active');

    }

});

</script>
</body>
</html>