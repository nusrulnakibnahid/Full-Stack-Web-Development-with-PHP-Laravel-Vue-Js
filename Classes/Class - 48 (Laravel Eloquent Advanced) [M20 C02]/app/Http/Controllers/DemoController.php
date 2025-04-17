<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        $products = Product::all();

        return $products;
    }

    public function show($id){
        $product = Product::find($id);

        return $product;
    }

    public function orderByName(){
    
        $products = Product::orderBy('name')->get();

        return $products;
    }

    public function orderByPrice(){
    
        // Price High to low
        // $products = Product::orderBy('price', 'desc')->get();

        // Price Low to High
        $products = Product::orderBy('price', 'asc')->get();

        return $products;
    }

    public function limit(){
    
        $products = Product::limit(3)->orderBy('price', 'asc')->get();

        return $products;
    }

    public function paginate(){
    
        $products = Product::paginate(2);
        // $products = Product::simplePaginate(2);

        return $products;
    }

    public function productCat(){

        // dd("check");
        // $products = Product::find(1);
        // $category = $products->category;

        $products = Product::with('category')->get();

        // foreach($products as $product){
        //     echo $product->category->name. "<br>";
        
        // }

        return $products;
    }


    public function catProduct(){
        $categories  = Category::with('products')->get();

        return $categories;
    }
}
