<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'homePage']);
Route::get('/about', [SiteController::class, 'aboutPage']);
Route::get('/contact', [SiteController::class, 'contactPage']);