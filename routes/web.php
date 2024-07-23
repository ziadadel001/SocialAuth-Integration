<?php

use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//*-----------Google Auth-----------//
Route::get('/Auth/google', [GoogleController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/call-back', [GoogleController::class, 'CallBack'])->name('callback.google');



//*-----------Github Auth-----------//
Route::get('/auth/github/redirect', [GithubController::class, 'redirect'])->name('auth.Github');;
Route::get('/auth/github/callback', [GithubController::class, 'CallBack'])->name('callback.Github');


require __DIR__ . '/auth.php';
