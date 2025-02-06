<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<<< HEAD:app/Http/Controllers/HeroesController.php
use App\Models\Hero;

class HeroesController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
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
    }
}
