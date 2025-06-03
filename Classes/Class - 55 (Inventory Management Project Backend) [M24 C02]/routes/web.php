<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use Doctrine\Common\Lexer\Token;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;

// Backend
// User Routes
Route::post('/user-registration', [UserController::class, 'userRegistration']);
Route::post('/user-login', [UserController::class, 'userLogin']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/send-otp', [UserController::class, 'sendOTP']);
Route::post('/verify-otp', [UserController::class, 'verifyOTP']);
Route::post('/reset-password', [UserController::class, 'resetPassword'])->middleware(TokenVerificationMiddleware::class);


//Category API
Route::get('/category-list', [CategoryController::class, 'CategoryList'])->middleware(TokenVerificationMiddleware::class);
Route::post('/category-create', [CategoryController::class, 'CreateCategory'])->middleware(TokenVerificationMiddleware::class);
Route::post('/category-delete', [CategoryController::class, 'CategoryDelete'])->middleware(TokenVerificationMiddleware::class);
Route::post('/category-by-id', [CategoryController::class, 'CategoryByID'])->middleware(TokenVerificationMiddleware::class);
Route::post('/category-update', [CategoryController::class, 'CategoryUpdate'])->middleware(TokenVerificationMiddleware::class);

//Customer API
Route::post('/customer-create', [CustomerController::class, 'CutomerCreate'])->middleware(TokenVerificationMiddleware::class);
Route::get('/customer-list', [CustomerController::class, 'CustomerList'])->middleware(TokenVerificationMiddleware::class);
Route::post('/customer-delete', [CustomerController::class, 'CustomerDelete'])->middleware(TokenVerificationMiddleware::class);
Route::post('/customer-by-id', [CustomerController::class, 'CustomerByID'])->middleware(TokenVerificationMiddleware::class);
Route::post('/customer-update', [CustomerController::class, 'CustomerUpdate'])->middleware(TokenVerificationMiddleware::class);

//Product API
Route::post('/product-create', [ProductController::class, 'CreateProduct'])->middleware(TokenVerificationMiddleware::class);
Route::get('/product-list', [ProductController::class, 'ProductList'])->middleware(TokenVerificationMiddleware::class);
Route::post('/product-by-id', [ProductController::class, 'ProductByID'])->middleware(TokenVerificationMiddleware::class);
Route::post('/product-delete', [ProductController::class, 'ProductDelete'])->middleware(TokenVerificationMiddleware::class);
Route::post('/product-update', [ProductController::class, 'ProductUpdate'])->middleware(TokenVerificationMiddleware::class);

//Invoice API
Route::post('/invoice-create', [InvoiceController::class, 'InvoiceCreate'])->middleware(TokenVerificationMiddleware::class);
