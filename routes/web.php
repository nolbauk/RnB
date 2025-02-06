<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\Hero1TesController;

Route::get('/', function () {
    return view('home');
}); 

Route::get('/item', function () {
    return view('item');
}); 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

<<<<<<< HEAD
Route::resource('heroes', HeroesController::class);

// Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');

route::get('/tes', function(){
    return view('tes');
});

Route::get('/hero', [Hero1TesController::class, 'index'])->name('heroes.index');
=======
Route::resource('adminheroes', HeroesController::class);
>>>>>>> 3-Admin
