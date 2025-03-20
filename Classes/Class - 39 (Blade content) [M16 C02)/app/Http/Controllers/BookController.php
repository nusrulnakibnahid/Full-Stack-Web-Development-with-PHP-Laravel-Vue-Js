<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function booksView()
    {
        $pageName = 'book';
        return view('pages.book',['page'=>$pageName]);
    }
}
