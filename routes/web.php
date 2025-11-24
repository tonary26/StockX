<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Product\AddController as ProductAddController;
use App\Http\Controllers\Product\DeleteController as ProductDeleteController;
use App\Http\Controllers\Product\EditController as ProductEditController;
use App\Http\Controllers\Product\GetController as ProductGetController;
use App\Http\Controllers\Product\IndexController as ProductIndexController;
use App\Http\Controllers\Product\StoreController as ProductStoreController;
use App\Http\Controllers\Product\UpdateController as ProductUpdateController;

use App\Http\Controllers\Auth\Login\StoreController as LoginStoreController;
use App\Http\Controllers\Auth\Login\CreateController as LoginShowController;

use App\Http\Controllers\Auth\Register\CreateController as RegisterShowController;
use App\Http\Controllers\Auth\Register\StoreController as RegisterStoreController;

use App\Http\Controllers\Auth\Logout\DestroyController;


Route::get('/', ProductIndexController::class)->name('index');


Route::prefix('products')->name('product.')->group(function () {
    Route::get('/', ProductIndexController::class)->name('index');

    Route::get('/add', ProductAddController::class)->name('add');
    Route::post('/', ProductStoreController::class)->name('store');

    Route::get('/{product}', ProductGetController::class)->name('get');
    Route::get('/{product}/edit', ProductEditController::class)->name('edit');
    Route::patch('/{product}', ProductUpdateController::class)->name('update');
    Route::delete('/{product}', ProductDeleteController::class)->name('delete');
});


Route::prefix('auth')->name('auth.')->group(function() {
    Route::prefix('register')->name('register.')->group(function () {
        Route::get('/', RegisterShowController::class)->name('show');
        Route::post('/', RegisterStoreController::class)->name('store');
    });

    Route::prefix('login')->name('login.')->group(function () {
        Route::get('/', LoginShowController::class)->name('show');
        Route::post('/', LoginStoreController::class)->name('store');
    });

    Route::post('logout', DestroyController::class)->name('logout');
});
