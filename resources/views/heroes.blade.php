<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Hero - Dota 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/herogallery.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body class="bg-dark text-white">
    <div class="container">
        @include('header')
        <div class="page-container" style="margin-top: -110px">
            @foreach($groupedHeroes as $attribute => $heroes)
                <div class="page" id="page-{{ $loop->index + 1 }}">
                    <div class="row text-center py-4 hero-section {{ strtolower($attribute) }}">
                        <div class="col-md-12">
                            <div class="box text-start d-flex align-items-center border-bottom ">
                                <img src="images/universal.jfif" alt="{{ $attribute }}" class="img-fluid me-2" style="width: 50px;">
                                {{ $attribute }}
                            </div>
                            <div class="hero-container">
                                @foreach($heroes as $hero)
                                    <img class="card img-fluid" src="/storage/{{ $hero->image }}" alt="{{ $hero->name }}" data-hero-id="{{ $hero->id }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                    {{-- <img src="path/to/image1.png" alt="Image 1" class="attribute-img"> --}}
                </li>
                <li class="nav-item">
                    {{-- <img src="path/to/image2.png" alt="Image 2" class="attribute-img"> --}}
                </li>
                <li class="nav-item">
                    {{-- <img src="path/to/image3.png" alt="Image 3" class="attribute-img"> --}}
                </li>
                <li class="nav-item">
                    {{-- <img src="path/to/image4.png" alt="Image 4" class="attribute-img"> --}}
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link text-white" href="#">COMPLEXITY</a>
                </li>
                <li class="nav-item">
                    {{-- <img src="path/to/image5.png" alt="Image 5" class="attribute-img"> --}}
                </li>
                <li class="nav-item">
                    {{-- <img src="path/to/image6.png" alt="Image 6" class="attribute-img"> --}}
                </li>
                <li class="nav-item">
                    {{-- <img src="path/to/image7.png" alt="Image 7" class="attribute-img"> --}}
                </li>
            </ul>
            <div class="position-relative">
                <input type="text" class="search-box" placeholder="Search">
                <span class="search-icon">🔍</span>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/galleryhero.js"></script>
</body>
</html>