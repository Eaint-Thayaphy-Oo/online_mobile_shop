<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //direct home page
    public function home()
    {
        // dd("hello");
        return view('user.main.home');
    }
}
