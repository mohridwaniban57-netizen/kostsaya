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
    --primary: #2563eb;
    --yellow: #2563eb;
    --dark: #0f172a;
    --gray: #64748b;
    --light: #f8fafc;
    --border: #e2e8f0;
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

    padding:20px 70px;

    background:rgba(255,255,255,.75);

    backdrop-filter:blur(18px);

    border-bottom:1px solid rgba(255,255,255,.5);

    position:sticky;
    top:0;
    z-index:1000;
}

.logo{

    display:flex;
    align-items:center;
    gap:12px;
}

.logo h1{

    font-size:32px;
    font-weight:800;

    color:var(--dark);

    letter-spacing:-1px;
}

.logo h1 span{
    color:var(--primary);
}

.logo img{

    width:55px;
    height:55px;

    object-fit:cover;

    border-radius:18px;

    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

/* =========================
   SEARCH NAVBAR
========================= */

.search-navbar{
    width:42%;
}

.search-trigger{

    width:100%;
    height:60px;

    border:none;
    border-radius:18px;

    background:white;

    display:flex;
    align-items:center;
    gap:14px;

    padding:0 22px;

    cursor:pointer;

    color:var(--gray);
    font-size:15px;

    transition:.3s;

    box-shadow:
    0 8px 30px rgba(37,99,235,.08);
}

.search-trigger:hover{

    transform:translateY(-2px);

    box-shadow:
    0 14px 40px rgba(37,99,235,.15);
}

/* =========================
   MENU
========================= */

.right-menu{
    display:flex;
    align-items:center;
    gap:16px;
}

.login-btn{

    text-decoration:none;

    color:var(--dark);

    font-weight:600;

    transition:.3s;
}

.login-btn:hover{
    color:var(--primary);
}

.register-btn{

    padding:13px 22px;

    border-radius:16px;

    background:var(--yellow);

    text-decoration:none;

    color:var(--dark);

    font-weight:700;

    transition:.3s;
}

.register-btn:hover{

    transform:translateY(-2px);

    box-shadow:
    0 12px 25px rgba(255,230,0,.35);
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

    width:760px;

    background:white;

    border-radius:32px;

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
    gap:16px;

    padding:28px;
}

.close-search{

    border:none;
    background:#f1f5f9;

    width:48px;
    height:48px;

    border-radius:14px;

    font-size:18px;

    cursor:pointer;

    transition:.3s;
}

.close-search:hover{
    background:#e2e8f0;
}

.search-input-area{

    flex:1;

    display:flex;
    gap:14px;
}

.search-input-area input{

    flex:1;
    height:58px;

    border:1px solid var(--border);

    border-radius:18px;

    padding:0 20px;

    font-size:16px;

    outline:none;

    transition:.3s;
}

.search-input-area input:focus{

    border-color:var(--primary);

    box-shadow:
    0 0 0 4px rgba(37,99,235,.12);
}

.filter-open{

    width:70px;
    height:58px;

    border:none;
    border-radius:18px;

    background:var(--yellow);

    cursor:pointer;

    font-size:18px;

    position:relative;

    transition:.3s;
}

.filter-open:hover{
    transform:translateY(-2px);
}

.filter-badge{

    position:absolute;
    top:6px;
    right:6px;

    width:22px;
    height:22px;

    border-radius:50%;

    background:#ef4444;
    color:white;

    font-size:11px;
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
    gap:14px;

    padding:0 28px 25px;
}

.tab-btn{

    flex:1;

    height:58px;

    border:none;
    border-radius:18px;

    background:#f1f5f9;

    font-size:17px;
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

    box-shadow:
    0 10px 30px rgba(37,99,235,.25);
}

/* =========================
   LOCATION GRID
========================= */

.location-grid{

    display:none;

    grid-template-columns:repeat(4,1fr);

    gap:16px;

    padding:0 28px 28px;
}

.location-grid.active-grid{
    display:grid;
}

.location-item{

    min-height:60px;

    background:white;

    border:1px solid var(--border);

    border-radius:18px;

    display:flex;
    align-items:center;
    justify-content:center;

    cursor:pointer;

    transition:.3s;

    text-align:center;

    padding:14px;

    font-size:15px;
    font-weight:500;
}

.location-item:hover{

    border-color:var(--primary);

    transform:translateY(-3px);

    box-shadow:
    0 14px 30px rgba(37,99,235,.12);
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
    padding:0 28px 22px;
}

.selected-box{

    width:100%;

    border:none;

    background:#f8fbff;

    border-radius:20px;

    padding:18px 20px;

    display:none;
    align-items:center;
    justify-content:space-between;

    margin-bottom:16px;

    box-shadow:
    inset 0 0 0 1px #dbeafe;
}

.selected-left{
    display:flex;
    gap:16px;
}

.selected-left i{

    width:42px;
    height:42px;

    border-radius:12px;

    background:#dbeafe;

    color:var(--primary);

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:16px;
}

.selected-left small{
    color:var(--gray);
}

.selected-left h4{

    color:var(--dark);

    font-size:18px;
}

.selected-left p{
    color:var(--gray);
    margin-top:3px;
}

.remove-selected{

    border:none;
    background:#f1f5f9;

    width:42px;
    height:42px;

    border-radius:12px;

    cursor:pointer;

    transition:.3s;
}

.remove-selected:hover{
    background:#e2e8f0;
}

/* =========================
   FOOTER
========================= */

.search-footer{

    padding:24px;

    border-top:1px solid var(--border);

    display:flex;
    justify-content:center;
}

.btn-search{

    width:240px;
    height:58px;

    border:none;
    border-radius:18px;

    background:var(--yellow);

    font-size:18px;
    font-weight:700;

    cursor:pointer;

    transition:.3s;
}

.btn-search:hover{

    transform:translateY(-2px);

    box-shadow:
    0 14px 35px rgba(255,230,0,.35);
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

    width:720px;
    max-height:90vh;

    background:white;

    border-radius:30px;

    overflow:hidden;

    box-shadow:
    0 25px 80px rgba(15,23,42,.2);
}

/* HEADER */

.filter-header{

    display:flex;
    align-items:center;
    gap:15px;

    padding:24px 28px;

    border-bottom:1px solid var(--border);
}

.filter-header h2{
    font-size:28px;
}

.back-filter{

    border:none;

    width:46px;
    height:46px;

    border-radius:14px;

    background:#f1f5f9;

    font-size:18px;

    cursor:pointer;
}

/* CONTENT */

.filter-content{

    padding:30px;

    max-height:65vh;

    overflow-y:auto;
}

.filter-section{
    margin-bottom:40px;
}

.filter-section h3{

    margin-bottom:22px;

    font-size:24px;

    color:var(--dark);
}

.radio-box,
.check-box{

    display:flex;
    align-items:center;
    gap:14px;

    margin-bottom:18px;

    font-size:17px;

    cursor:pointer;
}

.radio-box input,
.check-box input{

    width:22px;
    height:22px;

    accent-color:var(--primary);
}

/* FACILITY */

.facility-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);

    gap:16px;
}

/* FOOTER */

.filter-footer{

    display:flex;
    justify-content:center;
    gap:16px;

    padding:24px;

    border-top:1px solid var(--border);
}

.btn-reset,
.btn-apply{

    height:56px;

    border-radius:18px;

    font-size:17px;
    font-weight:700;

    cursor:pointer;

    transition:.3s;
}

.btn-reset{

    width:180px;

    border:1px solid var(--border);

    background:white;
}

.btn-reset:hover{
    background:#f8fafc;
}

.btn-apply{

    width:240px;

    border:none;

    background:var(--yellow);
}

.btn-apply:hover{

    transform:translateY(-2px);

    box-shadow:
    0 14px 35px rgba(255,230,0,.35);
}

/* =========================
   SCROLLBAR
========================= */

::-webkit-scrollbar{
    width:8px;
}

::-webkit-scrollbar-thumb{
    background:#cbd5e1;
    border-radius:20px;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){

    .navbar{

        flex-direction:column;

        gap:20px;

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

    <div class="logo">

       <img src="<?= base_url('img/logo.png'); ?>" alt="Logo KostSaya" class="logo-img">

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

    <!-- MENU -->

    <div class="right-menu">

        <a href="login" class="login-btn">
            Masuk
        </a>

        <a href="register" class="register-btn">
            Daftar
        </a>

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

            <div class="location-item">Jakarta</div>
            <div class="location-item">Yogyakarta</div>
            <div class="location-item">Surabaya</div>
            <div class="location-item">Bandung</div>
            <div class="location-item">Bali</div>
            <div class="location-item">Medan</div>
            <div class="location-item">Semarang</div>
            <div class="location-item">Malang</div>

        </div>

        <!-- KAMPUS -->

        <div class="location-grid"
        id="kampusGrid">

            <div class="location-item">
                Universitas Indonesia
            </div>

            <div class="location-item">
                Universitas Gadjah Mada
            </div>

            <div class="location-item">
                Universitas Diponegoro
            </div>

            <div class="location-item">
                ITS Surabaya
            </div>

            <div class="location-item">
                Universitas Airlangga
            </div>

            <div class="location-item">
                Telkom University
            </div>

            <div class="location-item">
                Binus University
            </div>

            <div class="location-item">
                Universitas Brawijaya
            </div>

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

            <button class="btn-search">
                Cari Sekarang
            </button>

        </div>

    </div>

</div>

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
   SEARCH MODAL
========================= */

const openSearch =
document.getElementById('openSearch');

const closeSearch =
document.getElementById('closeSearch');

const searchOverlay =
document.getElementById('searchOverlay');

openSearch.onclick = () =>{
    searchOverlay.classList.add('active');
}

closeSearch.onclick = () =>{
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

openFilter.onclick = () =>{
    filterOverlay.classList.add('active');
}

closeFilter.onclick = () =>{
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