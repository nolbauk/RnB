<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art</title>
    <link rel="stylesheet" href="{{ asset('/css/forum.css') }}">
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/bootstrap.min.css') }}">
    <!-- style css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/style.css') }}">
    <!-- Responsive-->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
    <!-- fevicon -->
    <!-- <link rel="icon" href="images/fevicon.png" type="{{ asset('images/logo.png') }}" /> -->
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/home/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
</head>

<body>
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="images/logo2.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="hero">HERO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="item">ITEM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icecream.html">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">FORUM</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="cart_bt"><a href="login">LOGIN</a></div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="container" style="margin-top: 80px;">
        <div class="gallery-grid">
            @php
            $images = [
            'l1.jpg', 'p1.jpg', 'l2.jpg', 'p2.jpg', 's1.jpg', 'l3.jpg', 's2.png', 'l4.jpg', 'p3.png', 'l5.jpg', 's3.png', 'itembkb.jpg', 'itemshiva.jpg', 'hero_agility.png'
            ];
            @endphp

            @foreach ($images as $image)
            <a href="{{ url('gallery/details/' . $image) }}" class="gallery-item">
                <img src="{{ asset('images/forum/' . $image) }}" loading="lazy">
            </a>
            @endforeach
        </div>
    </div>

    <!-- Javascript files-->
    <script src="/js/home/jquery.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery.min.js') }}"></script> -->
    <script src="/js/home/popper.min.js"></script>
    <!-- <script src="{{ asset('js/home/popper.min.js') }}"></script> -->
    <script src="/js/home/bootstrap.bundle.min.js"></script>
    <!-- <script src="{{ asset('js/home/bundle.min.js') }}"></script> -->
    <script src="/js/home/jquery-3.0.0.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery-3.0.0.min.js') }}"></script> -->
    <script src="/js/home/plugin.js"></script>
    <!-- <script src="{{ asset('js/home/plugin.js') }}"></script> -->
    <!-- sidebar -->
    <script src="/js/home/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery.mCustomScrollbar.concat.min.js') }}"></script> -->
    <script src="/js/home/custom.js"></script>
    <!-- <script src="{{ asset('js/home/custom.js') }}"></script> -->
    <!-- javascript -->
</body>

</html>