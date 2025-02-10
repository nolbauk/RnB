<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\GalleryHeroController;

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

Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');

// ROUTE ADMIN
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('adminheroes', HeroesController::class);