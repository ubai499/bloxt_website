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
Route::get('/products', [GuestController::class, 'products'])->name('products');
Route::get('/faqs', [GuestController::class, 'faqs'])->name('faqs');
Route::get('/quote/boiler', [GuestController::class, 'quote_boiler'])->name('quote_boiler');
