<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // fix
        $totalHero = Hero::count();
        $totalUser = User::count();
        $totalItem = Item::count();
        return view('admin.dashboard', compact('totalHero', 'totalUser', 'totalItem'));
    }
}
