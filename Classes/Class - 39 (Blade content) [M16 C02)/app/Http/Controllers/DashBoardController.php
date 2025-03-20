<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    function dashBoard()
    {
        $menuName = 'dashboardMenu';
        $pageName = 'dashBoard';
        return view('pages.dashBoard',['page'=>$pageName]);
    }
}
