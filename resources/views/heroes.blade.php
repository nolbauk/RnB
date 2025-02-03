<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Hero - Dota 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <style>
        body {
            padding-top: 100px; /* Sesuaikan dengan tinggi header */
        }
    </style>
</head>
<body class="bg-dark text-white">
    <div class="container">
        <header>
            <div class="logo">
                <img src="{{ asset('img/BISMILLAH.png') }}" alt="Logo" />
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
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid d-flex align-items-center">
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
        <div class="row text-center py-4">
            <!-- Kiri Atas -->
            <div class="col-md-6">
                <div class="box text-start  d-flex align-items-center">
                    <img src="{{ asset('img/universal.jfif') }}" alt="Support" class="img-fluid me-2" style="width: 50px;">
                    Maksman
                </div>
                <div class="hero-container">
                    @foreach($heroes as $hero)
                        <img class="card" src="{{ asset('img/' . $hero->image) }}" alt="{{ $hero->name }}">
                    @endforeach
                </div>
            </div>
            <!-- Kanan Atas -->
            <div class="col-md-6">
                <div class="box text-start  d-flex align-items-center">
                    <img src="{{ asset('img/universal.jfif') }}" alt="Support" class="img-fluid me-2" style="width: 50px;">
                    Fighter
                </div>
                <div class="hero-container">
                    @foreach($heroes as $hero)
                        <img class="card" src="{{ asset('img/' . $hero->image) }}" alt="{{ $hero->name }}">
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="row mt-3 text-center">
            <!-- Kiri Bawah -->
            <div class="col-md-6">
                <div class="box text-start  d-flex align-items-center">
                    <img src="{{ asset('img/universal.jfif') }}" alt="Support" class="img-fluid me-2" style="width: 50px;">
                    Mage
                </div>
                <div class="hero-container">
                    @foreach($heroes as $hero)
                        <img class="card" src="{{ asset('img/' . $hero->image) }}" alt="{{ $hero->name }}">
                    @endforeach
                </div>
            </div>
            <!-- Kanan Bawah -->
            <div class="col-md-6">
                <div class="box text-start  d-flex align-items-center">
                    <img src="{{ asset('img/universal.jfif') }}" alt="Support" class="img-fluid me-2" style="width: 50px;">
                    Support
                </div>
                <div class="hero-container">
                    @foreach($heroes as $hero)
                        <img class="card" src="{{ asset('img/' . $hero->image) }}" alt="{{ $hero->name }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>