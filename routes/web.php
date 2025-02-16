<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"cart",'middleware' => 'auth'],function () {
    Route::get('/', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/change', [App\Http\Controllers\CartController::class, 'change'])->name('cart.change');
    Route::delete('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
});
Auth::routes();


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home.index');
Route::get('/catalog/', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalog.index');

