<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\GalleryHeroController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

// Route::get('/qwerty', function () {
//     return view('qwerty');
// });

// Guest
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    // Halaman Utama
    Route::get('/', function () {
        return view('home');
    });

    // Halaman Item
    Route::get('/item', function () {
        return view('item');
    });

    //NEWS
    Route::get('/news', function () {
        return view('news.news-gallery');
    });

    // Halaman Hero (Public)
    Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');
    Route::get('/hero/{id}', [GalleryHeroController::class, 'show'])->name('hero.show');

});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Auth User
Route::middleware(['auth', 'role:2'])->group(function () {
    //profile
    Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');   

    Route::get('/profile-view', function () {
        return view('profile-view');
    });

    //FORUM
    Route::get('/discuss', function () {
        return view('forum.discuss');
    });

    Route::get('/gallery', function () {
        return view('forum.gallery');
    });
});

// Auth Admin
Route::middleware(['auth', 'role:1'])->group(function () {
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

// HAKIM BERKERJA DI SINI FILTER
Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');
Route::get('/hero/{name}', [GalleryHeroController::class, 'show'])->name('hero.show');
Route::get('/search-hero', [GalleryHeroController::class, 'search'])->name('heroes.search');
// Search Dan Complexity 
Route::get('/heroes/filter', [GalleryHeroController::class, 'filter'])->name('heroes.filter');
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile-view', function () {
    return view('profile-view');
});

// ROUTE GUEST
Route::resource('user', UserController::class)->only(['create', 'store']);

// ROUTE USER
Route::resource('user', UserController::class)->only(['edit', 'update']);

// ROUTE ADMIN
Route::resource('admindashboard', DashboardController::class);

Route::resource('adminheroes', HeroesController::class);

Route::resource('adminroles', RoleController::class);

Route::resource('adminusers', UserController::class);

//FORUM
Route::get('/discuss', function () {
    return view('forum.discuss');
});

Route::get('/gallery', function () {
    return view('forum.gallery');
});

Route::get('/discuss-detail', function () {
    return view('forum.discuss-detail');
});

//NEWS
Route::get('/news', function () {
    return view('news.news-gallery');
});
