<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $hero->name }} - Dota 2</title>
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/hero-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home/jquery.mCustomScrollbar.min.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/logo.png') }}">
</head>
<body>
    <!-- Header Section -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html">
                    <img src="/images/logo2.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">HERO</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">ITEM</a></li>
                        <li class="nav-item"><a class="nav-link" href="icecream.html">NEWS</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.html">FORUM</a></li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="cart_bt"><a href="#">LOGIN</a></div>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <!-- Hero Detail Section -->
    <div class="container-hero">
        <div class="hero-detail">
            <div class="row">
                <!-- Left Column: Hero Image and Stats -->
                <div class="col-md-6">
                    <div class="card" style="width: 35rem; background-color: #2a2a2a;">
                        <img class="card-img-top img-fluid hero-image" src="/storage/{{ $hero->image }}" alt="{{ $hero->name }}">
                        <div class="card-body">
                            <div class="abilities">
                                <img src="/storage/{{ $hero->ability1 }}" alt="Ability 1" class="ability-icon">
                                <img src="/storage/{{ $hero->ability2 }}" alt="Ability 2" class="ability-icon">
                                <img src="/storage/{{ $hero->ability3 }}" alt="Ability 3" class="ability-icon">
                                <img src="/storage/{{ $hero->ability4 }}" alt="Ability 4" class="ability-icon">
                            </div>
                        </div>
                    </div>

                    <!-- Attributes Section -->
                    <h3 class="mt-3 text-white">Attributes</h3>
                    <ul class="list-unstyled text-white">
                        <li>
                            <strong>Health:</strong> 
                            <span class="text-success">{{ $hero->health }}</span>
                            <span class="text-info">(+{{ $hero->health_regen }})</span>
                        </li>
                        <li>
                            <strong>Mana:</strong>
                            <span class="text-primary">{{ $hero->mana }}</span>
                            <span class="text-info">(+{{ $hero->mana_regen }})</span>
                        </li>
                        <li>
                            <strong>Strength:</strong>
                            <span class="text-danger">{{ $hero->primary_strength }}</span>
                            <span class="text-info">(+{{ $hero->strength_per_lvl }})</span>
                        </li>
                        <li>
                            <strong>Agility:</strong>
                            <span class="text-success">{{ $hero->primary_agility }}</span>
                            <span class="text-info">(+{{ $hero->agility_per_lvl }})</span>
                        </li>
                        <li>
                            <strong>Intelligence:</strong>
                            <span class="text-warning">{{ $hero->primary_intelligence }}</span>
                            <span class="text-info">(+{{ $hero->intelligence_per_lvl }})</span>
                        </li>
                    </ul>

                    <!-- Talent Tree Section -->
                    <h3 class="mt-3 text-white">Hero Talent Tree</h3>
                    <table class="talent-tree">
                        <tr>
                            <td class="talent talent-left">{{ $hero->talent_25_left }}</td>
                            <td class="level">Level 25</td>
                            <td class="talent talent-right">{{ $hero->talent_25_right }}</td>
                        </tr>
                        <tr>
                            <td class="talent talent-left">{{ $hero->talent_20_left }}</td>
                            <td class="level">Level 20</td>
                            <td class="talent talent-right">{{ $hero->talent_20_right }}</td>
                        </tr>
                        <tr>
                            <td class="talent talent-left">{{ $hero->talent_15_left }}</td>
                            <td class="level">Level 15</td>
                            <td class="talent talent-right">{{ $hero->talent_15_right }}</td>
                        </tr>
                        <tr>
                            <td class="talent talent-left">{{ $hero->talent_10_left }}</td>
                            <td class="level">Level 10</td>
                            <td class="talent talent-right">{{ $hero->talent_10_right }}</td>
                        </tr>
                    </table>

                    <!-- Voice Actor Section -->
                    <h3 class="text-white mt-3">Voice Actor</h3>
                    <p class="text-white">{{ $hero->voice_actor }}</p>
                </div>

                <!-- Right Column: Hero Details -->
                <div class="col-md-6">
                    <p>{{ $hero->primary_attribute }}</p>
                    <h1 class="hero-name">{{ $hero->name }}</h1>
                    <p class="fst-italic">{{ $hero->bio }}</p>
                    <p>{{ $hero->lore }}</p>
                    <ul class="list-unstyled">
                        <li><strong>Primary Attribute:</strong> {{ $hero->primary_attribute }}</li>
                        <li><strong>Attack Type:</strong> {{ $hero->attack_type }}</li>
                        <li><strong>Roles:</strong> {{ $hero->roles }}</li>
                        <li><strong>Complexity:</strong> {{ $hero->complexity }}</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4 align-items-center text-center bg-danger">
                <!-- Bagian Kiri -->
                <div class="col-4">
                    <h3 class="text-white mt-3">Stats</h3>
                    <p>ATTACK</p>
                    <ul class="list-unstyled text-white">
                        <li class="mt-3">
                            <img src="{{ asset('images/pedang le.png') }}" alt="Attack Damage" class="me-3">
                            <strong>Attack Damage:</strong>
                            <span class="text-danger">{{ $hero->attack_dmg_min }} - {{ $hero->attack_dmg_max }}</span>
                        </li>
                        <li class="mt-3">
                            <img src="{{ asset('images/waktu lek.png') }}" alt=" Attack Rate" class="me-3">
                            <strong>Attack Rate:</strong>
                            <span class="text-info">{{ $hero->attack_rate }}</span>
                        </li>
                        <li class="mt-3">
                            <img src="{{ asset('images/Jarak diantara kita.png') }}" alt="Attack Range" class="me-3">
                            <strong>Attack Range:</strong>
                            <span class="text-warning">{{ $hero->attack_range }}</span>
                        </li>
                        <li class="mt-3">
                            <img src="{{ asset('images/projektil kecepatan le.png') }}" alt="Projectile Speed" class="me-3">
                            <strong>Projectile Speed: </strong>
                            <span class="text-success">{{ $hero->projectile_speed }}</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Bagian Tengah -->
                <div class="col-4">
                    <p>Defense</p>
                    <ul class="list-unstyled text-white">
                        <li class="mt-3">
                            <img src="{{ asset('images/Tameng.png') }}" alt="Armor" class="me-3">
                            <strong>Armor:</strong>
                            <span class="text-danger">{{ $hero->armor }}</span>
                        </li>
                        <li class="mt-3">
                            <img src="{{ asset('images/MAGIC MATA.png') }}" alt="Magic Resist" class="me-3">
                            <strong>Magic Resist:</strong>
                            <span class="text-info">{{ $hero->magic_resist }}</span>
                        </li>
                    </ul>
                </div>
            
                <!-- Bagian Kanan -->
                <div class="col-4">
                    <p>Mobility</p>
                    <ul class="list-unstyled text-white">
                        <li class="mt-3">
                            <img src="{{ asset('images/Movement Speed.png') }}" alt="Armor" class="me-3">
                            <strong>Movement Speed</strong>
                            <span class="text-danger">{{ $hero->movement_speed }}</span>
                        </li>
                        <li class="mt-3">
                            <img src="{{ asset('images/Kaki Ajaib.png') }}" alt="Magic Resist" class="me-3">
                            <strong>Turn Rate:</strong>
                            <span class="text-info">{{ $hero->turn_rate}}</span>
                        </li>
                        <li class="mt-3">
                            <img src="{{ asset('images/Penglihatan.png') }}" alt="Magic Resist" class="me-3">
                            <strong>Vision :</strong>
                            <span class="text-info">{{ $hero->vision_range_day }} / {{ $hero->vision_range_night}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       
          
    </div>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/detail-hero.js') }}"></script>
    <script src="/js/home/jquery.min.js"></script>
    <script src="/js/home/popper.min.js"></script>
    <script src="/js/home/bootstrap.bundle.min.js"></script>
    <script src="/js/home/jquery-3.0.0.min.js"></script>
    <script src="/js/home/plugin.js"></script>
    <script src="/js/home/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/home/custom.js"></script>
</body>
</html>