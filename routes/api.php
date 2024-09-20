<?php

use App\Models\Product;

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products/{category_id?}',[APIController::class, 'products'])->name("api.products");
Route::get('/categories',[APIController::class, 'categories'])->name("api.categories");