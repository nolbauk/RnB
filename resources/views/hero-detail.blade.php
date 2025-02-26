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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
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
                        <div class="card-body text-white p-0">
                            <div class="health bg-success text-center">
                                <span class="text-success text-white">{{ $hero->health }}</span>
                                <span class="text-info text-white">(+{{ $hero->health_regen }})</span>
                            </div>
                            <div class="mana bg-primary text-white text-center">
                                <span class="text-primary text-white">{{ $hero->mana }}</span>
                                <span class="text-info text-white">(+{{ $hero->mana_regen }})</span>
                            </div>
                        </div>
                    </div>
                    <!-- Attributes Section -->
                    <ul class="list-unstyled text-white position-static">
                        <li class="mt-3">
                            <img src="{{ asset('images/hero_strength.png') }}" alt="Strength">
                            <span class="text-danger">{{ $hero->primary_strength }}</span>
                            <span class="text-info">(+{{ $hero->strength_per_lvl }})</span>
                        </li>
                        <li class="mt-3">
                            <img src="{{ asset('images/hero_agility.png') }}" alt="Agility">
                            <span class="text-success">{{ $hero->primary_agility }}</span>
                            <span class="text-info">(+{{ $hero->agility_per_lvl }})</span>
                        </li>
                        <li class="mt-3">
                            <img src="{{ asset('images/hero_Intelligence.png') }}" alt="Intelligence">
                            <span class="text-warning">{{ $hero->primary_intelligence }}</span>
                            <span class="text-info">(+{{ $hero->intelligence_per_lvl }})</span>
                        </li>
                    </ul>

                    <!-- Voice Actor Section -->
                    <h3 class="text-white mt-3">Voice Actor</h3>
                    <p class="text-white">{{ $hero->voice_actor }}</p>
                </div>

                <!-- Right Column: Hero Details -->
                <div class="col-md-6">
                    <p>{{ $hero->primary_attribute }}</p>
                    <h1 class="hero-name">{{ $hero->name }}</h1>
                    <p class="fst-italic">{{ $hero->bio }}</p>
                    <p>{!! nl2br(e($hero->lore ?? 'N/A')) !!}
                    <ul class="list-unstyled">
                        <li><strong>Attack Type:</strong></li>
                        @if($hero->attack_type == 'Melee')
                            <img src="{{ asset('images/male.png') }}" alt="Melee">
                        @elseif($hero->attack_type == 'Ranged')
                            <img src="{{ asset('images/ranged.png') }}" alt="Ranged">
                        @endif
                        <li><strong>Complexity:</strong> {{ $hero->complexity }}</li>
                    </ul>
                    
                  
                    
       <div class="abilities">
        <div class="icon-container">
        
            <div class="talent-tree">
                <table>
                    <tr class="talent-row">
                        <td class="talent talent-left">{{ $hero->talent_25_left }}</td>
                        <td class="level">25</td>
                        <td class="talent talent-right">{{ $hero->talent_25_right }}</td>
                    </tr>
                    <tr class="talent-row">
                        <td class="talent talent-left">{{ $hero->talent_20_left }}</td>
                        <td class="level">20</td>
                        <td class="talent talent-right">{{ $hero->talent_20_right }}</td>
                    </tr>
                    <tr class="talent-row">
                        <td class="talent talent-left">{{ $hero->talent_15_left }}</td>
                        <td class="level">15</td>
                        <td class="talent talent-right">{{ $hero->talent_15_right }}</td>
                    </tr>
                    <tr class="talent-row">
                        <td class="talent talent-left">{{ $hero->talent_10_left }}</td>
                        <td class="level">10</td>
                        <td class="talent talent-right">{{ $hero->talent_10_right }}</td>
                    </tr>
                </table>
            </div>
            <img src="{{ asset('images/TALENTS TREE BG.png') }}" alt="Talent Tree Icon" width="64" height="64" class="ability-icon">
            
        </div>
       
   
    

    <!-- Ability Icons (menyamping) -->
    <div class="ability-icons">
        <div class="icon-container">
            {{-- <img src="{{ asset('images/TALENTS TREE BG.png') }}" alt="Talent Tree Icon" width="64" height="64" class="ability-icon"> --}}
        </div>
        <img src="{{ asset('images/innate_icon.png') }}" alt="innate Tree Icon" width="64" height="64" class="ability-icon">
        <img src="/storage/{{ $hero->ability1 }}" alt="Ability 1" class="ability-icon">
        <img src="/storage/{{ $hero->ability2 }}" alt="Ability 2" class="ability-icon">
        <img src="/storage/{{ $hero->ability3 }}" alt="Ability 3" class="ability-icon">
        <img src="/storage/{{ $hero->ability4 }}" alt="Ability 4" class="ability-icon">
        
    </div>
</div>
        
        
        
                </div>
            </div>
             
            {{-- <img src="{{ asset('images/TALENTS TREE BG.png') }}" alt="" width="100" height="100"> --}}

                        
            
            <!-- Stats Section -->
            <div class="row mt-4 rounded" style="background-color: #1b1b1b">
                <!-- KIRI -->
                <div class="col-md-4">
                   
                </div>

                <!-- TENGAH -->
                <div class="col-md-4 ">
                    <div class="mt-3">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="role-wrapper">
                                <div class="role-name">Carry</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->carry >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->carry >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->carry >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                            <div class="role-wrapper">
                                <div class="role-name">Support</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->support >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->support >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->support >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                            <div class="role-wrapper">
                                <div class="role-name">Nuker</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->nuker >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->nuker >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->nuker >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="role-wrapper">
                                <div class="role-name">Disabler</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->disabler >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->disabler >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->disabler >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                            <div class="role-wrapper">
                                <div class="role-name">Jungler</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->jungler >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->jungler >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->jungler >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                            <div class="role-wrapper">
                                <div class="role-name">Durable</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->durable >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->durable >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->durable >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="role-wrapper">
                                <div class="role-name">Escape</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->escape >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->escape >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->escape >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                            <div class="role-wrapper">
                                <div class="role-name">Pusher</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->pusher >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->pusher >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->pusher >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                            <div class="role-wrapper">
                                <div class="role-name">Initiator</div>
                                <div class="role-bar">
                                    <span class="box" data-value="{{ $hero->initiator >= 1 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->initiator >= 2 ? 'active' : '' }}"></span>
                                    <span class="box" data-value="{{ $hero->initiator >= 3 ? 'active' : '' }}"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">ROLES</p>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <!-- Attack Stats -->
                        <div class="col-4">
                            <div class="list-unstyled text-white">
                                <div class="mt-3"><p class="text-left">ATTACK</p></div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/pedang le.png') }}" alt="Attack Damage" class="me-3">
                                    <span class="text-danger">{{ $hero->attack_dmg_min }} - {{ $hero->attack_dmg_max }}</span>
                                </div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/waktu lek.png') }}" alt="Attack Rate" class="me-3">
                                    <span class="text-info">{{ $hero->attack_rate }}</span>
                                </div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/Jarak diantara kita.png') }}" alt="Attack Range" class="me-3">
                                    <span class="text-warning">{{ $hero->attack_range }}</span>
                                </div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/projektil kecepatan le.png') }}" alt="Projectile Speed" class="me-3">
                                    <span class="text-success">{{ $hero->projectile_speed }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Defense Stats -->
                        <div class="col-4">
                            <div class="list-unstyled text-white">
                                <div class="mt-3"><p class="text-left">DEFENSE</p></div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/Tameng.png') }}" alt="Armor" class="me-3">
                                    <span class="text-danger">{{ $hero->armor }}</span>
                                </div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/MAGIC MATA.png') }}" alt="Magic Resist" class="me-3">
                                    <span class="text-info">{{ $hero->magic_resist }}</span>
                                </div>
                            </div>
                            {{-- <h3 class="text-white mt-3">Stats</h3> --}}
                        </div>
                        
                        <!-- Mobility Stats -->
                        <div class="col-4">
                            <div class="list-unstyled text-white">
                                <div class="mt-3"><p class="text-left">MOBILITY</p></div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/Movement Speed.png') }}" alt="Movement Speed" class="me-3">
                                    <span class="text-danger">{{ $hero->movement_speed }}</span>
                                </div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/Kaki Ajaib.png') }}" alt="Turn Rate" class="me-3">
                                    <span class="text-info">{{ $hero->turn_rate }}</span>
                                </div>
                                <div class="mt-3">
                                    <img src="{{ asset('images/Penglihatan.png') }}" alt="Vision Range" class="me-3">
                                    <span class="text-info">{{ $hero->vision_range_day }} / {{ $hero->vision_range_night }}</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-white mt-3 text-center">Stats</h3>
                    </div>
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