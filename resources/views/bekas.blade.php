<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RNB</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
  
  <style>
    /* Custom styles that Bootstrap doesn't cover */
    html, body {
      height: 100%;
      overflow: hidden;
      font-family: Arial, sans-serif;
    }
    .page {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: transform 0.5s ease-in-out;
    }
    .responsive-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="d-flex justify-content-between align-items-center px-3 py-2 text-white position-fixed w-100 top-0" style="z-index: 1;">
    <div class="logo" style="z-index: 2;">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" height="50">
    </div>

    <!-- Desktop Navigation -->
    <nav class="d-none d-md-flex">
      <ul class="nav">
        <li class="nav-item"><a class="nav-link text-white fw-bold px-3" href="#page-1">HERO</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold px-3" href="item">ITEM</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold px-3" href="#page-3">NEWS</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold px-3" href="#page-4">FORUM</a></li>
      </ul>
    </nav>

    <div class="login d-none d-md-block">
      <a href="/login" class="btn btn-outline-light rounded-pill px-3">Login</a>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class="navbar-toggler d-md-none border-0 bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" style="z-index: 2;">
      ☰
    </button>

    <!-- Mobile Sidebar -->
    <div class="collapse position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 p-4 text-center" id="mobileMenu" style="z-index: 1;">
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#page-1">HERO</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="item">ITEM</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#page-3">NEWS</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#page-4">FORUM</a></li>
      </ul>
      <a href="/login" class="btn btn-outline-light rounded-pill px-3 mt-3">Login</a>
    </div>
  </header> 

  <!-- Pages -->
  <div class="page" id="page-1">
    <img src="{{ asset('images/tes1.jpg') }}" class="responsive-image d-none d-md-block"/>
    <img src="{{ asset('images/tes2.jpg') }}" class="responsive-image d-block d-md-none"/>
  </div>
  
  <div class="page" id="page-2">
    <img src="{{ asset('images/tes2.jpg') }}" class="responsive-image"/>
  </div>
  
  <div class="page" id="page-3">
    <img src="{{ asset('images/tes3.jpg') }}" class="responsive-image"/>
  </div>

  <!-- Bootstrap and JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
