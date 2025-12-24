<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AppController::class, 'accueil'])->name('accueil');

Route::get('about-toto', [AppController::class, 'about'])->name('about');


Route::get("/products", [ProductController::class, 'index'])->name("products.list");

// another route
