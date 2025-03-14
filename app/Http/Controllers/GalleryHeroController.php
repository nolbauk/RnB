<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class GalleryHeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        $groupedHeroes = [
            'Strength' => $heroes->where('primary_attribute', 'Strength'),
            'Agility' => $heroes->where('primary_attribute', 'Agility'),
            'Intelligence' => $heroes->where('primary_attribute', 'Intelligence'),
            'Universal' => $heroes->where('primary_attribute', 'Universal'),
        ];
        return view('heroes', compact('groupedHeroes')); 
    }

    public function show($id)
    {
        $hero = Hero::findOrFail($id);
        return view('hero-detail', compact('hero'));
    }
    
    public function filter(Request $request)
    {
        if (!$request->hasAny(['query', 'complexity', 'attack_type', 'carry', 'support', 'nuker', 'disabler', 'jungler', 'durable', 'escape', 'pusher', 'initiator'])) {
            return response()->json(Hero::all()); // Kembalikan semua hero jika tidak ada filter yang aktif
        }
    
        $query = Hero::query();
    
        // Filter pencarian
        if ($request->has('query')) {
            $search = $request->input('query');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('primary_attribute', 'LIKE', "%{$search}%");
            });
        }
    
        // Filter berdasarkan Complexity
        if ($request->has('complexity')) {
            $query->where('complexity', $request->complexity);
        }
    
        // Filter berdasarkan Role
        $roles = ['carry', 'support', 'nuker', 'disabler', 'jungler', 'durable', 'escape', 'pusher', 'initiator'];
        foreach ($roles as $role) {
            if ($request->has($role) && $request->$role > 0) {
                $query->where($role, '>', 0);
            }
        }
    
        // Filter berdasarkan Attack Type
        if ($request->has('attack_type')) {
            $query->where('attack_type', $request->attack_type);
        }
    
        return response()->json($query->get());
    }        

}