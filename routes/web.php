<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieCastController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MovieImageController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// **Autentikasi Laravel**
Auth::routes();


// **Group route untuk User**
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/animedetail', [HomeController::class, 'animedetail']);
    Route::get('/', [HomeController::class, 'index'])->name('user.dashboard');
});

// **Group route untuk Admin**
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // **Resource Routes untuk Admin**
    Route::resource('/users', UserController::class);
    Route::resource('/genres', GenreController::class);
    Route::resource('/movies', MovieController::class);
    Route::resource('/casts', MovieCastController::class);
    Route::resource('/images', MovieImageController::class);
    Route::resource('/reviews', ReviewController::class);
    Route::resource('profiles', ProfileController::class)->middleware('auth');
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::post('/favorites', [FavoriteController::class, 'store'])->name('favorites.store');
    Route::delete('/favorites/{id}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');
});

