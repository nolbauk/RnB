<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\GalleryHeroController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

// Route::get('/qwerty', function () {
//     return view('qwerty');
// });

// =======================
// Routes untuk Guest (Belum Login)
// =======================
Route::middleware(['guest'])->group(function () {
    // Login & Register hanya untuk Guest
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// =======================
// Routes untuk Semua User (Guest, User, Admin)
// =======================
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cek', function () {
    return view('forum/discuss-detail');
});

Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');
Route::get('/hero/{id}', [GalleryHeroController::class, 'show'])->name('hero.show');

// =======================
// Routes untuk User & Admin (Role: 2 & 1)
// =======================
Route::middleware(['auth', 'role:1,2'])->group(function () {
    // Profile
    Route::resource('/profile', ProfileController::class);
    // Route::prefix('profile')->group(function () {
    //     Route::get('/', [UserController::class, 'profile'])->name('profile');
    //     Route::get('/view', function () {
    //         return view('profile-view');
    //     });
    // });

    // Forum
    Route::prefix('forum')->group(function () {
        Route::get('/discuss', [QuestionController::class, 'index'])->name('questions.index');
        Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
        Route::get('/discuss/{question}', [QuestionController::class, 'show'])->name('questions.show');
        Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
        Route::post('/comments/reply', [CommentController::class, 'reply'])->name('comments.reply');
        Route::post('/comments/reply2reply', [CommentController::class, 'reply2reply'])->name('comments.reply2reply');
        Route::get('/gallery', function () {
            return view('forum.gallery');
        });
    });
});

// =======================
// Routes Khusus Admin (Role: 1)
// =======================
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('/dashboard', DashboardController::class);
        Route::resource('/heroes', HeroesController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/items', ItemController::class);

        // Data User
        Route::resource('/users', UserController::class)->parameters(['users' => 'user']);
        Route::patch('/users/{id}/restore', [UserController::class, 'restore'])->name('adminusers.restore');
        Route::delete('/users/{id}/force-delete', [UserController::class, 'forceDelete'])->name('adminusers.forceDelete');

        // Delete Question
        Route::delete('/questions/{id}', [QuestionController::class, 'destroy'])->name('questions.destroy');
    });
});

// =======================
// Logout (Bisa diakses setelah login)
// =======================
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// HAKIM BERKERJA DI SINI FILTER
Route::get('/hero', [GalleryHeroController::class, 'index'])->name('heroes.index');
Route::get('/hero/{name}', [GalleryHeroController::class, 'show'])->name('hero.show');
Route::get('/search-hero', [GalleryHeroController::class, 'search'])->name('heroes.search');
// Search Dan Complexity 
Route::get('/heroes/filter', [GalleryHeroController::class, 'filter'])->name('heroes.filter');

//NEWS
Route::get('/news', function () {
    return view('news.news-gallery');
});
