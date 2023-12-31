<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Request;
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
Route::get('/users/agent', [HomeController::class, 'usersagent'])->name('user.agent');
Route::get('/users/user', [HomeController::class, 'usersuser'])->name('users.user');
Route::get('/users/dealer', [HomeController::class, 'usersdealer'])->name('users.dealer');

Route::get('/users/dealer/approved', [HomeController::class, 'usersdealerapproved'])->name('usersdealerapproved');
Route::get('/users/property/approved', [HomeController::class, 'userspropertyapproved'])->name('userspropertyapproved');

Route::get('/addUser', [HomeController::class, 'addUser'])->name('users.add');
Route::post('/addCreateUser', [HomeController::class, 'addCreateUser'])->name('usersCreate');
Route::get('/edit/users/{id}', [HomeController::class, 'usersedit'])->name('users.edit.admin');
Route::delete('/delete/users/{id}', [HomeController::class, 'usersdelete'])->name('users.delete.admin');
Route::get('/userscontact', [HomeController::class, 'userscontact'])->name('userscontact');
Route::delete('/delete/userscontact/{id}', [HomeController::class, 'usersuserscontact'])->name('userscontactdelete');



// Login and registration
Route::post('/registerUser', [RegisterController::class, 'registerUser'])->name('registerUser');
Route::post('/loginUser', [RegisterController::class, 'loginUser'])->name('loginUser');
Route::get('/optconfirm/{email}', [RegisterController::class, 'otpconfirm'])->name('otpconfirm');

// Property
Route::get('/createProperty', [AdminController::class, 'createProperty'])->name('createProperty');
Route::post('/addProperty', [AdminController::class, 'addProperty'])->name('addProperty');
Route::post('/updateProperty', [AdminController::class, 'updateProperty'])->name('update.property');
Route::get('/property/{type}', [AdminController::class, 'Listproperty'])->name('Listproperty');
Route::delete('/propertydelete/{id}', [AdminController::class, 'ListpropertyDelete'])->name('ListpropertyDelete');
Route::get('/propertyedit/{id}', [AdminController::class, 'Listpropertyedit'])->name('Listpropertyedit');
Route::get('/propertyLike', [AdminController::class, 'propertyLike'])->name('propertyLike');
Route::post('/propertyApproved', [AdminController::class, 'propertyApproved'])->name('propertyApproved');
Route::post('/usersApproved', [AdminController::class, 'usersApproved'])->name('usersApproved');

// Booking
Route::get('/booking/{type}', [AdminController::class, 'myBooking'])->name('myBooking');
Route::delete('/bookingdelete/{id}', [AdminController::class, 'myBookingdelete'])->name('myBookingdelete');
Route::post('/Bookingstatus', [AdminController::class, 'Bookingstatus'])->name('Bookingstatus');

Route::get('/dealerverification', [AdminController::class, 'dealerverification'])->name('dealerverification');
Route::get('/propertyverification', [AdminController::class, 'propertyverification'])->name('propertyverification');
Route::delete('/propertyverificationDeleted/{id}', [AdminController::class, 'propertyverificationDeleted'])->name('propertyverificationDeleted');

Route::post('/dealerverificationAdd', [AdminController::class, 'dealerverificationAdd'])->name('dealerverificationAdd');
Route::post('/propertyverificationAdd', [AdminController::class, 'propertyverificationAdd'])->name('propertyverificationAdd');


// User Route
Route::get('/', [WebsiteController::class, 'index'])->name('home.index');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/terms', [WebsiteController::class, 'terms'])->name('terms');
Route::get('/policy', [WebsiteController::class, 'policy'])->name('policy');
Route::get('/dealer/{id}', [WebsiteController::class, 'singleDealer'])->name('singleDealer');
Route::get('/dealer', [WebsiteController::class, 'dealer'])->name('dealer');
Route::get('/properties', [WebsiteController::class, 'properties'])->name('properties');
Route::get('/propertyView/{id}', [WebsiteController::class, 'propertyView'])->name('propertyView');
Route::post('/userscontactpost', [WebsiteController::class, 'userscontactpost'])->name('userscontactpost');
Route::post('/usersAppointment', [WebsiteController::class, 'usersAppointment'])->name('usersAppointment');
Route::post('/usersBooking', [WebsiteController::class, 'usersBooking'])->name('usersBooking');
Route::post('/usersLikeP/{id}', [WebsiteController::class, 'usersLikeP'])->name('usersLikeP');



Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest');
