<?php

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::resource('products', ProductController::class);
