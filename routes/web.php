<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');
