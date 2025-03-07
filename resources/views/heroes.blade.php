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
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/galleryhero.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- complexity --}}
<script>
$(document).ready(function () {
    // Filter berdasarkan Complexity
    $('.diamond-box').click(function () {
        let complexity = $(this).data('complexity');

        // Cek apakah complexity yang diklik sudah aktif
        let lastActiveComplexity = $('.diamond-box.active').last().data('complexity') || null;

        if (lastActiveComplexity === complexity) {
            $('.diamond-box').removeClass('active');
            fetchHeroes({}); // Ambil semua hero tanpa filter
        } else {
            $('.diamond-box').removeClass('active');

            // Aktifkan semua diamond-box dengan complexity <= yang diklik
            $('.diamond-box').each(function () {
                if ($(this).data('complexity') <= complexity) {
                    $(this).addClass('active');
                }
            });

            // Konversi complexity menjadi string
            let complexityFilter = complexity === 1 ? 'Easy' :
                complexity === 2 ? 'Medium' :
                complexity === 3 ? 'Hard' : '';

            fetchHeroes({ complexity: complexityFilter });
        }
    });

    // Fungsi AJAX untuk mengambil hero
    function fetchHeroes(params) {
        $.ajax({
            url: "{{ route('heroes.filter') }}",
            type: "GET",
            data: params,
            success: function (response) {
                $('#hero-list').empty(); // Kosongkan daftar hero

                if ($.isEmptyObject(response)) {
                    $('#hero-list').append('<p class="text-center text-warning">Tidak ada hero yang ditemukan</p>');
                    return;
                }

                let heroHtml = '';

                // Memisahkan hero berdasarkan primary attribute
                let groupedHeroes = {};
                $.each(response, function (index, hero) {
                    let attribute = hero.primary_attribute; // Asumsikan ada field primary_attribute
                    if (!groupedHeroes[attribute]) {
                        groupedHeroes[attribute] = [];
                    }
                    groupedHeroes[attribute].push(hero);
                });

                // Menampilkan hero yang telah dikelompokkan
                $.each(groupedHeroes, function (attribute, heroes) {
                    let attributeImage = getAttributeImage(attribute);
                    heroHtml += `
                        <div class="page hero-section ${attribute.toLowerCase()}" id="${attribute.toLowerCase()}">
                            <div class="row text-center py-4">
                                <div class="col-md-12">
                                    <div class="box text-start d-flex align-items-center border-bottom">
                                        <img src="${attributeImage}" alt="${attribute}" class="img-fluid me-2" style="width: 50px;">
                                        <h5 class="mb-0">${attribute}</h5>
                                    </div>
                                    <div class="hero-container d-flex flex-wrap">
                    `;

                    $.each(heroes, function (index, hero) {
                        heroHtml += `
                            <a href="/hero/${hero.id}" class="m-2">
                                <img class="card img-fluid" src="/storage/${hero.image}" alt="${hero.name}" data-hero-id="${hero.id}">
                            </a>
                        `;
                    });

                    heroHtml += `
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });

                $('#hero-list').append(heroHtml);
            }
        });
    }

    // Fungsi mendapatkan gambar atribut hero
    function getAttributeImage(attribute) {
        const images = {
            'strength': 'images/strength.png',
            'agility': 'images/agility.png',
            'intelligence': 'images/intelligence.png',
            'universal': 'images/universal.png'
        };
        return images[(attribute || '').toLowerCase()] || 'images/default.png';
    }
});
</script>

{{-- untuk role hero --}}
<script>
    $(document).ready(function() {
        $('.item-attribute img').click(function() {
            let role = $(this).attr('alt').toLowerCase(); // Ambil nama role dari atribut alt
            
            // Toggle class active untuk ikon yang diklik
            $(this).toggleClass('active').siblings().removeClass('active');

            // Ambil daftar hero yang sesuai
            $.ajax({
                url: "{{ route('heroes.filter') }}",
                type: "GET",
                data: { role: role },
                success: function(response) {
                    $('#hero-list').empty(); // Kosongkan daftar hero
                    
                    if (response.length === 0) {
                        $('#hero-list').append('<p class="text-center text-warning">Tidak ada hero dengan role ini</p>');
                    } else {
                        $.each(response, function(index, hero) {
                            $('#hero-list').append(`
                                <a href="/hero/${hero.id}" class="m-2">
                                    <img class="card img-fluid" src="/storage/${hero.image}" alt="${hero.name}" data-hero-id="${hero.id}">
                                </a>
                            `);
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
    
                // Toggle class active untuk ikon yang diklik
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                } else {
                    $('.item-attribute-attack img').removeClass('active'); // Hapus class active dari semua ikon
                    $(this).addClass('active'); // Tambahkan class active hanya ke ikon yang diklik
                }
    
                // Ambil daftar hero yang sesuai
                $.ajax({
                    url: "{{ route('heroes.filter') }}",
                    type: "GET",
                    data: { role: role },
                    success: function(response) {
                        $('#hero-list').empty(); // Kosongkan daftar hero
    
                        if (response.length === 0) {
                            $('#hero-list').append('<p class="text-center text-warning">Tidak ada hero dengan role ini</p>');
                        } else {
                            $.each(response, function(index, hero) {
                                $('#hero-list').append(`
                                    <a href="/hero/${hero.id}" class="m-2">
                                        <img class="card img-fluid" src="/storage/${hero.image}" alt="${hero.name}" data-hero-id="${hero.id}">
                                    </a>
                                `);
                            });
                        }
                    }
                });
            });
        });
</script>

</html>