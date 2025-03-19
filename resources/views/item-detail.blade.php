<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>\
    <link rel="stylesheet" href="css/item-detail.css">
</head>
<body>
    <div class="header_section">
        <div class="container">
            @include('header')
        </div>
    </div>
    
    <div class="container">
        <div class="item-detail-section">
            <div class="item-header">
                <h1 class="item-title">Black King Bar</h1>
                <img src="images/itembkb.jpg" alt="Black King Bar" class="item-image">
            </div>
            
            <div class="item-info">
                <h3>Description</h3>
                <p>Grants spell immunity for a short duration.</p>
                
                <h3>Stats</h3>
                <ul>
                    <li>+10 Strength</li>
                    <li>+24 Damage</li>
                </ul>
                
                <h3>Active: Avatar</h3>
                <p>Applies spell immunity for 9 seconds. Duration decreases with each use.</p>
                
                <h3>Cost</h3>
                <p>4050 Gold</p>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/item-detail.js') }}"></script>
</body>

</html>