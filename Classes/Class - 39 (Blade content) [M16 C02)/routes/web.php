<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashBoard');
});

Route::get('/',[DashBoardController::class,'dashboard']);
Route::get('/authors',[AuthorController::class,'authorView']);
Route::get('/bookDepartment/books/view',[BookController::class,'booksView'])->name('booksView');
Route::get('/test',[testController::class,'testView']);
