<?php

use App\Http\Controllers\BatchSixController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getProductByQuery',[ProductController::class,'getProductByQuery']);
Route::get('/getProductByModel',[ProductController::class,'getProductByModel']);
Route::get('/getFromSobujTest',[ProductController::class,'getFromSobujTest']);

Route::get('/getStudent',[BatchSixController::class,'getStudent']);
Route::post('/dataInsert',[ProductController::class,'dataInsert']);

