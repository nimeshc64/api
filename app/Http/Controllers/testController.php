<?php

namespace App\Http\Controllers;

use App\User;

class testController extends Controller
{
    function test()
    {
       // User::create()
        return view('Home/index');
    }
}