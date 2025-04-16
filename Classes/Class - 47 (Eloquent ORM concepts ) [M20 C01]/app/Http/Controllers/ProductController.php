<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SobujTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProductByQuery(){
        $products = DB::table('products')->get();
        return $products;
    }

    public function getProductByModel(){
        $result = Product::all();
        return $result;
    }

    public function getFromSobujTest(){
        $result = SobujTest::all();
        return $result;
    }

    public function dataInsert(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return response()->json(['message' => 'Product added successfully', 'data' => $product]);
    }

    public function dataInsertByCreate(Request $request){

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return response()->json(['message' => 'Product added successfully', 'data' => $product]);
    }

    public function dataInsertByCreateReqAll(Request $request){

        $product = Product::create($request->all());

        return response()->json(['message' => 'Product added successfully', 'data' => $product]);
    }

    public function dataUpdate(Request $request,$id){
        Product::where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return response()->json(['message' => 'Product updated successfully']);

    }

    public function updateUsingSave(Request $request,$id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return response()->json(['message' => 'Product updated successfully']);


    }

    public function deleteUsingFind($id){
        $product = Product::find($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);

    }

    public function deleteUsingDestroyByID($id){
        Product::destroy($id);
        return response()->json(['message' => 'Product deleted successfully']);

    }

    public function deleteUsingDestroyByIDMultiple($id)
    {
        $ids = explode(",", $id); // turns "1,12" into ['1', '12']
        Product::destroy($ids);   // ✅ use the array here

        return response()->json(['message' => 'Product(s) deleted successfully']);
    }

    public function dataSelect(){
//        $products = Product::all();
//        $products = Product::where('name','Test3')->where()->get();
//        $products = Product::where('name','Test3')->orWhere('name','Test4')->get();

//        $products = Product::whereColumn('price','>','pruchase_price')->get();

//        $products = Product::find(3);
//        $products->increment('pruchase_price',50);
//        $products->decrement('pruchase_price',50);

//        $products = Product::where('id',3)->first();

//        $products = Product::select('id','name')->get();

        $products = Product::max('price');
        $products = Product::sum('price');
        $products = Product::avg('price');

        return $products;

    }






}
