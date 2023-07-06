<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\WebsiteController;
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
// Admin Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/propertyRent', [HomeController::class, 'propertyRent'])->name('propertyRent');
Route::get('/users', [HomeController::class, 'users'])->name('users');


// User Route
Route::get('/',[WebsiteController::class,'index'])->name('home.index');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
