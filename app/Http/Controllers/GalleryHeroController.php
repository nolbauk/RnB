<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class GalleryHeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        return view('heroes', compact('heroes'));
    }
}
