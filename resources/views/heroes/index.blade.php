<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Hero - Dota 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/header.css') }}" rel="stylesheet"> --}}
</head>
<body class="bg-dark text-white">
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
    <div class="container text-center my-4">
        <h1 class="fw-bold">PILIH PEJUANGMU</h1>
        <p class="text-secondary">Dari para ahli strategi berbakat hingga pejuang tangguh dan pemburu cerdik, kumpulan pahlawan yang ada sangatlah beragam dan tak terbatas. Lepaskan kemampuan luar biasa dan kekuatan pamungkas dalam perjalananmu menuju kemenangan.</p>
    </div>

    <div class="container mt-4">
        <div class="row text-center">
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
                    <img  src="{{ asset('img/universal.jfif') }}" alt="Support" class="img-fluid me-2" style="width: 50px;">
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
                    <img  src="{{ asset('img/universal.jfif') }}" alt="Support" class="img-fluid me-2" style="width: 50px;">
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
