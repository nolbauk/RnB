<!DOCTYPE html>
<html>

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>RNB</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/buttonlg.css') }}">
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
                  <div class="voltage-button cart_bt">

                     <button type="button" onclick="window.location.href='/login'">LOGIN</button>

                     <!-- SVG Party -->
                     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 234.6 61.3" preserveAspectRatio="none" xml:space="preserve">
                        <filter id="glow">
                           <fegaussianblur class="blur" result="coloredBlur" stddeviation="2"></fegaussianblur>
                           <feTurbulence type="fractalNoise" baseFrequency="0.075" numOctaves="0.3" result="turbulence"></feTurbulence>
                           <feDisplacementMap in="SourceGraphic" in2="turbulence" scale="30" xChannelSelector="R" yChannelSelector="G" result="displace"></feDisplacementMap>
                           <femerge>
                              <femergenode in="coloredBlur"></femergenode>
                              <femergenode in="coloredBlur"></femergenode>
                              <femergenode in="coloredBlur"></femergenode>
                              <femergenode in="displace"></femergenode>
                              <femergenode in="SourceGraphic"></femergenode>
                           </femerge>
                        </filter>
                        <path class="voltage line-1" d="m216.3 51.2c-3.7 0-3.7-1.1-7.3-1.1-3.7 0-3.7 6.8-7.3 6.8-3.7 0-3.7-4.6-7.3-4.6-3.7 0-3.7 3.6-7.3 3.6-3.7 0-3.7-0.9-7.3-0.9-3.7 0-3.7-2.7-7.3-2.7-3.7 0-3.7 7.8-7.3 7.8-3.7 0-3.7-4.9-7.3-4.9-3.7 0-3.7-7.8-7.3-7.8-3.7 0-3.7-1.1-7.3-1.1-3.7 0-3.7 3.1-7.3 3.1-3.7 0-3.7 10.9-7.3 10.9-3.7 0-3.7-12.5-7.3-12.5-3.7 0-3.7 4.6-7.3 4.6-3.7 0-3.7 4.5-7.3 4.5-3.7 0-3.7 3.6-7.3 3.6-3.7 0-3.7-10-7.3-10-3.7 0-3.7-0.4-7.3-0.4-3.7 0-3.7 2.3-7.3 2.3-3.7 0-3.7 7.1-7.3 7.1-3.7 0-3.7-11.2-7.3-11.2-3.7 0-3.7 3.5-7.3 3.5-3.7 0-3.7 3.6-7.3 3.6-3.7 0-3.7-2.9-7.3-2.9-3.7 0-3.7 8.4-7.3 8.4-3.7 0-3.7-14.6-7.3-14.6-3.7 0-3.7 5.8-7.3 5.8-2.2 0-3.8-0.4-5.5-1.5-1.8-1.1-1.8-2.9-2.9-4.8-1-1.8 1.9-2.7 1.9-4.8 0-3.4-2.1-3.4-2.1-6.8s-9.9-3.4-9.9-6.8 8-3.4 8-6.8c0-2.2 2.1-2.4 3.1-4.2 1.1-1.8 0.2-3.9 2-5 1.8-1 3.1-7.9 5.3-7.9 3.7 0 3.7 0.9 7.3 0.9 3.7 0 3.7 6.7 7.3 6.7 3.7 0 3.7-1.8 7.3-1.8 3.7 0 3.7-0.6 7.3-0.6 3.7 0 3.7-7.8 7.3-7.8h7.3c3.7 0 3.7 4.7 7.3 4.7 3.7 0 3.7-1.1 7.3-1.1 3.7 0 3.7 11.6 7.3 11.6 3.7 0 3.7-2.6 7.3-2.6 3.7 0 3.7-12.9 7.3-12.9 3.7 0 3.7 10.9 7.3 10.9 3.7 0 3.7 1.3 7.3 1.3 3.7 0 3.7-8.7 7.3-8.7 3.7 0 3.7 11.5 7.3 11.5 3.7 0 3.7-1.4 7.3-1.4 3.7 0 3.7-2.6 7.3-2.6 3.7 0 3.7-5.8 7.3-5.8 3.7 0 3.7-1.3 7.3-1.3 3.7 0 3.7 6.6 7.3 6.6s3.7-9.3 7.3-9.3c3.7 0 3.7 0.2 7.3 0.2 3.7 0 3.7 8.5 7.3 8.5 3.7 0 3.7 0.2 7.3 0.2 3.7 0 3.7-1.5 7.3-1.5 3.7 0 3.7 1.6 7.3 1.6s3.7-5.1 7.3-5.1c2.2 0 0.6 9.6 2.4 10.7s4.1-2 5.1-0.1c1 1.8 10.3 2.2 10.3 4.3 0 3.4-10.7 3.4-10.7 6.8s1.2 3.4 1.2 6.8 1.9 3.4 1.9 6.8c0 2.2 7.2 7.7 6.2 9.5-1.1 1.8-12.3-6.5-14.1-5.5-1.7 0.9-0.1 6.2-2.2 6.2z" fill="transparent" stroke="#fff" />
                        <path class="voltage line-2" d="m216.3 52.1c-3 0-3-0.5-6-0.5s-3 3-6 3-3-2-6-2-3 1.6-6 1.6-3-0.4-6-0.4-3-1.2-6-1.2-3 3.4-6 3.4-3-2.2-6-2.2-3-3.4-6-3.4-3-0.5-6-0.5-3 1.4-6 1.4-3 4.8-6 4.8-3-5.5-6-5.5-3 2-6 2-3 2-6 2-3 1.6-6 1.6-3-4.4-6-4.4-3-0.2-6-0.2-3 1-6 1-3 3.1-6 3.1-3-4.9-6-4.9-3 1.5-6 1.5-3 1.6-6 1.6-3-1.3-6-1.3-3 3.7-6 3.7-3-6.4-6-6.4-3 2.5-6 2.5h-6c-3 0-3-0.6-6-0.6s-3-1.4-6-1.4-3 0.9-6 0.9-3 4.3-6 4.3-3-3.5-6-3.5c-2.2 0-3.4-1.3-5.2-2.3-1.8-1.1-3.6-1.5-4.6-3.3s-4.4-3.5-4.4-5.7c0-3.4 0.4-3.4 0.4-6.8s2.9-3.4 2.9-6.8-0.8-3.4-0.8-6.8c0-2.2 0.3-4.2 1.3-5.9 1.1-1.8 0.8-6.2 2.6-7.3 1.8-1 5.5-2 7.7-2 3 0 3 2 6 2s3-0.5 6-0.5 3 5.1 6 5.1 3-1.1 6-1.1 3-5.6 6-5.6 3 4.8 6 4.8 3 0.6 6 0.6 3-3.8 6-3.8 3 5.1 6 5.1 3-0.6 6-0.6 3-1.2 6-1.2 3-2.6 6-2.6 3-0.6 6-0.6 3 2.9 6 2.9 3-4.1 6-4.1 3 0.1 6 0.1 3 3.7 6 3.7 3 0.1 6 0.1 3-0.6 6-0.6 3 0.7 6 0.7 3-2.2 6-2.2 3 4.4 6 4.4 3-1.7 6-1.7 3-4 6-4 3 4.7 6 4.7 3-0.5 6-0.5 3-0.8 6-0.8 3-3.8 6-3.8 3 6.3 6 6.3 3-4.8 6-4.8 3 1.9 6 1.9 3-1.9 6-1.9 3 1.3 6 1.3c2.2 0 5-0.5 6.7 0.5 1.8 1.1 2.4 4 3.5 5.8 1 1.8 0.3 3.7 0.3 5.9 0 3.4 3.4 3.4 3.4 6.8s-3.3 3.4-3.3 6.8 4 3.4 4 6.8c0 2.2-6 2.7-7 4.4-1.1 1.8 1.1 6.7-0.7 7.7-1.6 0.8-4.7-1.1-6.8-1.1z" fill="transparent" stroke="#fff" />
                     </svg>
                     <div class="dots">
                        <div class="dot dot-1"></div>
                        <div class="dot dot-2"></div>
                        <div class="dot dot-3"></div>
                        <div class="dot dot-4"></div>
                        <div class="dot dot-5"></div>
                     </div>
                  </div>
               </form>
            </div>
         </nav>
      </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Takim</h1>
                           <p class="banner_text">Takim is a powerfull mere human that can talk to fish</p>
                           <div class="started_text"><a href="#">Read More</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="{{ asset('images/tes3.jpg') }}"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
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
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Oalah</h1>
                           <p class="banner_text">Kubuka album biru penuh debu dan usang kupandangi semua gambar diri kecil bersih belum ternoda</p>
                           <div class="started_text"><a href="#">Read More</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="{{ asset('images/tes1.jpg') }}"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Apa sih?</h1>
                           <p class="banner_text">Hai modar aku hai modar aku jerit si pasien merasa diremehkan, hai modar aku hai modar aku jerit si pasien merasa kesakitan</p>
                           <div class="started_text"><a href="#">Read More</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="{{ asset('images/tes2.jpg') }}"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/home/jquery.min.js"></script>
   <!-- <script src="{{ asset('js/home/jquery.min.js') }}"></script> -->
   <script src="js/home/popper.min.js"></script>
   <!-- <script src="{{ asset('js/home/popper.min.js') }}"></script> -->
   <script src="js/home/bootstrap.bundle.min.js"></script>
   <!-- <script src="{{ asset('js/home/bundle.min.js') }}"></script> -->
   <script src="js/home/jquery-3.0.0.min.js"></script>
   <!-- <script src="{{ asset('js/home/jquery-3.0.0.min.js') }}"></script> -->
   <script src="js/home/plugin.js"></script>
   <!-- <script src="{{ asset('js/home/plugin.js') }}"></script> -->
   <!-- sidebar -->
   <script src="js/home/jquery.mCustomScrollbar.concat.min.js"></script>
   <!-- <script src="{{ asset('js/home/jquery.mCustomScrollbar.concat.min.js') }}"></script> -->
   <script src="js/home/custom.js"></script>
   <!-- <script src="{{ asset('js/home/custom.js') }}"></script> -->
   <!-- javascript -->
</body>

</html>