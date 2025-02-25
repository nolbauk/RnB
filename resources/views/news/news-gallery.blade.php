<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art</title>
    <link rel="stylesheet" href="{{ asset('/css/news.css') }}">
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
    <div class="container mt-4" style="padding-top: 60px;">
        <!-- Top box -->
        <div class="row">
            <div class="col-12 text-white p-4 text-center outline-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="banner_taital">Roiy</h1>
                        <p class="banner_text">Roiy adalah seorang budak cinta dari seorang manusia bernama Celin</p>
                        <div class="started_text"><a href="#">Read More</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="banner_img"><img src="{{ asset('images/tes2.jpg') }}"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Two boxes below -->
        <div class="row mt-3">
            <div class="col-md-6 text-white text-center">
                <div class="row outline-box">
                    <div class="col-sm-6">
                        <h4 class="banner_taital_second">Roiy</h4>
                        <p class="banner_text_second">Roiy adalah seorang budak cinta dari seorang manusia bernama Celin</p>
                        <div class="started_text_second"><a href="#">Read More</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="banner_img"><img src="{{ asset('images/tes1.jpg') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-white text-center">
                <div class="row outline-box">
                    <div class="col-sm-6">
                        <h4 class="banner_taital_second">Roiy</h4>
                        <p class="banner_text_second">Roiy adalah seorang budak cinta dari seorang manusia bernama Celin</p>
                        <div class="started_text_second"><a href="#">Read More</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="banner_img"><img src="{{ asset('images/tes2.jpg') }}"></div>
                    </div>
                </div>
            </div>
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