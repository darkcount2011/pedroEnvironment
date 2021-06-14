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

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::middleware('auth')->resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::middleware('auth')->resource('stories', \App\Http\Controllers\StoryController::class);


require __DIR__.'/auth.php';
