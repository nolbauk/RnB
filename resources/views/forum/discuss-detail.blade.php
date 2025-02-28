<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCUSSION DETAIL</title>
    <link rel="stylesheet" href="{{ asset('/css/forum.css') }}">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
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
    </li>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
</head>

<body>
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html"><img src="images/logo2.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
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
    <main class="main">
        <div class="middle">
            <div class="feeds">
                <div class="feed">
                    <div class="head"></div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h5>Lana Rose</h5>
                            <small>15 MINUTES AGO</small>
                        </div>
                    </div>
                    <div class="bahan">
                        Lorem ipsum dolor storiesquiquam eius.
                        <span class="hash-tag">#lifestyle</span>
                    </div>
                    <div class="bookmark">
                        <span><i class="fa-solid fa-bookmark"></i></span>
                    </div>
                    <div class="reply">
                        <div class="caption">
                            <div class="liked-by">
                                <div class="user">
                                    <div class="profile-pic-reply">
                                        <img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" alt="" />
                                    </div>
                                    <div class="info">
                                        <h7>Lana Rose</h7>
                                        <h8>15 MINUTES AGO</h8>
                                    </div>
                                    <span class="edit"><i class="uil uil-ellipsis-h"></i></span>
                                </div>
                            </div>
                            <div class="bahan-reply">
                                Lorem ipsum dolor storiesquiquam eius.
                                <span class="hash-tag">#lifestyle</span>
                            </div>
                            <div class="action-button">
                                <div class="interaction-button">
                                    <span><i class="fa-solid fa-thumbs-up"></i></span>
                                    <span><i class="fa-solid fa-thumbs-down"></i></span>
                                    <span><i class="fa-solid fa-comments"></i></span>
                                    <span><i class="fa-solid fa-share"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="fa-solid fa-bookmark"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <script src="{{ asset('/js/forum.js') }}"></script>
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