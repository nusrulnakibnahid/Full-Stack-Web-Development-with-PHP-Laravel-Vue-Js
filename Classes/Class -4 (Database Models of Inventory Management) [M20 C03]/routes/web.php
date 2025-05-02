<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\error;
use function Laravel\Prompts\warning;

Route::get('/', function () {
    // Add a value to session
    // Session::put('name', 'John');
    // Session::put('age', 30);
    // Session::put('email', 'FVw3K@example.com');

    // Get a value from session
    // $name = Session::get('name');
    // $age = Session::get('age');
    // $email = Session::get('email');

    // Delete a value from session
    // Session::forget('age');

    // Delete multiple values from session
    // Session::forget(['name', 'email']);

    // Delete all values from session
    // Session::flush();
    // return $email;
});


Route::view('/home', 'home');

Route::get('/create-post', function(){
    // logic to create a post

    // Log::error("Post couldn't be created");
    Log::warning("Post couldn't be created");
    Log::info("Post couldn't be created");
    Log::debug("Post couldn't be created");
    Session::flash('status', 'Post created successfully');
    return redirect('/home');
});