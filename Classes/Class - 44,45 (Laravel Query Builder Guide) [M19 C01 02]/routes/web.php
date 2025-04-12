<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books',[TestController::class,'books']);
Route::get('/booksWithOrWhere',[TestController::class,'booksWithOrWhere']);
Route::get('/booksWithWhereBetween',[TestController::class,'booksWithWhereBetween']);
Route::get('/booksWithWhereIn',[TestController::class,'booksWithWhereIn']);
Route::get('/customersWithWhereNull',[TestController::class,'customersWithWhereNull']);
Route::get('/booksSum',[TestController::class,'booksSum']);
Route::get('/authors',[TestController::class,'authors']);

//Class 02
Route::get('/customerData',[OrderController::class,'customerData']);
Route::get('/customerDataLeftJoin',[OrderController::class,'customerDataLeftJoin']);
Route::get('/customerDataRightJoin',[OrderController::class,'customerDataRightJoin']);
Route::get('/customerDataCrossJoin',[OrderController::class,'customerDataCrossJoin']);
Route::get('/getOrders',[OrderController::class,'getOrders']);
Route::get('/getOrderSecondWay',[OrderController::class,'getOrderSecondWay']);
