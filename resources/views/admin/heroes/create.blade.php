<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RnB - Heroes</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/logo.png') }} ">

</head>

<style>
    .sidebar-brand-icon img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <x-sidebarnavbar/>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Heroes</h1>
                    
                    <x-allert/>
                
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Hero</h6>
                        </div>
                        <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
                            <div class="container">
                                <form action="{{ route('adminheroes.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Primary Attribute --}}
                                    <div class="mb-3">
                                        <label for="primary_attribute" class="form-label">Primary Attribute</label>
                                        <select class="form-control" id="primary_attribute" name="primary_attribute" required>
                                            <option value="Strength" {{ old('primary_attribute') == 'Strength' ? 'selected' : '' }}>Strength</option>
                                            <option value="Agility" {{ old('primary_attribute') == 'Agility' ? 'selected' : '' }}>Agility</option>
                                            <option value="Intelligence" {{ old('primary_attribute') == 'Intelligence' ? 'selected' : '' }}>Intelligence</option>
                                            <option value="Universal" {{ old('primary_attribute') == 'Universal' ? 'selected' : '' }}>Universal</option>
                                        </select>
                                        @error('primary_attribute') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Nama Hero --}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Hero</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Image Upload --}}
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Gambar Hero</label>
                                        <input type="file" class="form-control form-control-sm" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
                                        <small class="text-muted">Format: PNG, JPG, JPEG (Max: 2MB)</small>
                                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Bio --}}
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" id="bio" name="bio">{{ old('bio') }}</textarea>
                                        @error('bio') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Lore --}}
                                    <div class="mb-3 mt-3">
                                        <label for="lore" class="form-label">Lore</label>
                                        <textarea class="form-control" id="lore" name="lore">{{ old('lore') }}</textarea>
                                        @error('lore') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Attack Type --}}
                                    <div class="mb-3">
                                        <label for="attack_type" class="form-label">Attack Type</label>
                                        <select class="form-control" id="attack_type" name="attack_type" required>
                                            <option value="Melee" {{ old('attack_type') == 'Melee' ? 'selected' : '' }}>Melee</option>
                                            <option value="Ranged" {{ old('attack_type') == 'Ranged' ? 'selected' : '' }}>Ranged</option>
                                        </select>
                                        @error('attack_type') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Complexity --}}
                                    <div class="mb-3">
                                        <label for="complexity" class="form-label">Complexity</label>
                                        <select class="form-control" id="complexity" name="complexity" required>
                                            <option value="Easy" {{ old('complexity') == 'Easy' ? 'selected' : '' }}>Easy</option>
                                            <option value="Medium" {{ old('complexity') == 'Medium' ? 'selected' : '' }}>Medium</option>
                                            <option value="Hard" {{ old('complexity') == 'Hard' ? 'selected' : '' }}>Hard</option>
                                        </select>
                                        @error('complexity') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <h4>Attributs</h4>
                                    {{-- Health & Mana --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="health" class="form-label">Health</label>
                                            <input type="number" class="form-control" id="health" name="health" value="{{ old('health') }}" required>
                                            @error('health') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="health_regen" class="form-label">Health Regen</label>
                                            <input type="number" step="0.1" class="form-control" id="health_regen" name="health_regen" value="{{ old('health_regen') }}" required>
                                            @error('health_regen') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="mana" class="form-label">Mana</label>
                                            <input type="number" class="form-control" id="mana" name="mana" value="{{ old('mana') }}" required>
                                            @error('mana') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="mana_regen" class="form-label">Mana Regen</label>
                                            <input type="number" step="0.1" class="form-control" id="mana_regen" name="mana_regen" value="{{ old('mana_regen') }}" required>
                                            @error('mana_regen') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- Strength --}}
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="primary_strength" class="form-label">Strength</label>
                                            <input type="number" step="1" class="form-control" id="primary_strength" name="primary_strength" value="{{ old('primary_strength') }}" required>
                                            @error('primary_strength') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="strength_per_lvl" class="form-label">Strength per Level</label>
                                            <input type="number" step="0.01" class="form-control" id="strength_per_lvl" name="strength_per_lvl" value="{{ old('strength_per_lvl') }}" required>
                                            @error('strength_per_lvl') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- Agility --}}
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="primary_agility" class="form-label">Agility</label>
                                            <input type="number" step="1" class="form-control" id="primary_agility" name="primary_agility" value="{{ old('primary_agility') }}" required>
                                            @error('primary_agility') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="agility_per_lvl" class="form-label">Agility per Level</label>
                                            <input type="number" step="0.01" class="form-control" id="agility_per_lvl" name="agility_per_lvl" value="{{ old('agility_per_lvl') }}" required>
                                            @error('agility_per_lvl') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- Intelligence --}}
                                    <div class="row mt-3 mb-3">
                                        <div class="col-md-4">
                                            <label for="primary_intelligence" class="form-label">Intelligence</label>
                                            <input type="number" step="1" class="form-control" id="primary_intelligence" name="primary_intelligence" value="{{ old('primary_intelligence') }}" required>
                                            @error('primary_intelligence') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="intelligence_per_lvl" class="form-label">Intelligence per Level</label>
                                            <input type="number" step="0.01" class="form-control" id="intelligence_per_lvl" name="intelligence_per_lvl" value="{{ old('intelligence_per_lvl') }}" required>
                                            @error('intelligence_per_lvl') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>                                    
                            
                                    {{-- Roles --}}
                                    <h4>Roles</h4>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="carry" class="form-label">Carry</label>
                                            <select class="form-control" id="carry" name="carry" required>
                                                <option value="0" {{ old('carry') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('carry') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('carry') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('carry') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('carry') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="support" class="form-label">Support</label>
                                            <select class="form-control" id="support" name="support" required>
                                                <option value="0" {{ old('support') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('support') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('support') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('support') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('support') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="nuker" class="form-label">Nuker</label>
                                            <select class="form-control" id="nuker" name="nuker" required>
                                                <option value="0" {{ old('nuker') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('nuker') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('nuker') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('nuker') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('nuker') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="disabler" class="form-label">Disabler</label>
                                            <select class="form-control" id="disabler" name="disabler" required>
                                                <option value="0" {{ old('disabler') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('disabler') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('disabler') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('disabler') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('disabler') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="jungler" class="form-label">Jungler</label>
                                            <select class="form-control" id="jungler" name="jungler" required>
                                                <option value="0" {{ old('jungler') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('jungler') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('jungler') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('jungler') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('jungler') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="durable" class="form-label">Durable</label>
                                            <select class="form-control" id="durable" name="durable" required>
                                                <option value="0" {{ old('durable') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('durable') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('durable') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('durable') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('durable') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-3 mb-3">
                                        <div class="col-md-4">
                                            <label for="escape" class="form-label">Escape</label>
                                            <select class="form-control" id="escape" name="escape" required>
                                                <option value="0" {{ old('escape') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('escape') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('escape') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('escape') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('escape') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="pusher" class="form-label">Pusher</label>
                                            <select class="form-control" id="pusher" name="pusher" required>
                                                <option value="0" {{ old('pusher') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('pusher') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('pusher') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('pusher') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('pusher') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="initiator" class="form-label">Initiator</label>
                                            <select class="form-control" id="initiator" name="initiator" required>
                                                <option value="0" {{ old('initiator') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('initiator') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('initiator') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('initiator') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            @error('initiator') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <h4>Attack</h4>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="attack_dmg_min" class="form-label">Attack Damage Min</label>
                                            <input type="number" class="form-control" id="attack_dmg_min" name="attack_dmg_min" value="{{ old('attack_dmg_min') }}" min="1" required>
                                            @error('attack_dmg_min') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="attack_dmg_max" class="form-label">Attack Damage Max</label>
                                            <input type="number" class="form-control" id="attack_dmg_max" name="attack_dmg_max" value="{{ old('attack_dmg_max') }}" min="1" required>
                                            @error('attack_dmg_max') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="attack_rate" class="form-label">Attack Rate</label>
                                        <input type="number" step="any" class="form-control" id="attack_rate" name="attack_rate" value="{{ old('attack_rate') }}" min="0.1" required>
                                        @error('attack_rate') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="attack_range" class="form-label">Attack Range</label>
                                        <input type="number" class="form-control" id="attack_range" name="attack_range" value="{{ old('attack_range') }}" min="1" required>
                                        @error('attack_range') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    
                                    <h4>Defense</h4>
                                    <div class="mb-3">
                                        <label for="armor" class="form-label">Armor</label>
                                        <input type="number" step="any" class="form-control" id="armor" name="armor" value="{{ old('armor') }}" required>
                                        @error('armor') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="magic_resist" class="form-label">Magic Resist (%)</label>
                                        <input type="number" step="any" class="form-control" id="magic_resist" name="magic_resist" value="{{ old('magic_resist') }}" min="0" max="100" required>
                                        @error('magic_resist') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    
                                    <h4>Mobility</h4>
                                    <div class="mb-3">
                                        <label for="movement_speed" class="form-label">Movement Speed</label>
                                        <input type="number" class="form-control" id="movement_speed" name="movement_speed" value="{{ old('movement_speed') }}" min="1" required>
                                        @error('movement_speed') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="turn_rate" class="form-label">Turn Rate</label>
                                        <input type="number" step="any" class="form-control" id="turn_rate" name="turn_rate" value="{{ old('turn_rate') }}" min="0.1" required>
                                        @error('turn_rate') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="vision_range_day" class="form-label">Vision Range Day</label>
                                            <input type="number" class="form-control" id="vision_range_day" name="vision_range_day" value="{{ old('vision_range_day') }}" min="1" required>
                                            @error('vision_range_day') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="vision_range_night" class="form-label">Vision Range Night</label>
                                            <input type="number" class="form-control" id="vision_range_night" name="vision_range_night" value="{{ old('vision_range_night') }}" min="1" required>
                                            @error('vision_range_night') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>                                    

                                    {{-- Innate Ability --}}
                                    <h4>Innate Ability</h4>
                                    <div class="mb-3">
                                        <label for="innate_title" class="form-label">Innate Title</label>
                                        <input type="text" class="form-control" id="innate_title" name="innate_title" value="{{ old('innate_title') }}" required>
                                        @error('innate_title') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="innate_desc" class="form-label">Innate Description</label>
                                        <textarea class="form-control" id="innate_desc" name="innate_desc" required>{{ old('innate_desc') }}</textarea>
                                        @error('innate_desc') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Additional Combat Stats --}}
                                    <h4>Additional Combat Stats</h4>
                                    <div class="mb-3">
                                        <label for="projectile_speed" class="form-label">Projectile Speed</label>
                                        <input type="number" class="form-control" id="projectile_speed" name="projectile_speed" value="{{ old('projectile_speed') }}" required>
                                        @error('projectile_speed') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="collision_size" class="form-label">Collision Size</label>
                                        <input type="number" step="any" class="form-control" id="collision_size" name="collision_size" value="{{ old('collision_size') }}" required>
                                        @error('collision_size') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="bound_radius" class="form-label">Bound Radius</label>
                                        <input type="number" step="any" class="form-control" id="bound_radius" name="bound_radius" value="{{ old('bound_radius') }}" required>
                                        @error('bound_radius') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="attack_speed" class="form-label">Attack Speed</label>
                                        <input type="number" step="any" class="form-control" id="attack_speed" name="attack_speed" value="{{ old('attack_speed') }}" required>
                                        @error('attack_speed') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <h4>Voice</h4>
                                    <div class="mb-3">
                                        <label for="voice_actor" class="form-label">Voice Actor</label>
                                        <input type="text" class="form-control" id="voice_actor" name="voice_actor" value="{{ old('voice_actor') }}" required>
                                        @error('voice_actor') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Talent Tree --}}
                                    <h4>Talent Tree</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="talent_10_left" class="form-label">Talent lvl 10 Left</label>
                                            <input type="text" class="form-control" id="talent_10_left" name="talent_10_left" value="{{ old('talent_10_left') }}" required>
                                            @error('talent_10_left') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="talent_10_right" class="form-label">Talent lvl 10 Right</label>
                                            <input type="text" class="form-control" id="talent_10_right" name="talent_10_right" value="{{ old('talent_10_right') }}" required>
                                            @error('talent_10_right') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    {{-- Talent 15, 20, 25 --}}
                                    @for ($level = 15; $level <= 25; $level += 5)
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="talent_{{ $level }}_left" class="form-label">Talent lvl {{ $level }} Left</label>
                                            <input type="text" class="form-control" id="talent_{{ $level }}_left" name="talent_{{ $level }}_left" value="{{ old('talent_'.$level.'_left') }}" required>
                                            @error("talent_{$level}_left") <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="talent_{{ $level }}_right" class="form-label">Talent lvl {{ $level }} Right</label>
                                            <input type="text" class="form-control" id="talent_{{ $level }}_right" name="talent_{{ $level }}_right" value="{{ old('talent_'.$level.'_right') }}" required>
                                            @error("talent_{$level}_right") <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    @endfor
                            
                                    {{-- Tombol Submit --}}
                                    <button type="submit" class="btn btn-primary mt-4">Simpan Hero</button>
                                    <a href="{{ route('adminheroes.index') }}" class="btn btn-secondary mt-4">Batal</a>
                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; RnB 2025</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

</body>

</html>