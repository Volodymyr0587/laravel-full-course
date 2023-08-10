<?php

use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Posts\CommentController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/')->name('home.redirect');


Route::get('/test', TestController::class)->middleware('token:secret', 'throttle:10')->name('test');

// Registration and Login
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

// Confirm login by email
// Route::get('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');
// Route::post('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');



//Blog
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


// Nested routes
Route::resource('posts/{post}/comments', CommentController::class)->except([
    'index',
    'show'
]);



// Route::resource('posts', PostController::class);

// Route::resource('posts', PostController::class)->only([
//     'index', 'show'
// ]);


// Route::fallback повинен бути у самому кінці після всіх маршрутів
// Викликається, коли невірна адреса в браузері введена.

// Route::fallback(function () {
//     return 'Fallback';
// });
