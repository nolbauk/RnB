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
    public function show($id){
        $hero = Hero::findOrFail($id);
        return view('hero-detail', compact('hero'));
    }
    public function filter(Request $request)
{
    if ($request->has('query')) {
        // Search berdasarkan nama atau primary_attribute
        $query = $request->input('query');

        $heroes = Hero::where('name', 'LIKE', "%{$query}%")
                      ->orWhere('primary_attribute', 'LIKE', "%{$query}%")
                      ->get();
        
        return response()->json($heroes);
    } elseif ($request->has('complexity')) {
        // Filter berdasarkan complexity
        $complexityMap = [
            1 => 'Easy',
            2 => 'Medium',
            3 => 'Hard'
        ];
        
        $complexity = $complexityMap[$request->complexity] ?? null;
    
        if (!$complexity) {
            return response()->json([]);
        }
    
        $heroes = Hero::where('complexity', $complexity)->get();
    
        return response()->json($heroes);
    }

    return response()->json([]);
}

}