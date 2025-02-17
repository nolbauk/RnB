<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // fix
        $totalHero = Hero::count();
        $totalUser = User::count();
        return view('admin.dashboard', compact('totalHero', 'totalUser'));
    }
}
