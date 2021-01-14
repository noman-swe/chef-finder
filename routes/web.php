<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ChefController;

use App\Http\Controllers\Website\WebsiteController;

// Website Routes
Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/blog/{id}/show', [WebsiteController::class, 'blogSingle'])->name('blog.show');
Route::get('/chef', [WebsiteController::class, 'chef'])->name('chef');
Route::get('/chef/{id}/show', [WebsiteController::class, 'chefSingle'])->name('chef.show');
Route::get('/chef/register', [WebsiteController::class, 'chefReg'])->name('chef.reg');


Route::get('/denied', [WebsiteController::class, 'denied'])->name('denied');

// Auth Routes
Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// User Routes
Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth', 'userPermission']], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

// Admin Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'adminPermission']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('blog', BlogController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('chef', ChefController::class);
});
