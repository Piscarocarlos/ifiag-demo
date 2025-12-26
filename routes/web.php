<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AppController::class, 'accueil'])->name('accueil');

Route::get('about-toto', [AppController::class, 'about'])->name('about');


Route::get("/products", [ProductController::class, 'index
'])->name("products.list");

// categories route
Route::get('create/category', [CategoryController::class, 'show_category'])->name('category.create');
Route::post('/store/category', [CategoryController::class, 'store_category'])->name('category.store');
