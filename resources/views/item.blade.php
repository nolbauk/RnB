<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ITEM</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/home/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttonlg.css') }}">
    <link rel="stylesheet" href="{{ asset('css/item.css') }}">
    <link rel="stylesheet" href="{{ asset('css/herogallery.css') }}">
</head>

<body>
    <!-- Navbar -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="/hero">HERO</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">NEWS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">FORUM</a></li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="cart_bt">
                            @if(Auth::check())
                                <a href="{{ route('profile.index') }}">Profile</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                            @endif
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <div class="services_section_2 flex justify-center flex-wrap gap-6">
    @foreach ($items as $item)
        <a href="{{ route('item.show', $item->id) }}" class="services_box text-center no-underline text-black">
    <div>
        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
    </div>
    <h4 class="item_text mt-2">{{ $item->name }}</h4>
</a>

    @endforeach
</div>



    <!-- JS -->
    <script src="{{ asset('js/item.js') }}"></script>
</body>

</html>