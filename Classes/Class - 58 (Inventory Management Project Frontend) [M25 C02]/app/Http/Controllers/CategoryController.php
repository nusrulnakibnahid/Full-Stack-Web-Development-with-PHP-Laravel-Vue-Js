<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    function CategoryPage(){
        return view('pages.dashboard.category-page');
    }

    function CategoryList(Request $request){
        $user_id=$request->header('user_id');
        return Category::where('user_id',$user_id)->get();
    }

    /*
    function CategoryCreate(Request $request){
        $user_id=$request->header('user_id');
        return Category::create([
            'name'=>$request->input('name'),
            'user_id'=>$user_id
        ]);
    }
    */

    public function CategoryCreate(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'fail',
                    'errors' => $validator->errors()
                ], 422);
            }

            // Get user ID from request header
            $user_id = $request->header('user_id');

            // Create category
            $category = Category::create([
                'name' => $request->input('name'),
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $category
            ], 201);

        } catch (Exception $e) {
            Log::error('Category creation failed: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    function CategoryDelete(Request $request){
        $category_id=$request->input('id');
        $user_id=$request->header('user_id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->delete();
    }


    function CategoryByID(Request $request){
        $category_id=$request->input('id');
        $user_id=$request->header('user_id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->first();
    }



    function CategoryUpdate(Request $request){
        $category_id=$request->input('id');
        $user_id=$request->header('user_id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->update([
            'name'=>$request->input('name'),
        ]);
    }
}
