<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    function books()
    {
        //SELECT * FROM `books`;

//        $books = DB::table('books')->select('book_id','title','price')->get();

//        $books = DB::table('books')->first();

//        $books = DB::table('books')->where('price','30.00')->first();
        $books = DB::table('books')->where('author_id',1)
        ->where('title','Book Title 1')->get();
        return response()->json($books);
    }

    function booksWithOrWhere(){
        $books = DB::table('books')->where('author_id',3)
            ->where('price','19.99')->get();
        return response()->json($books);
    }

    function booksWithWhereBetween(){
//        $books = DB::table('books')->whereBetween('price',[30,100])->get();
        $books = DB::table('books')->whereBetween('created_at',['2024-12-31','2025-01-15'])->get();
        return response()->json($books);
    }

    function booksWithWhereIn(){
        $books = DB::table('books')->whereIn('price',['19.99','100.00'])->get();
        return response()->json($books);
    }

    function customersWithWhereNull(){
//        $customers = DB::table('customers')->whereNull('phone')->get();
        $customers = DB::table('customers')->whereNotNull('phone')->get();
        return response()->json($customers);
    }

    function booksSum(){
//        $books = DB::table('books')->count();
        $books = DB::table('books')->sum('stock_quantity');
        return response()->json($books);
    }

    function authors(){
//        $authors = DB::table('authors')->get();

        $authors = DB::connection('mysql2')->table('authors')->get();
        return response()->json($authors);
    }
}
