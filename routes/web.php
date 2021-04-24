<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/logout', [LogoutController::class, 'logout']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/profile', [ProfileController::class, 'index'])->name('profile');


Route::get('/about', function () {
    return view('content.about');
})->middleware(['guest'])->name('about');


Route::get('/disclaimer', function () {
    return view('content.disclaimer');
})->middleware(['guest'])->name('disclaimer');


Route::get('/contact', function () {
    return view('content.contact');
})->middleware(['guest'])->name('contact');




Route::get('/', function () { 

    include_once 'data.php';

    if(empty($_GET["article"])){
        return view('content.home')->with([
            "title" => $data[0][0],
            "datetime" => $data[0][1],
            "author" => $data[0][2],
            "content" => $data[0][3],
            "source" => $data[0][4]
            ]
        );
    }else {
        $articleNo = $_GET["article"];
        return view('content.home')->with([
            "title" => $data[$articleNo][0],
            "datetime" => $data[$articleNo][1],
            "author" => $data[$articleNo][2],
            "content" => $data[$articleNo][3],
            "source" => $data[$articleNo][4]
            ]
        );
    }

})->middleware(['guest'])->name('home');