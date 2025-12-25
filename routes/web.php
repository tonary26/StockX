<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Product\AddController as ProductAddController;
use App\Http\Controllers\Product\DeleteController as ProductDeleteController;
use App\Http\Controllers\Product\EditController as ProductEditController;
use App\Http\Controllers\Product\GetController as ProductGetController;
use App\Http\Controllers\Product\IndexController as ProductIndexController;
use App\Http\Controllers\Product\StoreController as ProductStoreController;
use App\Http\Controllers\Product\UpdateController as ProductUpdateController;

use App\Http\Controllers\Category\AddController as CategoryAddController;
use App\Http\Controllers\Category\StoreController as CategoryStoreController;

use App\Http\Controllers\Auth\Login\StoreController as LoginStoreController;
use App\Http\Controllers\Auth\Login\CreateController as LoginShowController;

use App\Http\Controllers\Auth\Register\CreateController as RegisterShowController;
use App\Http\Controllers\Auth\Register\StoreController as RegisterStoreController;

use App\Http\Controllers\Auth\Password\ShowForgotController as ShowForgotPasswordFormController;
use App\Http\Controllers\Auth\Password\SendResetLinkController as SendResetPasswordLinkController;

use App\Http\Controllers\Auth\Password\ShowResetFormController as ShowResetPasswordFormController;
use App\Http\Controllers\Auth\Password\ResetController as PasswordResetController;

use App\Http\Controllers\Auth\Logout\DestroyController;

use App\Http\Controllers\Basket\IndexController as BasketIndexController;
use App\Http\Controllers\Basket\StoreController as BasketStoreController;
use App\Http\Controllers\Basket\DeleteController as BasketDeleteController;
use App\Http\Controllers\Basket\increaseController as BasketIncreaseController;
use App\Http\Controllers\Basket\DecreaseController as BasketDecreaseController;


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


Route::prefix('category')->name('category.')->group(function () {
    Route::get('add', CategoryAddController::class)->name('add');
    Route::post('store', CategoryStoreController::class)->name('store');
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

    Route::prefix('password')->name('password.')->group(function () {
        Route::get('forgot', ShowForgotPasswordFormController::class)->name('request');
        Route::post('forgot', SendResetPasswordLinkController::class)->name('email');
    });

    Route::post('logout', DestroyController::class)->name('logout');
});


Route::prefix('password')->name('password.')->group(function () {
    Route::get('reset/{token}/', ShowResetPasswordFormController::class)->name('reset');
    Route::post('reset', PasswordResetController::class)->name('update');
});


Route::prefix('baskets')->name('baskets.')->group(function () {
    Route::get('index', BasketIndexController::class)->name('index');
    Route::post('/store/{product_id}/', BasketStoreController::class)->name('store');
    Route::delete('/delete/{basket}/', BasketDeleteController::class)->name('delete');
    Route::post('{basket}/increase', BasketIncreaseController::class)->name('increase');
    Route::post('{basket}/decrease', BasketDecreaseController::class)->name('decrease');
});