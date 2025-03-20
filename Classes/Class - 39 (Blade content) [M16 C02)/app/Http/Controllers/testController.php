<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    function testView()
    {
        return view('test');
    }
}
