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
            <div id="hero-list">
                @foreach($groupedHeroes as $attribute => $heroes)
                    <div class="page hero-section {{ strtolower($attribute) }}" id="{{ strtolower($attribute) }}">
                        <div class="row text-center py-4">
                            <div class="col-md-12">
                                <div class="box text-start d-flex align-items-center border-bottom">
                                    <img src="images/{{ strtolower($attribute) }}.png" alt="{{ $attribute }}" class="img-fluid me-2" style="width: 50px;">
                                    <h5 class="mb-0">{{ $attribute }}</h5>
                                </div>
                                <div class="hero-container d-flex flex-wrap">
                                    @foreach($heroes as $hero)
                                    <a href="{{ route('hero.show', ['name' => $hero->id]) }}" class="m-2">
                                        <img class="card img-fluid" 
                                             src="/storage/{{ $hero->image }}" 
                                             alt="{{ $hero->name }}" 
                                             data-hero-id="{{ $hero->id }}" 
                                             data-complexity="{{ $hero->complexity }}">
                                    </a>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <nav class="navbar-bawah navbar-expand-lg navbar-dark fixed-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <p class="text-white mb-0 fw-bold">FILTER HEROES</p>
                <ul class="navbar-nav d-flex flex-row align-items-center">
                    <!-- ATTRIBUTE -->
                    {{-- <li class="nav-item fw-bold me-2">
                        <span>ATTRIBUTE:</span>
                    </li>
                    <li class="item-attribute d-flex">
                        <img src="images/STRENGTH.png" alt="Strength" class="attribute-img">
                        <img src="images/AGILITY.png" alt="Agility" class="attribute-img">
                        <img src="images/Intelligence.png" alt="Intelligence" class="attribute-img">
                        <img src="images/Universal.png" alt="Universal" class="attribute-img">
                    </li> --}}
    
                    <!-- COMPLEXITY -->
                    <li class="nav-item fw-bold ms-4 me-2">
                        <span>COMPLEXITY:</span>
                    </li>
                    <li class="item-attribute">
                        <div class="d-flex">
                            <div class="diamond-box" data-complexity="1"><div class="diamond"></div></div>
                            <div class="diamond-box" data-complexity="2"><div class="diamond"></div></div>
                            <div class="diamond-box" data-complexity="3"><div class="diamond"></div></div>
                        </div>
                    </li>
                    {{-- ROLES FILTER --}}
                    <li class="nav-item fw-bold ms-4 me-2">
                        <span>ROLES:</span>
                    </li>
                    {{-- ATTACK TYPE FILTER --}}
                    <li class="nav-item fw-bold ms-4 me-2">
                        <span>ATTACK TYPE:</span>
                    </li>
                </ul>
            </div>
    
            <!-- Search Box -->
            <div class="position-relative">
                <input type="text" class="search-box" id="search-box" placeholder="Search">
               
            </div>            
    
        </div>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/galleryhero.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Event handler ketika diamond-box diklik
            $('.diamond-box').click(function() {
                $('.diamond-box').removeClass('active'); // Hapus active dari semua
                $(this).addClass('active'); // Tambahkan active ke yang diklik
                
                let selectedComplexity = $(this).data('complexity'); // Ambil complexity yang dipilih
    
                // Panggil AJAX untuk filter hero berdasarkan complexity
                $.ajax({
                    url: "{{ route('heroes.filter') }}", // Rute ke controller
                    type: "GET",
                    data: { complexity: selectedComplexity },
                    success: function(response) {
                        $('#hero-list').html(''); // Kosongkan daftar hero
    
                        if (response.length === 0) {
                            $('#hero-list').append('<p class="text-center text-warning">Tidak ada hero dengan complexity ini</p>');
                        } else {
                            // Tambahkan hero yang sesuai ke dalam daftar
                            $.each(response, function(index, hero) {
                                let attributeImage = '';
                                switch(hero.primary_attribute.toLowerCase()) {
                                    case 'strength':
                                        attributeImage = 'images/strength.png';
                                        break;
                                    case 'agility':
                                        attributeImage = 'images/agility.png';
                                        break;
                                    case 'intelligence':
                                        attributeImage = 'images/intelligence.png';
                                        break;
                                    case 'universal':
                                        attributeImage = 'images/universal.png';
                                        break;
                                    default:
                                        attributeImage = 'images/default.png';
                                }
    
                                let heroHtml = `
                                    <div class="page hero-section">
                                        <div class="row text-center py-4">
                                            <div class="col-md-12">
                                                <div class="box text-start d-flex align-items-center border-bottom">
                                                    <img src="${attributeImage}" alt="${hero.primary_attribute}" class="img-fluid me-2" style="width: 50px;">
                                                    <h5 class="mb-0">${hero.primary_attribute}</h5>
                                                </div>
                                                <div class="hero-container d-flex flex-wrap">
                                                    <a href="/hero/${hero.id}" class="m-2">
                                                        <img class="card img-fluid" src="/storage/${hero.image}" alt="${hero.name}" data-hero-id="${hero.id}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `;
                                $('#hero-list').append(heroHtml);
                            });
                        }
                    }
                });
            });
        });
    </script>
    
    
</body>
</html>