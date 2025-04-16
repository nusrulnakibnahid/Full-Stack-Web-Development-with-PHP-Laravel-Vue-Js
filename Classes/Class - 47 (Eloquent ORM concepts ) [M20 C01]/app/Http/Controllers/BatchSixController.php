<?php

namespace App\Http\Controllers;

use App\Models\BatchSixStudentList;
use Illuminate\Http\Request;

class BatchSixController extends Controller
{
    public function getStudent(){
        return BatchSixStudentList::all();
    }

    public function dataInsertByInsert(){
        BatchSixStudentList::insert([
            ['name'=>'Anirban Roy','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Asaduzzaman','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Mizan','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Saad','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
