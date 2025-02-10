<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Hero;
use Illuminate\Validation\ValidationException;

class HeroesController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        return view('admin.heroes.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:100',
                'bio' => 'nullable|string',
                'primary_attribute' => 'required|in:Strength,Agility,Intelligence,Universal',
                'attack_type' => 'required|in:Melee,Ranged',
                'complexity' => 'required|in:Easy,Medium,Hard',
                'carry' => 'required|numeric',
                'support' => 'required|numeric',
                'nuker' => 'required|numeric',
                'disabler' => 'required|numeric',
                'jungler' => 'required|numeric',
                'durable' => 'required|numeric',
                'escape' => 'required|numeric',
                'pusher' => 'required|numeric',
                'initiator' => 'required|numeric',
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
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
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

    public function edit(Hero $adminhero)
    {
        return view('admin.heroes.edit', compact('adminhero'));
    }
    
    public function update(Request $request, Hero $adminhero)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'bio' => 'nullable|string',
            'primary_attribute' => 'required|in:Strength,Agility,Intelligence,Universal',
            'attack_type' => 'required|in:Melee,Ranged',
            'complexity' => 'required|in:Easy,Medium,Hard',
            'carry' => 'required|numeric|min:0',
            'support' => 'required|numeric|min:0',
            'nuker' => 'required|numeric|min:0',
            'disabler' => 'required|numeric|min:0',
            'jungler' => 'required|numeric|min:0',
            'durable' => 'required|numeric|min:0',
            'escape' => 'required|numeric|min:0',
            'pusher' => 'required|numeric|min:0',
            'initiator' => 'required|numeric|min:0',
            'primary_strength' => 'required|numeric|min:0',
            'primary_agility' => 'required|numeric|min:0',
            'primary_intelligence' => 'required|numeric|min:0',
            'strength_per_lvl' => 'required|numeric|min:0',
            'agility_per_lvl' => 'required|numeric|min:0',
            'intelligence_per_lvl' => 'required|numeric|min:0',
            'health' => 'required|integer|min:0',
            'health_regen' => 'required|numeric|min:0',
            'mana' => 'required|integer|min:0',
            'mana_regen' => 'required|numeric|min:0',
            'armor' => 'required|numeric|min:0',
            'attack_dmg_min' => 'required|integer|min:1',
            'attack_dmg_max' => 'required|integer|min:1|gte:attack_dmg_min',
            'attack_speed' => 'required|numeric|min:0',
            'movement_speed' => 'required|integer|min:1',
            'magic_resist' => 'required|numeric|min:0|max:100',
            'attack_rate' => 'required|numeric|min:0.1',
            'lore' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'innate_title' => 'nullable|string|max:100',
            'innate_desc' => 'nullable|string',
            'projectile_speed' => 'nullable|integer|min:0',
            'attack_range' => 'required|integer|min:1',
            'turn_rate' => 'required|numeric|min:0.1',
            'collision_size' => 'required|numeric|min:0',
            'bound_radius' => 'required|numeric|min:0',
            'vision_range_day' => 'required|integer|min:1',
            'vision_range_night' => 'required|integer|min:1',
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
    
        if ($request->hasFile('image')) {
            if ($adminhero->image) {
                Storage::disk('public')->delete($adminhero->image);
            }
    
            $validated['image'] = $request->file('image')->store('heroes', 'public');
        } else {
            $validated['image'] = $adminhero->image;
        }
    
        $adminhero->update($validated);
    
        return redirect()->route('adminheroes.index')->with('success', 'Hero berhasil diperbarui!');
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
