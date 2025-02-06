<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero1Tes;
class Hero1TesController extends Controller
{
    public function index()
    {
        $heroes = Hero1Tes::all();
        return view('heroes', compact('heroes'));
    }
}
