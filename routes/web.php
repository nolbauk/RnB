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

// HAKIM BERKERJA DI SINI FILTER
Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');
Route::get('/hero/{id}', [GalleryHeroController::class, 'show'])->name('hero.show');






// ROUTE ADMIN
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('adminheroes', HeroesController::class);


