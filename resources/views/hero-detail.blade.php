<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $hero->name }} - Dota 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/herogallery1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero-detail.css') }}">
    <!-- bootstrap css -->
      <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/home/bootstrap.min.css') }}">
      <!-- style css -->
      <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/home/style.css') }}">
      <!-- Responsive-->
      <!-- <link rel="stylesheet" href="css/responsive.css"> -->
      <link rel="stylesheet" href="{{ asset('/css/home/responsive.css') }}">
      <!-- fevicon -->
      <!-- <link rel="icon" href="images/fevicon.png" type="{{ asset('/images/logo.png') }}" /> -->
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
      <link rel="stylesheet" href="{{ asset('/css/home/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="icon" type="image/x-icon" href="{{ asset('/images/logo.png') }} ">
</head>
<body >
    
    <div class="header_section">
        <div class="container">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="index.html"><img src="/images/logo2.png"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                       <a class="nav-link" href="index.html">HERO</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="about.html">ITEM</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="icecream.html">NEWS</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="services.html">FORUM</a>
                    </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                    <div class="cart_bt"><a href="#">LOGIN</a></div>
                 </form>
              </div>
           </nav>
        </div>
     </div>
     <!-- header section end -->
        <div class="container-hero">
            <div class="hero-detail">
                <div class="row">
                    <!-- Kiri: Gambar Hero -->
                    <div class="col-md-3 text-center">
                        <img src="/storage/{{ $hero->image }}" alt="{{ $hero->name }}" class="img-fluid hero-image">
                    </div>
        
                    <!-- Tengah: Detail Hero -->
                    <div class="col-md-5">
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
        
                    <!-- Kanan: Statistik, Ability, Talent -->
                    <div class="col-md-4">
                        <h3 class="mt-3">Base Stats</h3>
                        <ul class="list-unstyled">
                            <li><strong>Strength:</strong> {{ $hero->primary_strength }} (+{{ $hero->strength_per_lvl }} per level)</li>
                            <li><strong>Agility:</strong> {{ $hero->primary_agility }} (+{{ $hero->agility_per_lvl }} per level)</li>
                            <li><strong>Intelligence:</strong> {{ $hero->primary_intelligence }} (+{{ $hero->intelligence_per_lvl }} per level)</li>
                        </ul>
        
                        <h3 class="mt-3">Abilities</h3>
                        <div class="abilities">
                            <img src="/storage/{{ $hero->ability1 }}" alt="Ability 1" class="ability-icon">
                            <img src="/storage/{{ $hero->ability2 }}" alt="Ability 2" class="ability-icon">
                            <img src="/storage/{{ $hero->ability3 }}" alt="Ability 3" class="ability-icon">
                            <img src="/storage/{{ $hero->ability4 }}" alt="Ability 4" class="ability-icon">
                        </div>
        
                        <h3 class="mt-3">Hero Talents</h3>
                        <table class="table table-bordered">
                            <tr>
                                <td>{{ $hero->talent_25_left }}</td>
                                <td>Level 25</td>
                                <td>{{ $hero->talent_25_right }}</td>
                            </tr>
                            <tr>
                                <td>{{ $hero->talent_20_left }}</td>
                                <td>Level 20</td>
                                <td>{{ $hero->talent_20_right }}</td>
                            </tr>
                            <tr>
                                <td>{{ $hero->talent_15_left }}</td>
                                <td>Level 15</td>
                                <td>{{ $hero->talent_15_right }}</td>
                            </tr>
                            <tr>
                                <td>{{ $hero->talent_10_left }}</td>
                                <td>Level 10</td>
                                <td>{{ $hero->talent_10_right }}</td>
                            </tr>
                        </table>
        
                        <h3 class="mt-3">Voice Actor</h3>
                        <p>{{ $hero->voice_actor }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/galleryhero.js') }}"></script>
    <script src="{{ asset('js/detail-hero.js') }}"></script>
    <!-- Javascript files-->
    <script src="/js/home/jquery.min.js"></script>
    {{-- <!-- <script src="{{ asset('js/home/jquery.min.js') }}"></script> --> --}}
    <script src="/js/home/popper.min.js"></script>
    {{-- <!-- <script src="{{ asset('js/home/popper.min.js') }}"></script> --> --}}
    <script src="/js/home/bootstrap.bundle.min.js"></script>
    {{-- <!-- <script src="{{ asset('js/home/bundle.min.js') }}"></script> --> --}}
    <script src="/js/home/jquery-3.0.0.min.js"></script>
    {{-- <!-- <script src="{{ asset('js/home/jquery-3.0.0.min.js') }}"></script> --> --}}
    <script src="/js/home/plugin.js"></script>
    {{-- <!-- <script src="{{ asset('js/home/plugin.js') }}"></script> --> --}}
    <!-- sidebar -->
    <script src="/js/home/jquery.mCustomScrollbar.concat.min.js"></script>
    {{-- <!-- <script src="{{ asset('js/home/jquery.mCustomScrollbar.concat.min.js') }}"></script> --> --}}
    <script src="/js/home/custom.js"></script>
    {{-- <!-- <script src="{{ asset('js/home/custom.js') }}"></script> --> --}}
    <!-- javascript -->
</body>
</html>
