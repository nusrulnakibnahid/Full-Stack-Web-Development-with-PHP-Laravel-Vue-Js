<?php

use App\Http\Controllers\BatchSixController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/dataInsert',[ProductController::class,'dataInsert']);
Route::post('/dataInsertByCreate',[ProductController::class,'dataInsertByCreate']);
Route::post('/dataInsertByCreateReqAll',[ProductController::class,'dataInsertByCreateReqAll']);
Route::get('/dataInsertByInsert',[BatchSixController::class,'dataInsertByInsert']);


Route::post('/dataUpdate/{id}',[ProductController::class,'dataUpdate']);
Route::post('/updateUsingSave/{id}',[ProductController::class,'updateUsingSave']);

Route::delete('/deleteUsingFind/{id}',[ProductController::class,'deleteUsingFind']);
Route::delete('/deleteUsingDestroyByID/{id}',[ProductController::class,'deleteUsingDestroyByID']);
Route::delete('/deleteUsingDestroyByIDMultiple/{id}',[ProductController::class,'deleteUsingDestroyByIDMultiple']);

Route::get('/dataSelect',[ProductController::class,'dataSelect']);
