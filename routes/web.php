<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/what_we_do', [App\Http\Controllers\FrontController::class, 'WhatWedo'])->name('WhatWedo');
Route::get('/who_we_are', [App\Http\Controllers\FrontController::class, 'WhoWeAre'])->name('WhoWeAre');
Route::get('/join_us', [App\Http\Controllers\FrontController::class, 'JoinUs'])->name('JoinUs');
Route::get('/find-ia', [App\Http\Controllers\FrontController::class, 'Find'])->name('Find');
Route::get('/how_we_do', [App\Http\Controllers\FrontController::class, 'HowWeDo'])->name('HowWeDo');
Route::get('/privacy', [App\Http\Controllers\FrontController::class, 'Privacy'])->name('Privacy');
Route::get('/search', [App\Http\Controllers\FrontController::class, 'Search'])->name('search');
Route::get('/what_they_say', [App\Http\Controllers\FrontController::class, 'WhatTheySay'])->name('WhatTheySay');
Route::get('/what_we_say', [App\Http\Controllers\FrontController::class, 'WhatWeSay'])->name('WhatWeSay');

Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
});


