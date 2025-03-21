<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Item</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/detail-item.css') }}">
   
</head>
<body>
   <div class="header_section">
      <div class="container">
         @include('header')
      </div>
   </div>
    <div class="container mt-4" style="padding-top: 100px;">
        <div class="row">
            <!-- Kolom Kiri untuk Gambar -->
            <div class="col-md-6">
                <div class="item-image">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="img-fluid rounded">
                </div>
            </div>
            
            <!-- Kolom Kanan untuk Deskripsi dan Informasi -->
            <div class="col-md-6">
                <div class="item-info">
                    <h1 class="mb-3">{{ $item->name }}</h1>
                    <p class="item-description mb-4">{{ $item->description }}</p>
                    
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Detail Item</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Cost:</strong> {{ $item->cost }}</li>
                            <li class="list-group-item"><strong>Sell Value:</strong> {{ $item->sell_value }}</li>
                            <li class="list-group-item"><strong>Type:</strong> {{ $item->type }}</li>
                            <li class="list-group-item"><strong>Category:</strong> {{ $item->category }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>