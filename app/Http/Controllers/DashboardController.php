<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class DashboardController extends Controller
{
    public function index()
    {
        $totalHero = Hero::count();
        return view('admin.dashboard', compact('totalHero'));
    }
}
