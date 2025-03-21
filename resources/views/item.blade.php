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
      </div>
   </div>

   {{-- Item Section --}}
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="services_taital">{{ $category }}</h1>
         </div>
      </div>
      
      <div class="services_section_2">
         @foreach($items as $item)
         <a href="{{ route('items.show', ['name' => str_replace(' ', '-', $item->name)]) }}" class="item-link">
             <div class="services_box">
                 <div class="icon_img">
                     <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                 </div>
                 <h5 class="tasty_text">{{ $item->name }}</h5>
             </div>
         </a>
         @endforeach
     </div>
     
   </div>
   <script src="{{ asset('js/scroll-item.js') }}"></script>

</body>




</html>