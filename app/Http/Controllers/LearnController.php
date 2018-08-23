<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    //

    public function reqtest(Request $request){
        $name = $request->input('username');
        return $name;
    }
}
