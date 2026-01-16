<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AppController::class, 'accueil'])->name('accueil');

Route::get('about-toto', [AppController::class, 'about'])->name('about');


Route::get("/products", [ProductController::class, 'index
'])->name("products.list");

// categories route
Route::get('create/category', [CategoryController::class, 'show_category'])->name('category.create');
Route::post('/store/category', [CategoryController::class, 'store_category'])->name('category.store');
Route::get('/list/categories', [CategoryController::class, 'list_category'])->name('category.list');
Route::delete('delete/category/{id}', [CategoryController::class, 'delete_category'])->name('category.delete');


// articles route
Route::get('create/post', [PostController::class, 'show_post_create'])->name('post.create');
Route::post('store/post', [PostController::class, 'store_post'])->name('post.store');
Route::get('store/list', [PostController::class, 'list_post'])->name('post.list');
