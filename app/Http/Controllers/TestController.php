<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    function test()
    {
        $User = User::find(1);

        return view('welcome',['user' => $User]);
    }
}
