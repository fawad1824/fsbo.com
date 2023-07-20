<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/users/admin', [HomeController::class, 'users'])->name('users.admin');

Route::get('/addUser', [HomeController::class, 'addUser'])->name('users.add');
Route::get('/edit/users/{id}', [HomeController::class, 'usersedit'])->name('users.edit.admin');
Route::delete('/delete/users/{id}', [HomeController::class, 'usersdelete'])->name('users.delete.admin');



// Login and registration
Route::post('/registerUser', [RegisterController::class, 'registerUser'])->name('registerUser');
Route::post('/loginUser', [RegisterController::class, 'loginUser'])->name('loginUser');
Route::get('/optconfirm/{email}', [RegisterController::class, 'otpconfirm'])->name('otpconfirm');

// Property
Route::get('/createProperty', [AdminController::class, 'createProperty'])->name('createProperty');
Route::post('/addProperty', [AdminController::class, 'addProperty'])->name('addProperty');
Route::get('/property/{type}', [AdminController::class, 'Listproperty'])->name('Listproperty');
Route::delete('/propertydelete/{id}', [AdminController::class, 'ListpropertyDelete'])->name('ListpropertyDelete');
Route::get('/propertyedit/{id}', [AdminController::class, 'Listpropertyedit'])->name('Listpropertyedit');


// User Route
Route::get('/', [WebsiteController::class, 'index'])->name('home.index');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/propertyView/{id}', [WebsiteController::class, 'propertyView'])->name('propertyView');

