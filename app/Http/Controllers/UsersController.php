<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;

class UsersController extends Controller
{
    //
    function viewLoad()
    {
        $data=['dhanashri','kalyan','mazumder'];
        return view('users',['users'=>$data]);
    }
}
