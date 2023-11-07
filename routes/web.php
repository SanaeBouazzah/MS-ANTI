<?php

use App\Models\Publication;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PublicationController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/login/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::resource('profiles', ProfileController::class)->middleware('auth');
Route::resource('posts', PublicationController::class)->middleware('auth');



Route::get('/settings', [InformationController::class, 'index'])->name('settings.index');
