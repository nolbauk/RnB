<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\GalleryHeroController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

// Route::get('/bekasitem', function () {
//     return view('bekasitem');
// });

// Route::get('/qwerty', function () {
//     return view('qwerty');
// });

// Halaman Utama
Route::get('/', function () {
    return view('home');
});

// Halaman Item
Route::get('/item', function () {
    return view('item');
});

// Halaman Hero (Public)
Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');
Route::get('/hero/{id}', [GalleryHeroController::class, 'show'])->name('hero.show');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');   

    Route::get('/profile-view', function () {
        return view('profile-view');
    });
});

// Admin
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('admindashboard', DashboardController::class);

    Route::resource('adminheroes', HeroesController::class);

    Route::resource('adminroles', RoleController::class);

    Route::resource('adminusers', UserController::class);
    Route::patch('/adminusers/{id}/restore', [UserController::class, 'restore'])->name('adminusers.restore');
    Route::delete('/adminusers/{id}/force-delete', [UserController::class, 'forceDelete'])->name('adminusers.forceDelete');
});

