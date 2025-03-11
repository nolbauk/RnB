<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\GalleryHeroController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// Route::get('/qwerty', function () {
//     return view('qwerty');
// });

// Halaman Publik
Route::view('/', 'home');
Route::view('/item', 'item');
Route::view('/news', 'news.news-gallery');
Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');
Route::get('/hero/{id}', [GalleryHeroController::class, 'show'])->name('hero.show');

// Login dan Register hanya untuk Guest
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout
Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Routes untuk User (Role: 2)
Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::view('/profile-view', 'profile-view');
    
    // Forum User
    Route::view('/discuss', 'forum.discuss');
    Route::view('/gallery', 'forum.gallery');
});

// Routes untuk Admin (Role: 1)
Route::middleware(['auth', 'role:1'])->prefix('admin')->group(function () {
    // Dashboard
    Route::resource('admindashboard', DashboardController::class);
    
    // Data Hero
    Route::resource('adminheroes', HeroesController::class);

    // Data Role
    Route::resource('adminroles', RoleController::class);
    
    // Data User
    Route::resource('adminusers', UserController::class);
    Route::patch('/adminusers/{id}/restore', [UserController::class, 'restore'])->name('adminusers.restore');
    Route::delete('/adminusers/{id}/force-delete', [UserController::class, 'forceDelete'])->name('adminusers.forceDelete');
});