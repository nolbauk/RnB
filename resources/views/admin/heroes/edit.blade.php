@extends('layouts.admin')

@section('title', 'Heroes')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data Heroes</h1>
    <x-allert/>            
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Hero</h6>
        </div>
        <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
            <div class="container">
                <form action="{{ route('heroes.update', $adminhero->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Nama Hero --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Hero</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $adminhero->name) }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Image Upload --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Hero</label>
                        <input type="file" class="form-control form-control-sm" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror

                        {{-- Pratinjau gambar jika sudah ada --}}
                        @if($adminhero->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $adminhero->image) }}" alt="Gambar Hero" class="img-thumbnail" width="150">
                            </div>
                        @endif
                    </div>

                    {{-- Primary Attribute --}}
                    <div class="mb-3">
                        <label for="primary_attribute" class="form-label">Primary Attribute</label>
                        <select class="form-control" id="primary_attribute" name="primary_attribute" required>
                            <option value="Strength" {{ old('primary_attribute', $adminhero->primary_attribute) == 'Strength' ? 'selected' : '' }}>Strength</option>
                            <option value="Agility" {{ old('primary_attribute', $adminhero->primary_attribute) == 'Agility' ? 'selected' : '' }}>Agility</option>
                            <option value="Intelligence" {{ old('primary_attribute', $adminhero->primary_attribute) == 'Intelligence' ? 'selected' : '' }}>Intelligence</option>
                            <option value="Universal" {{ old('primary_attribute', $adminhero->primary_attribute) == 'Universal' ? 'selected' : '' }}>Universal</option>
                        </select>
                        @error('primary_attribute') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Bio --}}
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea class="form-control" id="bio" name="bio">{{ old('bio', $adminhero->bio) }}</textarea>
                        @error('bio') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Lore --}}
                    <div class="mb-3 mt-3">
                        <label for="lore" class="form-label">Lore</label>
                        <textarea class="form-control" id="lore" name="lore" rows="6" cols="50">{{ old('lore', $adminhero->lore) }}</textarea>
                        @error('lore') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Attack Type --}}
                    <div class="mb-3">
                        <label for="attack_type" class="form-label">Attack Type</label>
                        <select class="form-control" id="attack_type" name="attack_type" required>
                            <option value="Melee" {{ old('attack_type', $adminhero->attack_type) == 'Melee' ? 'selected' : '' }}>Melee</option>
                            <option value="Ranged" {{ old('attack_type', $adminhero->attack_type) == 'Ranged' ? 'selected' : '' }}>Ranged</option>
                        </select>
                        @error('attack_type') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Complexity --}}
                    <div class="mb-3">
                        <label for="complexity" class="form-label">Complexity</label>
                        <select class="form-control" id="complexity" name="complexity" required>
                            <option value="Easy" {{ old('complexity', $adminhero->complexity) == 'Easy' ? 'selected' : '' }}>Easy</option>
                            <option value="Medium" {{ old('complexity', $adminhero->complexity) == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="Hard" {{ old('complexity', $adminhero->complexity) == 'Hard' ? 'selected' : '' }}>Hard</option>
                        </select>
                        @error('complexity') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <h4>Attributes</h4>

                    {{-- Health & Mana --}}
                    <div class="row">
                        <div class="col-md-4">
                            <label for="health" class="form-label">Health</label>
                            <input type="number" class="form-control" id="health" name="health" value="{{ old('health', $adminhero->health) }}" required>
                            @error('health') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="health_regen" class="form-label">Health Regen</label>
                            <input type="number" step="0.1" class="form-control" id="health_regen" name="health_regen" value="{{ old('health_regen', $adminhero->health_regen) }}" required>
                            @error('health_regen') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="mana" class="form-label">Mana</label>
                            <input type="number" class="form-control" id="mana" name="mana" value="{{ old('mana', $adminhero->mana) }}" required>
                            @error('mana') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="mana_regen" class="form-label">Mana Regen</label>
                            <input type="number" step="0.1" class="form-control" id="mana_regen" name="mana_regen" value="{{ old('mana_regen', $adminhero->mana_regen) }}" required>
                            @error('mana_regen') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    
                    {{-- Strength --}}
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="primary_strength" class="form-label">Strength</label>
                            <input type="number" step="1" class="form-control" id="primary_strength" name="primary_strength" value="{{ old('primary_strength', $adminhero->primary_strength) }}" required>
                            @error('primary_strength') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="strength_per_lvl" class="form-label">Strength per Level</label>
                            <input type="number" step="0.01" class="form-control" id="strength_per_lvl" name="strength_per_lvl" value="{{ old('strength_per_lvl', $adminhero->strength_per_lvl) }}" required>
                            @error('strength_per_lvl') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    
                    {{-- Agility --}}
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="primary_agility" class="form-label">Agility</label>
                            <input type="number" step="1" class="form-control" id="primary_agility" name="primary_agility" value="{{ old('primary_agility', $adminhero->primary_agility) }}" required>
                            @error('primary_agility') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="agility_per_lvl" class="form-label">Agility per Level</label>
                            <input type="number" step="0.01" class="form-control" id="agility_per_lvl" name="agility_per_lvl" value="{{ old('agility_per_lvl', $adminhero->agility_per_lvl) }}" required>
                            @error('agility_per_lvl') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    
                    {{-- Intelligence --}}
                    <div class="row mt-3 mb-3">
                        <div class="col-md-4">
                            <label for="primary_intelligence" class="form-label">Intelligence</label>
                            <input type="number" step="1" class="form-control" id="primary_intelligence" name="primary_intelligence" value="{{ old('primary_intelligence', $adminhero->primary_intelligence) }}" required>
                            @error('primary_intelligence') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="intelligence_per_lvl" class="form-label">Intelligence per Level</label>
                            <input type="number" step="0.01" class="form-control" id="intelligence_per_lvl" name="intelligence_per_lvl" value="{{ old('intelligence_per_lvl', $adminhero->intelligence_per_lvl) }}" required>
                            @error('intelligence_per_lvl') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>                                                                        
            
                    {{-- Roles --}}
                    <h4>Roles</h4>

                    @php
                        $roles = ['carry', 'support', 'nuker', 'disabler', 'jungler', 'durable', 'escape', 'pusher', 'initiator'];
                    @endphp

                    @foreach (array_chunk($roles, 3) as $roleRow)
                        <div class="row mt-3">
                            @foreach ($roleRow as $role)
                                <div class="col-md-4">
                                    <label for="{{ $role }}" class="form-label">{{ ucfirst($role) }}</label>
                                    <select class="form-control" id="{{ $role }}" name="{{ $role }}" required>
                                        @for ($i = 0; $i <= 3; $i++)
                                            <option value="{{ $i }}" {{ old($role, $adminhero->$role ?? 0) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                    @error($role) <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                    <h4 class="mt-3">Stats</h4>

                    <h5>Attack</h5>
                    {{-- attack min - max --}}
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="attack_dmg_min" class="form-label">Attack Damage Min</label>
                            <input type="number" class="form-control" id="attack_dmg_min" name="attack_dmg_min"
                                   value="{{ old('attack_dmg_min', $adminhero->attack_dmg_min ?? 1) }}" min="1" required>
                            @error('attack_dmg_min') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="attack_dmg_max" class="form-label">Attack Damage Max</label>
                            <input type="number" class="form-control" id="attack_dmg_max" name="attack_dmg_max"
                                   value="{{ old('attack_dmg_max', $adminhero->attack_dmg_max ?? 1) }}" min="1" required>
                            @error('attack_dmg_max') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    {{-- attack rate --}}
                    <div class="mb-3">
                        <label for="attack_rate" class="form-label">Attack Rate</label>
                        <input type="number" step="any" class="form-control" id="attack_rate" name="attack_rate"
                               value="{{ old('attack_rate', $adminhero->attack_rate ?? 1.0) }}" min="0.1" required>
                        @error('attack_rate') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    {{-- attack range --}}
                    <div class="mb-3">
                        <label for="attack_range" class="form-label">Attack Range</label>
                        <input type="number" class="form-control" id="attack_range" name="attack_range"
                               value="{{ old('attack_range', $adminhero->attack_range ?? 1) }}" min="1" required>
                        @error('attack_range') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    {{-- projectile speed --}}
                    <div class="mb-3">
                        <label for="projectile_speed" class="form-label">Projectile Speed</label>
                        <input type="number" class="form-control" id="projectile_speed" name="projectile_speed"
                            value="{{ old('projectile_speed', $adminhero->projectile_speed ?? 0) }}" required>
                        @error('projectile_speed') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    
                    <h5>Defense</h5>
                    {{-- armor --}}
                    <div class="mb-3">
                        <label for="armor" class="form-label">Armor</label>
                        <input type="number" step="any" class="form-control" id="armor" name="armor"
                               value="{{ old('armor', $adminhero->armor ?? 0) }}" required>
                        @error('armor') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    {{-- magic resist --}}
                    <div class="mb-3">
                        <label for="magic_resist" class="form-label">Magic Resist (%)</label>
                        <input type="number" step="any" class="form-control" id="magic_resist" name="magic_resist"
                               value="{{ old('magic_resist', $adminhero->magic_resist ?? 0) }}" min="0" max="100" required>
                        @error('magic_resist') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    
                    <h5>Mobility</h5>
                    {{-- movement speed --}}
                    <div class="mb-3">
                        <label for="movement_speed" class="form-label">Movement Speed</label>
                        <input type="number" class="form-control" id="movement_speed" name="movement_speed"
                               value="{{ old('movement_speed', $adminhero->movement_speed ?? 1) }}" min="1" required>
                        @error('movement_speed') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    {{-- turn rate --}}
                    <div class="mb-3">
                        <label for="turn_rate" class="form-label">Turn Rate</label>
                        <input type="number" step="any" class="form-control" id="turn_rate" name="turn_rate"
                               value="{{ old('turn_rate', $adminhero->turn_rate ?? 0.1) }}" min="0.1" required>
                        @error('turn_rate') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    {{-- vision range day and night --}}
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="vision_range_day" class="form-label">Vision Range Day</label>
                            <input type="number" class="form-control" id="vision_range_day" name="vision_range_day"
                                   value="{{ old('vision_range_day', $adminhero->vision_range_day ?? 1) }}" min="1" required>
                            @error('vision_range_day') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="vision_range_night" class="form-label">Vision Range Night</label>
                            <input type="number" class="form-control" id="vision_range_night" name="vision_range_night"
                                   value="{{ old('vision_range_night', $adminhero->vision_range_night ?? 1) }}" min="1" required>
                            @error('vision_range_night') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>                                    

                    {{-- Innate Ability --}}
                    <h4>Innate Ability</h4>
                    <div class="mb-3">
                        <label for="innate_title" class="form-label">Innate Title</label>
                        <input type="text" class="form-control" id="innate_title" name="innate_title"
                            value="{{ old('innate_title', $adminhero->innate_title ?? '') }}" required>
                        @error('innate_title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="innate_desc" class="form-label">Innate Description</label>
                        <textarea class="form-control" id="innate_desc" name="innate_desc" required>{{ old('innate_desc', $adminhero->innate_desc ?? '') }}</textarea>
                        @error('innate_desc') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Additional Combat Stats --}}
                    <h4>Additional Combat Stats</h4>
                    <div class="mb-3">
                        <label for="collision_size" class="form-label">Collision Size</label>
                        <input type="number" step="any" class="form-control" id="collision_size" name="collision_size"
                            value="{{ old('collision_size', $adminhero->collision_size ?? 0) }}" required>
                        @error('collision_size') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="bound_radius" class="form-label">Bound Radius</label>
                        <input type="number" step="any" class="form-control" id="bound_radius" name="bound_radius"
                            value="{{ old('bound_radius', $adminhero->bound_radius ?? 0) }}" required>
                        @error('bound_radius') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="attack_speed" class="form-label">Attack Speed</label>
                        <input type="number" step="any" class="form-control" id="attack_speed" name="attack_speed"
                            value="{{ old('attack_speed', $adminhero->attack_speed ?? 0) }}" required>
                        @error('attack_speed') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <h4>Voice</h4>
                    <div class="mb-3">
                        <label for="voice_actor" class="form-label">Voice Actor</label>
                        <input type="text" class="form-control" id="voice_actor" name="voice_actor"
                            value="{{ old('voice_actor', $adminhero->voice_actor ?? '') }}" required>
                        @error('voice_actor') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Talent Tree --}}
                    <h4>Talent Tree</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="talent_10_left" class="form-label">Talent lvl 10 Left</label>
                            <input type="text" class="form-control" id="talent_10_left" name="talent_10_left"
                                value="{{ old('talent_10_left', $adminhero->talent_10_left ?? '') }}" required>
                            @error('talent_10_left') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="talent_10_right" class="form-label">Talent lvl 10 Right</label>
                            <input type="text" class="form-control" id="talent_10_right" name="talent_10_right"
                                value="{{ old('talent_10_right', $adminhero->talent_10_right ?? '') }}" required>
                            @error('talent_10_right') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    {{-- Talent 15, 20, 25 --}}
                    @for ($level = 15; $level <= 25; $level += 5)
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="talent_{{ $level }}_left" class="form-label">Talent lvl {{ $level }} Left</label>
                            <input type="text" class="form-control" id="talent_{{ $level }}_left" name="talent_{{ $level }}_left"
                                value="{{ old('talent_'.$level.'_left', $adminhero->{'talent_'.$level.'_left'} ?? '') }}" required>
                            @error("talent_{$level}_left") <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="talent_{{ $level }}_right" class="form-label">Talent lvl {{ $level }} Right</label>
                            <input type="text" class="form-control" id="talent_{{ $level }}_right" name="talent_{{ $level }}_right"
                                value="{{ old('talent_'.$level.'_right', $adminhero->{'talent_'.$level.'_right'} ?? '') }}" required>
                            @error("talent_{$level}_right") <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    @endfor
            
                    {{-- Tombol Submit --}}
                    <button type="submit" class="btn btn-primary mt-4">
                        {{ isset($adminhero) ? 'Update Hero' : 'Simpan Hero' }}
                    </button>
                    <a href="{{ route('heroes.index') }}" class="btn btn-secondary mt-4">Batal</a>
            
                </form>
            </div>
        </div>
    </div>        
@endsection