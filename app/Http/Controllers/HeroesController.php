<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<<< HEAD:app/Http/Controllers/HeroesController.php
=======
use Illuminate\Support\Facades\Storage;
>>>>>>> 3-Admin
use App\Models\Hero;

class HeroesController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
<<<<<<< HEAD
        return view('admin.heroes.heroeslist', compact('heroes'));
========
use App\Models\Hero1Tes;
class Hero1TesController extends Controller
{
    public function index()
    {
        $heroes = Hero1Tes::all();
        return view('heroes', compact('heroes'));
>>>>>>>> 1-ListHero:app/Http/Controllers/Hero1TesController.php
=======
        return view('admin.heroes.index', compact('heroes'));
>>>>>>> 3-Admin
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        // Validasi input dari user
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'bio' => 'nullable|string',
            'primary_attribute' => 'required|in:Strength,Agility,Intelligence,Universal',
            'attack_type' => 'required|in:Melee,Ranged',
            'complexity' => 'required|in:Easy,Medium,Hard',
            'roles' => 'required|string',
            'primary_strength' => 'required|numeric',
            'primary_agility' => 'required|numeric',
            'primary_intelligence' => 'required|numeric',
            'strength_per_lvl' => 'required|numeric',
            'agility_per_lvl' => 'required|numeric',
            'intelligence_per_lvl' => 'required|numeric',
            'health' => 'required|integer',
            'health_regen' => 'required|numeric',
            'mana' => 'required|integer',
            'mana_regen' => 'required|numeric',
            'armor' => 'required|numeric',
            'attack_dmg_min' => 'required|integer',
            'attack_dmg_max' => 'required|integer',
            'attack_speed' => 'required|numeric',
            'movement_speed' => 'required|integer',
            'magic_resist' => 'required|numeric',
            'attack_rate' => 'required|numeric',
            'lore' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'innate_title' => 'nullable|string|max:100',
            'innate_desc' => 'nullable|string',
            'projectile_speed' => 'nullable|integer',
            'attack_range' => 'required|integer',
            'turn_rate' => 'required|numeric',
            'collision_size' => 'required|numeric',
            'bound_radius' => 'required|numeric',
            'vision_range_day' => 'required|integer',
            'vision_range_night' => 'required|integer',
            'voice_actor' => 'nullable|string|max:255',
            'talent_10_left' => 'required|string|max:255',
            'talent_10_right' => 'required|string|max:255',
            'talent_15_left' => 'required|string|max:255',
            'talent_15_right' => 'required|string|max:255',
            'talent_20_left' => 'required|string|max:255',
            'talent_20_right' => 'required|string|max:255',
            'talent_25_left' => 'required|string|max:255',
            'talent_25_right' => 'required|string|max:255',
        ]);

        $heroData = $request->except('image');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('heroes', 'public');
            $heroData['image'] = $imagePath;
        }

        Hero::create($heroData);

        return redirect()->route('adminheroes.index')->with('success', 'Hero berhasil ditambahkan!');
    }

    public function show($id)
    {
        $hero = Hero::find($id);
        
        if (!$hero) {
            return response()->json(['error' => 'Hero not found'], 404);
        }
    
        return response()->json([
            'hero' => $hero
        ], 200);
    }
    

    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);

        if ($hero->image && Storage::exists('public/heroes/' . $hero->image)) {
            Storage::delete('public/heroes/' . $hero->image);
        }

        $hero->delete();

        return redirect()->route('adminheroes.index')->with('success', 'Hero berhasil dihapus!');
    }


}
