<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SobujTest extends Model
{
    protected $table = 'my_test_table';
    protected $primaryKey = 'id';
//    protected $incrementing = true;
//    protected $keyType = 'string';
    protected $keyType = 'string';
    protected $timestamp = false;
}
