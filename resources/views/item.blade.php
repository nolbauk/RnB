<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="{{ asset('css/item.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}"> <!-- Link ke file CSS header -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
</head>
<body>
<header>
    <div class="logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" />
    </div>
    <nav>
      <ul>
        <li><a href="#page-1">HERO</a></li>
        <li><a href="#page-2">ITEM</a></li>
        <li><a href="#page-3">NEWS</a></li>
        <li><a href="#page-4">FORUM</a></li>
      </ul>
    </nav>
    <div class="login">
      <a href="/login">Login</a>
    </div>
  </header>
    
    <div class="container">
        <div class="item-grid">
            <!-- Item 1 -->
            <div class="item-card">
                <img src="{{ asset('images/itembkb.jpg') }}">
                <div class="item-info">
                    <h3>Black King Bar</h3>
                    <hr class="divider">
                    <p>This is a powerful item that gives you extra damage.</p>
                </div>
            </div>   
            <!-- Item 2 -->
            <div class="item-card">
                <img src="{{ asset('images/itemshiva.jpg') }}">
                <div class="item-info">
                    <h3>Shiva Guard</h3>
                    <hr class="divider">
                    <p>This item provides great defense and health regen.</p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="item-card">
                <img src="{{ asset('images/itemdeso.jpg') }}">
                <div class="item-info">
                    <h3>Desolator</h3>
                    <hr class="divider">
                    <p>A utility item that offers speed and agility boosts.</p>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="item-card">
                <img src="{{ asset('images/itemradian.jpg') }}" alt="Item 4">
                <div class="item-info">
                    <h3>Radiance</h3>
                    <hr class="divider">
                    <p>Perfect for magical users, provides mana and cooldown reduction.</p>
                </div>
            </div>
            <div class="item-card">
                <img src="{{ asset('images/itembkb.jpg') }}">
                <div class="item-info">
                    <h3>Black King Bar  das</h3>
                    <hr class="divider">
                    <p>This is a powerful item that gives you extra damage.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
