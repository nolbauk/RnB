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
      <title>HOME</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
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
