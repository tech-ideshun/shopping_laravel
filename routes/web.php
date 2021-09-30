<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

// customer
Route::get('/', function () {
    return redirect('/shoptop');
});

// 管理
Route::get('/managetop', [ProductController::class,'index'])->name('product.list');
// 

// customer
Route::get('/shoptop', [CustomerController::class,'index'])->name('shop.home');

// 管理
Route::get('/shopping/new', [ProductController::class,'category'])->name('shopping.new');

// 管理
Route::post('/shopping', [ProductController::class,'save'])->name('shopping.save');

// 管理
Route::get('/shop/item', [CustomerController::class,'item'])->name('item.list');

// customer
Route::get('/shop/{id}', [CustomerController::class,'show'])->name('shop.list');

// 管理
Route::get('/shopping/edit/{id}', [ProductController::class,'edit'])->name('product.edit');

// 管理
Route::post('shopping/update/{id}', [ProductController::class,'update'])->name('product.update');

// 管理
Route::get('/shopping/{id}', [ProductController::class,'show'])->name('product.detail');

// 管理
Route::delete('/shopping/{id}', [ProductController::class,'destroy'])->name('product.destroy');

Auth::routes();

// 管理
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
