<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    function authorView()
    {
        $pageName = 'authorPage';
        return view('pages.author',['page'=>$pageName]);
    }
}
