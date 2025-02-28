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
                <p class="fitur-heroes text-white mb-0 fw-bold">
                    FILTER
                </p>
                <ul class="navbar-nav d-flex flex-row align-items-center ms-3">
                    <!-- COMPLEXITY -->
                    <li class="nav-item fw-bold ms-1 me-3">
                        <span>COMPLEXITY:</span>
                    </li>
                    <li class="item-attribute ">
                        <div class="d-flex">
                            <div class="diamond-box" data-complexity="1"><div class="diamond"></div></div>
                            <div class="diamond-box" data-complexity="2"><div class="diamond"></div></div>
                            <div class="diamond-box" data-complexity="3"><div class="diamond"></div></div>
                        </div>
                    </li>
                    {{-- ROLES FILTER --}}
                    <li class="nav-item fw-bold ms-3 me-3">
                        <span>ROLES:</span>
                    </li>
                    <li class="item-attribute"> 
                        <div class="role-container">
                            <div class="role-row">
                                <img src="images/carry.png" alt="carry">
                                <img src="images/support.png" alt="support">
                                <img src="images/nuker.png" alt="nuker">
                                <img src="images/disabler.png" alt="disabler">
                            </div>
                            <div class="role-row">
                                <img src="images/durable.png" alt="durable">
                                <img src="images/escape.png" alt="escape">
                                <img src="images/pusher.png" alt="pusher">
                                <img src="images/initiator.png" alt="initiator">
                            </div>
                        </div>
                    </li>
                    
                    {{-- ATTACK TYPE FILTER --}}
                    <li class="nav-item fw-bold ms-3 me-3">
                        <span>ATTACK TYPE:</span>
                    </li>
                    <li class="item-attribute-attack">
                        <div class="d-flex align-items-center gap-2">
                            <img src="images/Melee_icon.webp" alt="" class="attribute-img-attack border border-dark skew-15">
                            <img src="images/Ranged_icon.webp" alt="" class="attribute-img-attack border border-dark skew-15">
                        </div>
                    </li>
                   
                    
                </ul>
                    <!-- Search Box -->
                 <div class="position-relative ms-5" >
                    <input type="text" class="search-box" id="search-box" placeholder="Search">
                
                </div> 
            </div>
                 
        </div>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/galleryhero.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //complexcity
        $(document).ready(function() {
            $('.diamond-box').click(function() {
                let complexity = $(this).data('complexity');

                // Hapus semua active terlebih dahulu
                $('.diamond-box').removeClass('active');

                // Aktifkan semua diamond-box hingga complexity yang diklik

                // MAtikan INIIII LEEEEE==============================================
                $('.diamond-box').each(function() {
                    if ($(this).data('complexity') <= complexity) {
                        $(this).addClass('active');
                    }
                });

                // Panggil AJAX untuk filter hero berdasarkan complexity
                $.ajax({
                    url: "{{ route('heroes.filter') }}",
                    type: "GET",
                    data: { complexity: complexity },
                    success: function(response) {
                        $('#hero-list').html('');

                        if (response.length === 0) {
                            $('#hero-list').append('<p class="text-center text-warning">Tidak ada hero dengan complexity ini</p>');
                        } else {
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

        //Bagian Search
        $(document).ready(function() {
        $('#search-box').on('keyup', function() {
            var query = $(this).val().trim();

            if (query === '') {
                location.reload(); // Jika input kosong, reload halaman agar daftar hero kembali
                return;
            }

            $.ajax({
                url: "{{ route('heroes.filter') }}",
                type: "GET",
                data: { query: query },
                success: function(response) {
                    $('#hero-list').html('');

                    if (response.length === 0) {
                        $('#hero-list').append('<p class="text-center text-warning">Tidak ada hero dengan complexity ini</p>');
                    } else {
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

{{-- untuk role hero --}}
    <script>
    $(document).ready(function() {
        $('.item-attribute img').click(function() {
            let role = $(this).attr('alt').toLowerCase(); // Ambil nama role dari atribut alt
            
            // Toggle aktif dan nonaktif
            $(this).toggleClass('active');
    
            // Ambil daftar hero yang sesuai
            $.ajax({
                url: "{{ route('heroes.filter') }}",
                type: "GET",
                data: { role: role },
                success: function(response) {
                    $('#hero-list').html('');
                    
                    if (response.length === 0) {
                        $('#hero-list').append('<p class="text-center text-warning">Tidak ada hero dengan role ini</p>');
                    } else {
                        $.each(response, function(index, hero) {
                            let heroHtml = `
                                <a href="/hero/${hero.id}" class="m-2">
                                    <img class="card img-fluid" src="/storage/${hero.image}" alt="${hero.name}" data-hero-id="${hero.id}">
                                </a>
                            `;
                            $('#hero-list').append(heroHtml);
                        });
                    }
                }
            });
        });
    });
    </script>  
    
    {{-- untuk attack type hero --}}
    <script>
        $(document).ready(function() { 
    $('.item-attribute-attack img').click(function() {
        let role = $(this).attr('alt').toLowerCase(); // Ambil nama role dari atribut alt

        // Jika ikon yang diklik sudah active, maka nonaktifkan (kembali ke ukuran normal)
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            // Hapus class active dari semua ikon attack type
            $('.item-attribute-attack img').removeClass('active');

            // Tambahkan class active hanya ke ikon yang diklik
            $(this).addClass('active');
        }

        // Ambil daftar hero yang sesuai
        $.ajax({
            url: "{{ route('heroes.filter') }}",
            type: "GET",
            data: { role: role },
            success: function(response) {
                $('#hero-list').html('');

                if (response.length === 0) {
                    $('#hero-list').append('<p class="text-center text-warning">Tidak ada hero dengan role ini</p>');
                } else {
                    $.each(response, function(index, hero) {
                        let heroHtml = `
                            <a href="/hero/${hero.id}" class="m-2">
                                <img class="card img-fluid" src="/storage/${hero.image}" alt="${hero.name}" data-hero-id="${hero.id}">
                            </a>
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