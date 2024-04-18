<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function login(){
        return view('user/pages/login');
    }

    public function register(){
        return view('user/pages/register');
    }

    public function category(){
        return view('user/pages/category');
    }
}
