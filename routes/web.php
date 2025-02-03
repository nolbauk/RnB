<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
}); 

Route::get('/item', function () {
    return view('item');
}); 

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
