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
                                <div class="hero-container">
                                    @foreach($heroes as $hero)
                                    <a href="{{ route('hero.show', ['name' => $hero->id]) }}">
                                        <img class="card img-fluid" src="/storage/{{ $hero->image }}" alt="{{ $hero->name }}" data-hero-id="{{ $hero->id }}">
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
            <div class="d-flex align-items-center" >
                <p class="text-white mb-0 me-3 fw-bold">FILTER HEROES</p>
                {{-- <ul class="navbar-nav d-flex flex-row align-items-center">
                    <li class="nav-item">
                        <div>
                            ATTRIBUTE
                        </div>
                    </li>
                    <div class="item-attribute">
                        <li class="nav-item">
                            <img src="images/STRENGTH.png" alt="Strength" class="attribute-img">
                        </li>
                        <li class="nav-item">
                            <img src="images/AGILITY.png" alt="Agility" class="attribute-img">
                        </li>
                        <li class="nav-item">
                            <img src="images/Intelligence.png" alt="Intelligence" class="attribute-img">
                        </li>
                        <li class="nav-item">
                            <img src="images/Universal.png" alt="Universal" class="attribute-img">
                        </li>
                    </div>
                    
                    <li class="nav-item ">
                        <div>
                            COMPLEXITY
                        </div>
                    </li>
                </ul> --}}
                {{-- FIlter dibawah ini --}}
                <div class="filter-group ms-3"  >
                    <span class="filter-label">COMPLEXITY:</span>
                    <select class="filter-dropdown" id="complexity-filter">
                        <option value="">All</option>
                        <option value="1">Easy</option>
                        <option value="2">Medium</option>
                        <option value="3">Hard</option>
                    </select>
                </div>
                <div class="filter-group">
                    <span class="filter-label">ROLES:</span>
                    <select class="filter-dropdown" id="roles-filter">
                        <option value="">All</option>
                        <option value="carry">Carry</option>
                        <option value="support">Support</option>
                        <option value="offlane">Nuker</option>
                        <option value="mid">Disabler</option>
                        <option value="mid">Jungler</option>
                        <option value="mid">Durable</option>
                        <option value="mid">Escape</option>
                        <option value="mid">Pusher</option>
                        <option value="mid">Initiator</option>
                    </select>
                </div>
                <div class="filter-group">
                    <span class="filter-label">ATTACK TYPE:</span>
                    <select class="filter-dropdown" id="attack-type-filter">
                        <option value="">All</option>
                        <option value="melee">Melee</option>
                        <option value="ranged">Ranged</option>
                    </select>
                </div>
    
            </div>
            <div class="position-relative">
                <input type="text" class="search-box" id="search-box" placeholder="Search">
                <span class="search-icon">🔍</span>
            </div>            
        </div>
    </nav>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/galleryhero.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search-box').on('keyup', function() {
                var query = $(this).val().trim();
    
                if (query === '') {
                    location.reload(); // Jika input kosong, reload halaman agar daftar hero kembali
                    return;
                }
    
                $.ajax({
                    url: "{{ route('heroes.search') }}",
                    type: "GET",
                    data: { query: query },
                    success: function(data) {
                        $('#hero-list').html('');
                        if (data.length === 0) {
                            $('#hero-list').append('<p class="text-center text-warning">Hero tidak ditemukan</p>');
                        } else {
                            $.each(data, function(key, hero) {
                                $('#hero-list').append(`
                                    <div class="page">
                                        <div class="row text-center py-4 hero-section">
                                            <div class="col-md-12">
                                                <div class="box text-start d-flex align-items-center border-bottom ">
                                                    <img src="/storage/${hero.image}" alt="${hero.name}" class="img-fluid me-2" style="width: 50px;">
                                        
                                                    ${hero.primary_attribute}

                                                </div>
                                                <div class="hero-container">
                                                    <a href="/hero/${hero.id}">
                                                        <img class="card img-fluid" src="/storage/${hero.image}" alt="${hero.name}" data-hero-id="${hero.id}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            });
                        }
                    }
                });
            });
        });
        
    </script>

    
    
</body>
</html>