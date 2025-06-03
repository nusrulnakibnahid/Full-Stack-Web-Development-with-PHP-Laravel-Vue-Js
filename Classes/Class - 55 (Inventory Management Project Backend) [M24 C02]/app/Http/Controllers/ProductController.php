<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function CreateProduct(Request $request)
    {
        $user_id = $request->header('user_id');

        //Prepare and store file
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $user_id.'_'.time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('uploads',$fileName,'public');
        }

        //Save to Database

        return Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'unit' => $request->input('unit'),
            'img_url' => $filePath,
            'category_id' => $request->input('category_id'),
            'user_id' => $user_id
        ]);

    }


    function ProductList(Request $request)
    {
        $user_id = $request->header('user_id');
        return Product::where('user_id',$user_id)->get();

    }

    function ProductByID(Request $request)
    {
        $user_id = $request->header('user_id');
        $product_id = $request->input('id');
        return Product::where('id',$product_id)->where('user_id',$user_id)->first();
    }

    function ProductDelete(Request $request)
    {
        $user_id = $request->header('user_id');
        $product_id = $request->input('id');

        //Delete Image
        if ($request->input('image_path') && Storage::disk('public')->exists($request->input('image_path'))) {
            Storage::disk('public')->delete($request->input('image_path'));
        }

        //Detele data from database

        return Product::where('id',$product_id)->where('user_id',$user_id)->delete();
    }

    function ProductUpdate(Request $request)
    {
        $user_id = $request->header('user_id');
        $product_id = $request->input('id');
        $oldData = Product::where('id',$product_id)->where('user_id',$user_id)->first();

        //Prepare and store file
        if ($request->hasFile('image')){
            //Store new Image
            $file = $request->file('image');
            $fileName = $user_id.'_'.time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('uploads',$fileName,'public');

            //Delete old Image

            //Delete Image
            Storage::disk('public')->delete($oldData->img_url);

            return Product::where('id',$product_id)->where('user_id',$user_id)->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'unit' => $request->input('unit'),
                'img_url' => $filePath,
                'category_id' => $request->input('category_id'),
            ]);
        }else{
            return Product::where('id',$product_id)->where('user_id',$user_id)->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'unit' => $request->input('unit'),
                'category_id' => $request->input('category_id'),
            ]);
        }
    }
}
