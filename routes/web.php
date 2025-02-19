<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\GalleryHeroController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
// fix
Route::get('/', function () {
    return view('home');
});

Route::get('/item', function () {
    return view('item');
});

Route::get('/bekasitem', function () {
    return view('bekasitem');
});

Route::get('/qwerty', function () {
    return view('qwerty');
});

// HAKIM BERKERJA DI SINI FILTER
Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');
Route::get('/hero/{name}', [GalleryHeroController::class, 'show'])->name('hero.show');
Route::get('/search-hero', [GalleryHeroController::class, 'search'])->name('heroes.search');

Route::get('/filter-heroes', function (Request $request) {
    $query = Hero::query();

    if ($request->has('complexity') && $request->complexity != '') {
        $query->where('complexity', $request->complexity);
    }

    if ($request->has('role') && $request->role != '') {
        $query->whereHas('roles', function ($q) use ($request) {
            $q->where('name', $request->role);
        });
    }

    if ($request->has('attack_type') && $request->attack_type != '') {
        $query->where('attack_type', $request->attack_type);
    }

    return response()->json($query->get());
});

//HM
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile-view', function () {
    return view('profile-view');
});

// ROUTE GUEST
Route::resource('user', UserController::class)->only(['create', 'store']);

// ROUTE USER
Route::resource('user', UserController::class)->only(['edit', 'update']);

// ROUTE ADMIN
Route::resource('admindashboard', DashboardController::class);

Route::resource('adminheroes', HeroesController::class);

Route::resource('adminroles', RoleController::class);

Route::resource('adminusers', UserController::class);

