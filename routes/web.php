<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [App\Http\Controllers\pageController::class, 'index']);
Route::resource('/blog', App\Http\Controllers\postController::class)->middleware('auth');
Route::resource('/comment', App\Http\Controllers\CommentController::class)->middleware('auth');





Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'login']);
