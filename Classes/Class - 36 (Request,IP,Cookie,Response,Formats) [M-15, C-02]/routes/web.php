<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//response
Route::get('/testResponse', [TestController::class, 'laravelResponse']);
Route::get('/getCookie', [TestController::class, 'getCookie']);
Route::get('/deleteCookie', [TestController::class, 'deleteCookie']);
Route::get('/jsonResponse', [TestController::class, 'jsonResponse']);
Route::get('/statusCodeManu', [TestController::class, 'statusCodeManu']);

//request
Route::post('/requestAll', [TestController::class, 'getRequestData']);
Route::post('/getClentIP', [TestController::class, 'getClentIP']);

//Return view
Route::get('/returnViewTest', [TestController::class, 'returnViewTest']);
