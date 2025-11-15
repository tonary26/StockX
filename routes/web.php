<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\IndexController as ProductIndexController;
use App\Http\Controllers\Product\AddController as ProductAddController;
use App\Http\Controllers\Product\StoreController as ProductStoreController;


Route::get('/', ProductIndexController::class)->name('index');

Route::prefix('/products')->group(function () {
    Route::get('/', ProductIndexController::class)->name('product.index');
    Route::get('/add', ProductAddController::class)->name('product.add');
    Route::post('/store', ProductStoreController::class)->name('product.store');
});
