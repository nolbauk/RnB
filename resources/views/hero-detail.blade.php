<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $hero->name }} - Dota 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/herogallery1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero-detail.css') }}">
</head>
<body>
    <div class="container">
        @include('header')
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="hero-detail mt-5 py-5">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="hero-name">{{ $hero->name }}</h1>
                        <p class="fst-italic">{{ $hero->bio }}</p>
                        <ul class="list-unstyled">
                            <li><strong>Primary Attribute:</strong> {{ $hero->primary_attribute }}</li>
                            <li><strong>Attack Type:</strong> {{ $hero->attack_type }}</li>
                            <li><strong>Roles:</strong> {{ $hero->roles }}</li>
                            <li><strong>Complexity:</strong> {{ $hero->complexity }}</li>
                        </ul>

                        <h3 class="mt-3">Base Stats</h3>
                        <ul class="list-unstyled">
                            <li><strong>Strength:</strong> {{ $hero->primary_strength }} (+{{ $hero->strength_per_lvl }} per level)</li>
                            <li><strong>Agility:</strong> {{ $hero->primary_agility }} (+{{ $hero->agility_per_lvl }} per level)</li>
                            <li><strong>Intelligence:</strong> {{ $hero->primary_intelligence }} (+{{ $hero->intelligence_per_lvl }} per level)</li>
                        </ul>

                        <h3 class="mt-3">Combat Stats</h3>
                        <ul class="list-unstyled">
                            <li><strong>Health:</strong> {{ $hero->health }} (Regen: {{ $hero->health_regen }})</li>
                            <li><strong>Mana:</strong> {{ $hero->mana }} (Regen: {{ $hero->mana_regen }})</li>
                            <li><strong>Armor:</strong> {{ $hero->armor }}</li>
                            <li><strong>Attack Damage:</strong> {{ $hero->attack_dmg_min }} - {{ $hero->attack_dmg_max }}</li>
                            <li><strong>Attack Speed:</strong> {{ $hero->attack_speed }}</li>
                            <li><strong>Attack Rate:</strong> {{ $hero->attack_rate }}</li>
                            <li><strong>Movement Speed:</strong> {{ $hero->movement_speed }}</li>
                            <li><strong>Magic Resistance:</strong> {{ $hero->magic_resist }}%</li>
                        </ul>

                        <h3 class="mt-3">Other Stats</h3>
                        <ul class="list-unstyled">
                            <li><strong>Projectile Speed:</strong> {{ $hero->projectile_speed }}</li>
                            <li><strong>Attack Range:</strong> {{ $hero->attack_range }}</li>
                            <li><strong>Turn Rate:</strong> {{ $hero->turn_rate }}</li>
                            <li><strong>Collision Size:</strong> {{ $hero->collision_size }}</li>
                            <li><strong>Bound Radius:</strong> {{ $hero->bound_radius }}</li>
                            <li><strong>Vision Range (Day/Night):</strong> {{ $hero->vision_range_day }} / {{ $hero->vision_range_night }}</li>
                        </ul>

                        <h3 class="mt-3">Abilities</h3>
                        <div class="abilities">
                            <img src="/storage/{{ $hero->ability1 }}" alt="Ability 1" class="ability-icon">
                            <img src="/storage/{{ $hero->ability2 }}" alt="Ability 2" class="ability-icon">
                            <img src="/storage/{{ $hero->ability3 }}" alt="Ability 3" class="ability-icon">
                            <img src="/storage/{{ $hero->ability4 }}" alt="Ability 4" class="ability-icon">
                        </div>

                        <h3 class="mt-3">Innate Ability</h3>
                        <p><strong>{{ $hero->innate_title }}</strong>: {{ $hero->innate_desc }}</p>

                        <h3 class="mt-3">Hero Talents</h3>
                        <table class="table table-bordered">
                            <tr>
                                <td>{{ $hero->talent_25_left }}</td>
                                <td>Level 25</td>
                                <td>{{ $hero->talent_25_right }}</td>
                            </tr>
                            <tr>
                                <td>{{ $hero->talent_20_left }}</td>
                                <td>Level 20</td>
                                <td>{{ $hero->talent_20_right }}</td>
                            </tr>
                            <tr>
                                <td>{{ $hero->talent_15_left }}</td>
                                <td>Level 15</td>
                                <td>{{ $hero->talent_15_right }}</td>
                            </tr>
                            <tr>
                                <td>{{ $hero->talent_10_left }}</td>
                                <td>Level 10</td>
                                <td>{{ $hero->talent_10_right }}</td>
                            </tr>
                        </table>

                        <h3 class="mt-3">Hero Lore</h3>
                        <p>{{ $hero->lore }}</p>

                        <h3 class="mt-3">Voice Actor</h3>
                        <p>{{ $hero->voice_actor }}</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <img src="/storage/{{ $hero->image }}" alt="{{ $hero->name }}" class="img-fluid hero-image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/galleryhero.js') }}"></script>
</body>
</html>
