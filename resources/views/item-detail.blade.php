<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item->name }} - Dota 2 Items</title>
    
    <link rel="stylesheet" href="{{ asset('css/item-detail.css') }}"> {{-- Khusus untuk halaman ini --}}
</head>
<body>
    

    <div class="container">
        <div class="item-detail-section">
            <div class="item-header text-center">
                <h1 class="item-title">{{ $item->name }}</h1>
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="item-image">
            </div>

            <div class="item-info mt-4">
                <h3>Description</h3>
                <p>{{ $item->description ?? 'No description available.' }}</p>

                <h3>Stats</h3>
                <ul>
                    {!! $item->stats ?? '<li>No stats available.</li>' !!}
                </ul>

                @if ($item->effect)
                    <h3>Active Effect</h3>
                    <p>{{ $item->effect }}</p>
                @endif

                <h3>Cost</h3>
                <p>{{ $item->cost ? $item->cost . ' Gold' : 'Unknown cost' }}</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/item-detail.js') }}"></script>
</body>
</html>
