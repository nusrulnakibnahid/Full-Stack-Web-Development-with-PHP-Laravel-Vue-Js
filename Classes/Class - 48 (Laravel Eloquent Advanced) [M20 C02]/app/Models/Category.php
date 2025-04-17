<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // public function product(){
    //     return $this->hasOne(Product::class);
    // }

    public function products(){
        return $this->hasMany(Product::class);
    }

}
