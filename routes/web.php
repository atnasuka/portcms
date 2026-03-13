<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/book-meeting', [BookingController::class, 'create'])->name('booking.create');
Route::post('/book-meeting', [BookingController::class, 'store'])->name('booking.store');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');