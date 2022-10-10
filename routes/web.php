<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/posts',[PostController::class, 'index'])->name('posts.index');


Route::get('/', function () {
    return view('welcome');
});
