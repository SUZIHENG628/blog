<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StuInsertController extends Controller
{
    //
    public function insertform(){
        return view('stu_create');
    }

    public function insert(Request $request){
        $name = $request->input('stu_name');
        $age = $request->input('stu_age',0);
        DB::insert('insert into student (name,age) values (?,?)',['$name',$age]);
        echo 'Record inserted successfully';
        echo '<a href="/insert">Click here</a>to go back.';
    }
}
