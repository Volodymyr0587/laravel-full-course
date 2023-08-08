<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Posts\CommentController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::redirect('/home', '/');


Route::get('/test', TestController::class);

// Registration and Login
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
// Confirm login by email
// Route::get('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');
// Route::post('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');




// User
Route::prefix('user')->group(function () {
    // CRUD - Create, Read, Update, Delete
    Route::get('/posts', [PostController::class, 'index'])->name('user.posts');

    Route::get('/posts/create', [PostController::class, 'create'])->name('user.posts.create');

    Route::post('/posts', [PostController::class, 'store'])->name('user.posts.store');

    Route::get('posts/{post}', [PostController::class, 'show'])->whereNumber('post')->name('user.posts.show');

    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');

    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');

    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('user.posts.destroy');

    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('user.posts.like');
});

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

Route::fallback(function () {
    return 'Fallback';
});
