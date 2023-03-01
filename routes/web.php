<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------hom------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/about', view: 'about')->name('about');
Route::view('/contact', view: 'contact')->name('contact');

Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');



