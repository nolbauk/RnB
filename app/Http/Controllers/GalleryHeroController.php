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
}
