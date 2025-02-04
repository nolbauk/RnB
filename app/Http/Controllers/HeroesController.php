<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroesController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        return view('admin.heroes.heroeslist', compact('heroes'));
    }
}
