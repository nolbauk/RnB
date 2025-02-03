<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hero;
class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        return view('heroes.index', compact('heroes'));
    }
}
