<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubscriberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::post('/contact', [GuestController::class, 'contact_submit'])->name('contact.submit');
Route::get('/about', [GuestController::class, 'about_us'])->name('about');
Route::get('/blog', [GuestController::class, 'blog'])->name('blog');
Route::get('/blog_details', [GuestController::class, 'blog_details'])->name('blog_details');
Route::get('/service', [GuestController::class, 'service'])->name('service');
Route::get('/products', [GuestController::class, 'products'])->name('products');
Route::get('/product_details', [GuestController::class, 'product_details'])->name('product_details');
Route::get('/faqs', [GuestController::class, 'faqs'])->name('faqs');
Route::get('/quote/boiler', [GuestController::class, 'quote_boiler'])->name('quote_boiler');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::view('/subscribe', [SubscriberController::class, 'subscriber_form'])->name('subscribe.form');
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe.store');

// Optional confirm route if you do double opt-in:
Route::get('/subscribe/confirm/{token}', [SubscriberController::class, 'confirm'])->name('subscribe.confirm');

Route::get('/unsubscribe/{token}', [SubscriberController::class, 'unsubscribe'])->name('unsubscribe');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    // Admin Blog Routes
    Route::get('/blogs', [HomeController::class, 'blog_list'])->name('admin.blogs');
    Route::get('/blogs/create', [HomeController::class, 'blog_create'])->name('admin.blog.create');
    Route::post('/blogs/store', [HomeController::class, 'blog_store'])->name('admin.blog.store');
    Route::get('/blogs/edit/{id}', [HomeController::class, 'blog_edit'])->name('admin.blog.edit');
    Route::put('/blogs/update/{id}', [HomeController::class, 'blog_update'])->name('admin.blog.update');
    Route::get('/blogs/view/{id}', [HomeController::class, 'blog_view'])->name('admin.blog.view');
    Route::delete('/blogs/delete/{id}', [HomeController::class, 'blog_delete'])->name('admin.blog.delete');


    // Admin Blog Category Routes
    Route::get('/blog_categories', [BlogCategoryController::class, 'blog_category_list'])->name('admin.blog_categories');
    Route::get('/blog_categories/create', [BlogCategoryController::class, 'blog_category_create'])->name('admin.blog_category.create');
    Route::post('/blog_categories/store', [BlogCategoryController::class, 'blog_category_store'])->name('admin.blog_category.store');
    Route::get('/blog_categories/edit/{id}', [BlogCategoryController::class, 'blog_category_edit'])->name('admin.blog_category.edit');
    Route::put('/blog_categories/update/{id}', [BlogCategoryController::class, 'blog_category_update'])->name('admin.blog_category.update');
    Route::get('/blog_categories/view/{id}', [BlogCategoryController::class, 'blog_category_view'])->name('admin.blog_category.view');
    Route::delete('/blog_categories/delete/{id}', [BlogCategoryController::class, 'blog_category_delete'])->name('admin.blog_category.delete');


    // Admin Service Routes
    Route::get('/services', [ServiceController::class, 'service_list'])->name('admin.services');
    Route::get('/service/create', [ServiceController::class, 'service_create'])->name('admin.service.create');
    Route::post('/service/store', [ServiceController::class, 'service_store'])->name('admin.service.store');
    Route::get('/service/edit/{id}', [ServiceController::class, 'service_edit'])->name('admin.service.edit');
    Route::put('/service/update/{id}', [ServiceController::class, 'service_update'])->name('admin.service.update');
    Route::get('/service/view/{id}', [ServiceController::class, 'service_view'])->name('admin.service.view');
    Route::delete('/service/delete/{id}', [ServiceController::class, 'service_delete'])->name('admin.service.delete');


    Route::get('/products', [ProductController::class, 'product_list'])->name('admin.products');
    Route::get('/products/create', [ProductController::class, 'product_create'])->name('admin.product.create');
    Route::post('/products/store', [ProductController::class, 'product_store'])->name('admin.product.store');
    Route::get('/products/edit/{id}', [ProductController::class, 'product_edit'])->name('admin.product.edit');
    Route::put('/products/update/{id}', [ProductController::class, 'product_update'])->name('admin.product.update');
    Route::get('/products/view/{id}', [ProductController::class, 'product_view'])->name('admin.product.view');
    Route::delete('/products/delete/{id}', [ProductController::class, 'product_delete'])->name('admin.product.delete');
});
