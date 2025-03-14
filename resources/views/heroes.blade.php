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

        <!-- HERO LIST SECTION -->
        <div class="page-container mt-n5">
            <div id="hero-list">
                @foreach($groupedHeroes as $attribute => $heroes)
                    <div class="page hero-section {{ strtolower($attribute) }}" id="{{ strtolower($attribute) }}">
                        <div class="row text-center py-4">
                            <div class="col-md-12">
                                <!-- ATTRIBUTE HEADER -->
                                <div class="box text-start d-flex align-items-center ">
                                    <img src="images/{{ strtolower($attribute) }}.png" 
                                         alt="{{ $attribute }}" 
                                         class="img-fluid me-2" 
                                         style="width: 50px;">
                                    <h5 class="mb-0 flex-grow-1">{{ $attribute }}</h5>
                                </div>

                                <!-- HEROES GRID -->
                                <div class="hero-container d-flex flex-wrap">
                                    @foreach($heroes as $hero)
                                        <a href="{{ route('hero.show', ['name' => $hero->id]) }}" class="m-2">
                                            <div class="card">
                                                <img src="/storage/{{ $hero->image }}" 
                                                     alt="{{ $hero->name }}" 
                                                     data-hero-id="{{ $hero->id }}" 
                                                     data-complexity="{{ $hero->complexity }}">
                                            </div>
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

    <!-- FILTER NAVBAR (BOTTOM FIXED) -->
    <nav class="navbar-bawah navbar-expand-lg navbar-dark fixed-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                
                <!-- FILTER TITLE -->
                <p class="fitur-heroes text-white mb-0 fw-bold">FILTER</p>
                
                <ul class="navbar-nav d-flex flex-row align-items-center ms-3">
                    
                    <!-- COMPLEXITY FILTER -->
                    <li class="nav-item fw-bold ms-1 me-3">
                        <span>COMPLEXITY:</span>
                    </li>
                    <li class="item-attribute">
                        <div class="d-flex">
                            <div class="diamond-box" data-complexity="1">
                                <div class="diamond"></div>
                            </div>
                            <div class="diamond-box" data-complexity="2">
                                <div class="diamond"></div>
                            </div>
                            <div class="diamond-box" data-complexity="3">
                                <div class="diamond"></div>
                            </div>
                        </div>
                    </li>

                    <!-- ROLE FILTER -->
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

                    <!-- ATTACK TYPE FILTER -->
                    <li class="nav-item fw-bold ms-3 me-3">
                        <span>ATTACK TYPE:</span>
                    </li>
                    <li class="item-attribute-attack">
                        <div class="d-flex align-items-center gap-2">
                            <img src="images/Melee_icon.webp" alt="Melee" 
                                 class="attribute-img-attack border border-dark skew-15">
                            <img src="images/Ranged_icon.webp" alt="Ranged" 
                                 class="attribute-img-attack border border-dark skew-15">
                        </div>
                    </li>

                </ul>

                <!-- SEARCH BOX -->
                <div class="position-relative ms-5">
                    <input type="text" class="search-box" id="search-box" placeholder="Search">
                </div>

            </div>
        </div>
    </nav>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/galleryhero.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    let filters = {
        complexity: null,
        roles: [],
        attack_type: null,
        query: null
    };

    // Filter berdasarkan Complexity
    $('.diamond-box').click(function () {
        let complexity = $(this).data('complexity');
        let lastActiveComplexity = $('.diamond-box.active').last().data('complexity') || null;

        if (lastActiveComplexity === complexity) {
            $('.diamond-box').removeClass('active');
            filters.complexity = null;
        } else {
            $('.diamond-box').removeClass('active');
            $('.diamond-box').each(function () {
                if ($(this).data('complexity') <= complexity) {
                    $(this).addClass('active');
                }
            });
            filters.complexity = complexity === 1 ? 'Easy' :
                complexity === 2 ? 'Medium' :
                complexity === 3 ? 'Hard' : null;
        }

        fetchHeroes(filters);
    });

    // Filter berdasarkan Role
    $('.role-container img').click(function () {
        let role = $(this).attr('alt'); 
        let index = filters.roles.indexOf(role);

        if (index === -1) {
            filters.roles.push(role);
            $(this).addClass('active');
        } else {
            filters.roles.splice(index, 1);
            $(this).removeClass('active');
        }

        fetchHeroes(filters);
    });

    // Filter berdasarkan Attack Type
    $('.attribute-img-attack').click(function () {
        let selectedType = $(this).attr('alt');

        if (filters.attack_type === selectedType) {
            $(this).removeClass('active');
            filters.attack_type = null;
        } else {
            $('.attribute-img-attack').removeClass('active');
            $(this).addClass('active');
            filters.attack_type = selectedType;
        }

        fetchHeroes(filters);
    });

    // Auto Search saat mengetik
    $('#search-box').on('input', function () {
        let query = $(this).val().trim();
        filters.query = query.length > 0 ? query : null;
        fetchHeroes(filters);
    });

    // 🔥 Fungsi AJAX untuk mengambil hero yang sudah difilter
    function fetchHeroes(params) {
        let queryParams = {};

        if (params.complexity) {
            queryParams.complexity = params.complexity;
        }

        if (params.roles.length > 0) {
            params.roles.forEach(role => {
                queryParams[role.toLowerCase()] = 1;
            });
        }

        if (params.attack_type) {
            queryParams.attack_type = params.attack_type;
        }

        if (params.query) {
            queryParams.query = params.query;
        }

        $.ajax({
            url: "/heroes/filter",
            type: "GET",
            data: queryParams,
            success: function (response) {
                let heroHtml = '';
                let groupedHeroes = {};

                if ($.isEmptyObject(response)) {
                    heroHtml = '<p class="text-center text-warning">Tidak ada hero yang ditemukan</p>';
                } else {
                    $.each(response, function (index, hero) {
                        let attribute = hero.primary_attribute;
                        if (!groupedHeroes[attribute]) {
                            groupedHeroes[attribute] = [];
                        }
                        groupedHeroes[attribute].push(hero);
                    });

                    $.each(groupedHeroes, function (attribute, heroes) {
                        let attributeImage = `images/${attribute.toLowerCase()}.png`;
                        heroHtml += `
                            <div class="page hero-section ${attribute.toLowerCase()}" id="${attribute.toLowerCase()}">
                                <div class="row text-center py-4">
                                    <div class="col-md-12">
                                        <div class="align-items-center">
                                            <div class="box text-start d-flex align-items-center border-bottom">
                                                <img src="${attributeImage}" alt="${attribute}" class="img-fluid me-2" style="width: 50px;">
                                                <h5 class="mb-0 flex-grow-1">${attribute}</h5>
                                            </div>
                                        </div>                                
                                        <div class="hero-container d-flex flex-wrap">
                        `;

                        $.each(heroes, function (index, hero) {
                            heroHtml += `
                                <a href="/hero/${hero.id}" class="m-2">
                                    <div class="card">
                                        <img src="/storage/${hero.image}" 
                                            alt="${hero.name}" 
                                            data-hero-id="${hero.id}" 
                                            data-complexity="${hero.complexity}">
                                    </div>
                                </a>
                            `;
                        });

                        heroHtml += `</div></div></div></div>`;
                    });
                }

                $('#hero-list').empty().append(heroHtml);
                currentIndex = 0; // Reset index scrolling
                updateHeroSection(0);
            }
        });
    }
});
</script>

{{-- complexity --}}
{{-- <script>
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
</script> --}}

{{-- untuk role hero --}}
{{-- <script>
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
</script> --}}
    
{{-- untuk attack type hero --}}
{{-- <script>
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
</script> --}}

</html>