<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Models\Publication;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/login/logout', [LoginController::class, 'logout'])->name('login.logout');



// Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
// Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
// Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
// Route::get('/profiles/{profile}', [ProfileController::class, 'show'])->name('profiles.show');
// Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
// Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->name('profiles.update');
// Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->name('profiles.destroy');

Route::resource('profiles', ProfileController::class);
Route::resource('publication', PublicationController::class);

Route::get('/settings', [InformationController::class, 'index'])->name('settings.index');
