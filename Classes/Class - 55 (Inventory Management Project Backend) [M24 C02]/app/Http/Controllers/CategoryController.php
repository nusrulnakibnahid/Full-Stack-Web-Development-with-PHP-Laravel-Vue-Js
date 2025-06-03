<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function CategoryList(Request $request)
    {
        $user_id = $request->header('user_id');
        return Category::where('user_id',$user_id)->get();
    }

    function CreateCategory(Request $request)
    {
        $user_id = $request->header('user_id');
        return Category::create([
            'name' => $request->input('name'),
            'user_id' => $user_id
        ]);
    }

    function CategoryDelete(Request $request)
    {
        $user_id = $request->header('user_id');
        $cat_id =  $request->input('id');
        return Category::where('id',$cat_id)->where('user_id',$user_id)->delete();
    }

    function CategoryByID(Request $request)
    {
        $user_id = $request->header('user_id');
        $cat_id =  $request->input('id');
        return Category::where('id',$cat_id)->where('user_id',$user_id)->first();
    }

    function CategoryUpdate(Request $request)
    {
        $user_id = $request->header('user_id');
        $cat_id =  $request->input('id');
        return Category::where('id',$cat_id)->where('user_id',$user_id)->update([
            'name'=>$request->input('name'),
        ]);
    }
}
