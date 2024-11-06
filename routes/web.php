<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// POST
Route::post('/post', [PostController::class, 'store'])->name('post.create');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

// AUTH
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
