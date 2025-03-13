<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function laravelResponse(){
//        return "Hello World";
//        return 100;
//        return null;
//        return true;
//        return ["A","B","C"];
//        return ["Name"=>"Sobuj","Address"=>"Rajshahi"];
//        return response()->json(["Name"=>"Sobuj","Address"=>"Rajshahi"]);
//        return  response('Header Set Test')->header('X-Header-Set-Test','Header Value')
//            ->header('X-Header-Set-Two','Sobuj');
//        return redirect('/');
//        return response()->file("cat.jpg");
//        return response()->download("cat.jpg");
//        return response()->file(public_path('image/cat.jpg'));
        //Set Cookie
        return response('Cookie Set')->cookie('user_session','12345',60);

    }

    function getCookie(Request $request){
        return response()->json(['cookie'=> $request->cookie('user_session')]);
    }

    function deleteCookie(Request $request){
        return response('Cookie Deleted')->withCookie('user_session');
    }

    function jsonResponse(){
        return response()->json([
            'status'=>'success',
            'message'=>'Hello World!',
            'data'=>[
                'id'=>1,
                'name'=>'John Doe'
            ]
        ]);
    }

    function statusCodeManu(){
        return response('Hello response',203);
    }

    function getRequestData(Request $request){
        return response()->json(['request'=>$request->all()]);
    }

    function getClentIP(Request $request){
        $myIP = $request->ip();

        return response()->json(['ip'=>$myIP]);
    }

    function returnViewTest(){
        return view('test');
    }
}
