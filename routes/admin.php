<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

// Admin
Route::prefix('admin')->middleware(['auth', 'active', 'admin'])->group(function () {
    Route::redirect('/', '/admin/posts')->name('admin');

    // CRUD - Create, Read, Update, Delete
    Route::get('/posts', [PostController::class, 'index'])->name('admin.posts');

    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');

    Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');

    Route::get('posts/{post}', [PostController::class, 'show'])->whereNumber('post')->name('admin.posts.show');

    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');

    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');

    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');

    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');
});
