
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RNB</title>
  <link rel="stylesheet" href="{{ asset('css/header.css') }}"> <!-- Link ke file CSS header -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}"> <!-- Link ke file CSS umum -->
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" />
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

  <div class="page" id="page-1">
    <img src="{{ asset('images/tes1.jpg') }}" class="responsive-image"/>
  </div>
  
  <div class="page" id="page-2">
    <img src="{{ asset('images/tes2.jpg') }}" class="responsive-image"/>
  </div>
  
  <div class="page" id="page-3">
    <img src="{{ asset('images/tes3.jpg') }}" class="responsive-image"/>
  </div>

  <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
