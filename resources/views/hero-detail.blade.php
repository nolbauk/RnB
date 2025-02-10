<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $hero->name }} - Dota 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/herogallery1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header1.css') }}">
</head>
<body class="bg-dark text-white">
    <div class="container">
        @include('header')

        <div class="hero-detail mt-5 py-5">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="/storage/{{ $hero->image }}" alt="{{ $hero->name }}" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <h1>{{ $hero->name }}</h1>
                    <p class="fst-italic">{{ $hero->bio }}</p>
                    <p><strong>Primary Attribute:</strong> {{ $hero->primary_attribute }}</p>
                    <p><strong>Attack Type:</strong> {{ $hero->attack_type }}</p>
                    <p><strong>Complexity:</strong> {{ $hero->complexity }}</p>
                    <p><strong>Roles:</strong> {{ $hero->roles }}</p>
                </div>
            </div>

            <hr>

            <h3>Base Stats</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Strength:</strong> {{ $hero->primary_strength }} (+{{ $hero->strength_per_lvl }} per level)</p>
                    <p><strong>Agility:</strong> {{ $hero->primary_agility }} (+{{ $hero->agility_per_lvl }} per level)</p>
                    <p><strong>Intelligence:</strong> {{ $hero->primary_intelligence }} (+{{ $hero->intelligence_per_lvl }} per level)</p>
                    <p><strong>Health:</strong> {{ $hero->health }} (Regen: {{ $hero->health_regen }})</p>
                    <p><strong>Mana:</strong> {{ $hero->mana }} (Regen: {{ $hero->mana_regen }})</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Armor:</strong> {{ $hero->armor }}</p>
                    <p><strong>Attack Damage:</strong> {{ $hero->attack_dmg_min }} - {{ $hero->attack_dmg_max }}</p>
                    <p><strong>Attack Speed:</strong> {{ $hero->attack_speed }}</p>
                    <p><strong>Movement Speed:</strong> {{ $hero->movement_speed }}</p>
                    <p><strong>Magic Resistance:</strong> {{ $hero->magic_resist }}%</p>
                </div>
            </div>

            <hr>

            <h3>Combat Details</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Attack Range:</strong> {{ $hero->attack_range }}</p>
                    <p><strong>Projectile Speed:</strong> {{ $hero->projectile_speed }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Turn Rate:</strong> {{ $hero->turn_rate }}</p>
                    <p><strong>Collision Size:</strong> {{ $hero->collision_size }}</p>
                </div>
            </div>

            <hr>

            <h3>Vision</h3>
            <p><strong>Day Vision:</strong> {{ $hero->vision_range_day }}</p>
            <p><strong>Night Vision:</strong> {{ $hero->vision_range_night }}</p>

            <hr>

            <h3>Innate Ability</h3>
            <p><strong>{{ $hero->innate_title }}</strong></p>
            <p>{{ $hero->innate_desc }}</p>

            <hr>

            <h3>Talent Tree</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Level 10:</strong> {{ $hero->talent_10_left }} | {{ $hero->talent_10_right }}</p>
                    <p><strong>Level 15:</strong> {{ $hero->talent_15_left }} | {{ $hero->talent_15_right }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Level 20:</strong> {{ $hero->talent_20_left }} | {{ $hero->talent_20_right }}</p>
                    <p><strong>Level 25:</strong> {{ $hero->talent_25_left }} | {{ $hero->talent_25_right }}</p>
                </div>
            </div>

            <hr>

            <h3>Lore</h3>
            <p>{{ $hero->lore }}</p>

            <hr>

            <h3>Voice Actor</h3>
            <p>{{ $hero->voice_actor }}</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/galleryhero.js') }}"></script>
</body>
</html>
