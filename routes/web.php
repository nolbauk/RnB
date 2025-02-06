<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Hero1TesController;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');

route::get('/tes', function(){
    return view('tes');
});

Route::get('/hero', [Hero1TesController::class, 'index'])->name('heroes.index');