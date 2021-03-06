<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addmahasiswa', [App\Http\Controllers\HomeController::class, 'addmhs'])->name('add');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changepass'])->name('change password')->middleware('auth');

Route::post('/update-password','HomeController@updatePassword')->middleware('auth');