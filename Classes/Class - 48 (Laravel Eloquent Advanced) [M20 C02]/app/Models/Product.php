<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'price', 'category_id'];

    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
