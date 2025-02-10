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

Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');

// ROUTE ADMIN
Route::resource('admindashboard', DashboardController::class);

Route::resource('adminheroes', HeroesController::class);