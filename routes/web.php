<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

Route::get('/',[PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about']);
//posts endpoint
Route::get('/posts',[PostsController::class, 'index']);