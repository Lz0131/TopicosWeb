<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AdminEmployeesController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [SiteController::class,'index']) -> name('home');
Route::get('/products/{category_id?}', [SiteController::class,'products']) ->name('products');
Route::get('/product-detail/{id}', [SiteController::class,'product_detail']) ->name('product_detail');
Route::get('/productBycategory', [SiteController::class,'productBycategory']) ->name('productBycategory');
Route::get('/cart-page', [SiteController::class,'cart']) -> name('cart_page');
Route::get('/checkout', [SiteController::class,'checkout']) ->name('checkout');
//Route::get('/contact', [SiteController::class,'contact']) ->name('contact');
Route::get('/login', [SiteController::class,'login']) ->name('login');
Route::get('/my-account', [SiteController::class,'my_account'])->name('my_account');
Route::get('/wishlist-page', [SiteController::class,'wishlist']) ->name('wishlist_page');
Route::get('/admin/products', [AdminProductsController::class, 'index'])->name('admin.products');
Route::get('/admin/employees', [AdminEmployeesController::class, 'index'])->name('admin.employees');
// clase 09/09/2024 Contact
Route::resource('contact', ContactController::class);
// practica 1
Route::resource('review', ReviewController::class);


Route::get('/profile/{username}', [SiteController::class,'profile']);
/*
Route::get('/work', [SiteController::class,'work'])  -> name('work');
Route::get('/about', [SiteController::class,'about'])  -> name('about');
Route::get('/services', [SiteController::class,'services'])  -> name('services');
Route::get('/blog', [SiteController::class,'blog'])  -> name('blog');

Route::get('/greeting', function () {
    return 'Hello World';
}); */

/*
Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

Route::get('/user/{name?}', function (string $name = 'John') {
    return 'Hola '.$name;
});*/

