<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\GalleryHeroController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/hero/{id}', [GalleryHeroController::class, 'show'])->name('hero.show');






// ROUTE ADMIN
Route::resource('admindashboard', DashboardController::class);

Route::resource('adminheroes', HeroesController::class);

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
