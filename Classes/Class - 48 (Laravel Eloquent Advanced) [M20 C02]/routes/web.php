<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [DemoController::class, 'index']);
Route::get('/products/order-by-name', [DemoController::class, 'orderByName']);
Route::get('/products/order-by-price', [DemoController::class, 'orderByPrice']);
Route::get('/products/limit', [DemoController::class, 'limit']);
Route::get('/products/paginate', [DemoController::class, 'paginate']);
Route::get('/products/product-cat', [DemoController::class, 'productCat']);
Route::get('/products/cat-product', [DemoController::class, 'catProduct']);
Route::get('/products/{id}', [DemoController::class, 'show']);