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
   <title>ITEM</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/home/bootstrap.min.css') }}">
   
   <link rel="stylesheet" type="text/css" href="{{ asset('css/home/style.css') }}"> 
   
   <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
   

   <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  
   <link rel="stylesheet" href="{{ asset('css/home/jquery.mCustomScrollbar.min.css') }}"> 

 
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> --}}

   {{-- Item --}}
   <link rel="stylesheet" href="css/item.css">
   <link rel="stylesheet" href="css/herogallery.css">
   {{-- <link rel="stylesheet" href="css/herogallery.css"> --}}
</head>

{{-- Sekarang Kerja Di sini --}}
<body>
   <div class="header_section">
      <div class="container">
         @include('header')
         {{-- <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="index.html"><img src="images/logo2.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="hero">HERO</a>
                  </li>
                  <li class="nav-item active">
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
         </nav> --}}
         
      </div>
      {{-- item start --}}
      <div>
         <div class="container">
            <h1 class="services_taital mb-3">Artifact</h1>
            <div class="services_section_2">
               <div class="services_box">
                  <h5 class="tasty_text"><span class="icon_img"><img src="images/itembkb.jpg"></span>Black King Bar</h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
               <div class="services_box">
                  <h5 class="tasty_text"><span class="icon_img"><img src="images/itemdeso.jpg"></span>Desolator</h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
               <div class="services_box">
                  <h5 class="tasty_text"><span class="icon_img"><img src="images/itemshiva.jpg"></span>Shiva Guard</h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
               <div class="services_box">
                  <h5 class="tasty_text"><span class="icon_img"><img src="images/itembkb.jpg"></span>Black King Bar</h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
               <div class="services_box">
                  <h5 class="tasty_text"><span class="icon_img"><img src="images/itemdeso.jpg"></span>Desolator</h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
               <div class="services_box">
                  <h5 class="tasty_text"><span class="icon_img"><img src="images/itemshiva.jpg"></span>Shiva Guard</h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
            </div>
         </div>
      </div>
      
      <script src="{{ asset('js/item.js') }}"></script>
</body>

</html>