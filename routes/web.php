<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/', function () { 
    return view('content.home');
})->middleware(['guest'])->name('home');


Route::get('/about', function () {
    return view('content.about');
})->middleware(['guest'])->name('about');


Route::get('/disclaimer', function () {
    return view('content.disclaimer');
})->middleware(['guest'])->name('disclaimer');


Route::get('/contact', function () {
    return view('content.contact');
})->middleware(['guest'])->name('contact');



Route::get('/dashboard', function () {
    return view('content.dashboard');
})->name('dashboard');