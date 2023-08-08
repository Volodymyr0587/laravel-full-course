<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::redirect('/home', '/');


Route::get('/test', TestController::class);

// CRUD - Create, Read, Update, Delete
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::post('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

// Route::resource('posts', PostController::class);

// Route::resource('posts', PostController::class)->only([
//     'index', 'show'
// ]);


// Route::fallback повинен бути у самому кінці після всіх маршрутів
// Викликається, коли невірна адреса в браузері введена.

Route::fallback(function () {
    return 'Fallback';
});
