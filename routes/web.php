<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\UpdateController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PostsController;

use App\Models\Post;

Route::get('/', function () { 

    $posts = Post::get();
    $latest = Post::latest('created_at')->first();

    if(!empty($_GET["article"]))
        $latest = Post::find($_GET["article"]);
    
    return view('content.home', [
        'posts' => $posts,
        'latest' => $latest
    ]);   

})->name('home');

Route::get('/about', [MasterController::class, 'about'])->name('about');
Route::get('/disclaimer', [MasterController::class, 'disclaimer'])->name('disclaimer');
Route::get('/contact', [MasterController::class, 'contact'])->name('contact');



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/logout', [LogoutController::class, 'logout']);



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/delete{id}', [DashboardController::class, 'delete'])->name('delete');

Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::post('/posts', [PostsController::class, 'store']);


Route::get('/update{id}', [UpdateController::class, 'index'])->name('update');
Route::post('/update{id}', [UpdateController::class, 'update']);

Route::get('/profile{id}', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile{id}', [ProfileController::class, 'uploadProfile']);
Route::post('/profile{id}', [ProfileController::class, 'changePassword']);

