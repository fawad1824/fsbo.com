<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// website
Route::view('/','website.home');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
