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
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\adminLoginController;
use App\Http\Controllers\Admin\AdminLogoutController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminShowAllController;
use App\Http\Controllers\Admin\AdminShowDeleteController;

use App\Models\Post;

Route::get('/', function () { 
    include_once 'data.php';

    $posts = Post::get();
    $latest = Post::latest('created_at')->first();

    if($posts->count()){
        if(!empty($_GET["article"])){
            $latest = Post::find($_GET["article"]);
        }
        
        return view('content.home', [
            "posts" => $posts,
            "latest" => $latest,
            "title" => $data[0],
            "datetime" => $data[1],
            "author" => $data[2],
            "article" => $data[3],
            "source" => $data[4]
        ]); 
    }else {
        return view('content.home', [
            "posts" => $posts,
            "latest" => $latest,
            "title" => $data[0],
            "datetime" => $data[1],
            "author" => $data[2],
            "article" => $data[3],
            "source" => $data[4]
        ]);
    }
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
Route::post('/profile-update-picture{id}', [ProfileController::class, 'updatePicture'])->name('update-profile');
Route::post('/profile-update-password{id}', [ProfileController::class, 'updatePassword'])->name('update-password');
Route::post('/profile-update-information{id}', [ProfileController::class, 'updateInformation'])->name('update-information');
Route::post('/profile{id}', [ProfileController::class, 'deleteAccount'])->name('delete-account');



Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
Route::get('/admin-profile', [AdminController::class, 'profile'])->name('admin-profile');

Route::post('/admin-register', [AdminProfileController::class, 'store'])->name('admin-register');

Route::get('/admin-login', [AdminLoginController::class, 'index'])->name('admin-login');
Route::post('/admin-login', [AdminLoginController::class, 'login']);

Route::get('/admin-show-article{id}', [adminShowAllController::class, 'show'])->name('admin-show-article');
Route::post('/admin-accept-article{id}', [adminShowAllController::class, 'accepted'])->name('admin-accept-article');
Route::post('/admin-decline-article{id}', [adminShowAllController::class, 'declined'])->name('admin-decline-article');


Route::get('/admin-delete-article{id}', [adminShowDeleteController::class, 'showDelete'])->name('admin-delete-article');
Route::post('/admin-delete-article{id}', [adminShowDeleteController::class, 'delete']);


Route::post('/admin-logout', [adminLogoutController::class, 'logout'])->name('admin-logout');


