<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage(){
        // $user = "Editor";
        // $page_name = "Home";
        // $cart = ["mango"]; 
        // $posts = [
        //     'This is post 1',
        //     'This is post 2',
        //     'This is post 3',
        // ];
        // return view('home', compact('page_name'));
        // return view('home', [
            //     'page_name' => $page_name,
            //     'user' => $user,
            //     'posts' => $posts,
            //     'cart' => $cart
            // ]);
            return view('pages.home');
    }

    public function aboutPage(){
        return view('pages.about');
    }
    public function contactPage(){
        return view('pages.contact');
    }
}
