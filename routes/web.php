<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::get('/about', [GuestController::class, 'about_us'])->name('about');
Route::get('/blog', [GuestController::class, 'blog'])->name('blog');
Route::get('/service', [GuestController::class, 'service'])->name('service');
