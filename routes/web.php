<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;


Route::get('/', [BlogController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);

Route::resource('/post', PostController::class);
Route::post('/post', [PostController::class, 'store'])->name('post.store');


Auth::routes();