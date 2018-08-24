<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }


    public function show(User $user)
    {
        return view('user.show',compact('user'));
    }

//    public function test()
//    {
//        dd(1);
//    }
    public function getUsers()
    {
        $users = User::all();
        return $users;
    }




}
