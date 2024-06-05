<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);

Route::resource('products', ProductController::class);
Route::get('products/search', [ProductController::class, 'search'])->name('products.search');


Route::get('/costumer', function () {
    return view('costumer.index');
});