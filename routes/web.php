<?php

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PublicationController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
  Route::get('/login', [LoginController::class, 'index'])->name('login.index');
  Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});
Route::get('/login/logout', [LoginController::class, 'logout'])->name('login.logout')->middleware('auth');


Route::resource('profiles', ProfileController::class);
Route::resource('publications', PublicationController::class)->middleware('auth');



Route::get('/products', [InformationController::class, 'index'])->name('settings.index');

Route::get('/cookie/get', function(Request $request){
  dd($request->cookie('age'));
});

Route::get('/cookie/set/{cookie}', function($cookie){
  $response = new Response();
  $cookieO = cookie('age',$cookie, 1);
  return $response->withCookie($cookieO);
});

