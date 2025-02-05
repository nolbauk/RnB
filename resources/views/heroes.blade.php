<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Hero - Dota 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/herogallery.css">
    <link rel="stylesheet" href="css/header1.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding-top: 100px; /* Sesuaikan dengan tinggi header */
            padding-bottom: 60px; /* Memberikan ruang untuk navbar fixed-bottom */
            overflow: hidden; /* Mencegah scroll pada body */
        }

        .page-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 160px); /* Sesuaikan dengan tinggi header dan footer */
            position: relative;
        }

        .page {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow-y: auto;
            display: none; /* Sembunyikan semua halaman kecuali yang aktif */
        }

        .page.active {
            display: block; /* Tampilkan halaman yang aktif */
        }
    </style>
</head>
<body class="bg-dark text-white">
    <div class="container">
        <header style="background-color: #1b1b1b">
            <div class="logo">
                <img src="images/BISMILLAH.png" alt="Logo" />
            </div>
            <nav>
                <ul>
                    <li><a href="#page-1">HERO</a></li>
                    <li><a href="item">ITEM</a></li>
                    <li><a href="#page-3">NEWS</a></li>
                    <li><a href="#page-4">FORUM</a></li>
                </ul>
            </nav>
            <div class="login">
                <a href="/login">Login</a>
            </div>
        </header>

        <div class="page-container">
            <div class="page active" id="page-1">
                <div class="row text-center py-4 hero-section strength">
                    <div class="col-md-12">
                        <div class="box text-start d-flex align-items-center border-bottom ">
                            <img src="images/universal.jfif" alt="Support" class="img-fluid me-2" style="width: 50px;">
                            Strength
                        </div>
                        <div class="hero-container">
                            @foreach($heroes as $hero)
                                <img class="card" src="img/{{ $hero->image }}" alt="{{ $hero->name }}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="page" id="page-2">
                <div class="row text-center py-4 hero-section agility">
                    <div class="col-md-12">
                        <div class="box text-start d-flex align-items-center border-bottom ">
                            <img src="images/universal.jfif" alt="Support" class="img-fluid me-2" style="width: 50px;">
                            11111
                        </div>
                        <div class="hero-container">
                            @foreach($heroes as $hero)
                                <img class="card" src="img/{{ $hero->image }}" alt="{{ $hero->name }}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="page" id="page-3">
                <div class="row text-center py-4 hero-section intelligence">
                    <div class="col-md-12">
                        <div class="box text-start d-flex align-items-center border-bottom ">
                            <img src="images/universal.jfif" alt="Support" class="img-fluid me-2" style="width: 50px;">
                            22222
                        </div>
                        <div class="hero-container">
                            @foreach($heroes as $hero)
                                <img class="card" src="img/{{ $hero->image }}" alt="{{ $hero->name }}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="page" id="page-4">
                <div class="row text-center py-4 p-0 hero-section universal">
                    <div class="col-md-12">
                        <div class="box text-start d-flex align-items-center border-bottom ">
                            <img src="images/universal.jfif" alt="Support" class="img-fluid me-2" style="width: 50px;">
                            33333
                        </div>
                        <div class="hero-container">
                            @foreach($heroes as $hero)
                                <img class="card" src="img/{{ $hero->image }}" alt="{{ $hero->name }}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-bottom">
        <div class="container d-flex align-items-center">
            <p class="text-white mb-0 me-3">FILTER HEROES</p>

            <ul class="navbar-nav d-flex flex-row align-items-center me-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">ATTRIBUTE</a>
                </li>
                <li class="nav-item">
                    <img src="path/to/image1.png" alt="Image 1" class="attribute-img">
                </li>
                <li class="nav-item">
                    <img src="path/to/image2.png" alt="Image 2" class="attribute-img">
                </li>
                <li class="nav-item">
                    <img src="path/to/image3.png" alt="Image 3" class="attribute-img">
                </li>
                <li class="nav-item">
                    <img src="path/to/image4.png" alt="Image 4" class="attribute-img">
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link text-white" href="#">COMPLEXITY</a>
                </li>
                <li class="nav-item">
                    <img src="path/to/image5.png" alt="Image 5" class="attribute-img">
                </li>
                <li class="nav-item">
                    <img src="path/to/image6.png" alt="Image 6" class="attribute-img">
                </li>
                <li class="nav-item">
                    <img src="path/to/image7.png" alt="Image 7" class="attribute-img">
                </li>
            </ul>

            <div class="position-relative">
                <input type="text" class="search-box" placeholder="Search">
                <span class="search-icon">🔍</span>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentPage = 0;
        const pages = document.querySelectorAll('.page');
        const totalPages = pages.length;

        function showPage(pageIndex) {
            if (pageIndex >= 0 && pageIndex < totalPages) {
                pages.forEach((page, index) => {
                    page.classList.toggle('active', index === pageIndex);
                });
                currentPage = pageIndex;
            }
        }

        // Menangani penekanan tombol
        window.addEventListener('keydown', (e) => {
            if (e.key === 'PageDown' || e.key === 'ArrowDown') {
                // Pindah ke halaman berikutnya jika ada
                if (currentPage < totalPages - 1) {
                    showPage(currentPage + 1);
                }
            } else if (e.key === 'PageUp' || e.key === 'ArrowUp') {
                // Pindah ke halaman sebelumnya jika ada
                if (currentPage > 0) {
                    showPage(currentPage - 1);
                }
            }
        });

        // Menangani scroll pada touchpad
        window.addEventListener('wheel', (e) => {
            if (e.deltaY > 0) {
                // Scroll Down
                if (currentPage < totalPages - 1) {
                    showPage(currentPage + 1);
                }
            } else if (e.deltaY < 0) {
                // Scroll Up
                if (currentPage > 0) {
                    showPage(currentPage - 1);
                }
            }
        });

        // Inisialisasi halaman pertama sebagai aktif
        showPage(currentPage);
    </script>
</body>
</html>