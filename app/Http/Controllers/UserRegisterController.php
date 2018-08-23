<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    //

    public function postRegister(Request $request){
        $name = $request->input('name');
        echo 'Name:'.$name;
        echo '<br>';

        $username = $request->input('username');
        echo 'Username:'.$username;
        echo '<br>';

        $password = $request->input('password');
        echo 'Password:'.$password;
        echo '<br>';

    }
}
