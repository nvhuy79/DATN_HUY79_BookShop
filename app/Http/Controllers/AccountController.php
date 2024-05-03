<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // public function profile()
    // {
    //     return view('user/pages/profile');
    // }

    // public function post_profile()
    // {
    //     return view('user/pages/home');
    // }

    public function change_pass()
    {
        return view('user/pages/change_pass');
    }

    public function post_change_pass()
    {
        return view('user/pages/change_pass');
    }
    public function forgot_pass()
    {
        return view('user/pages/home');
    }

    public function post_forgot_pass()
    {
        return view('user/pages/home');
    }
    public function reset_pass()
    {
        return view('user/pages/home');
    }

    public function post_reset_pass()
    {
        return view('user/pages/home');
    }

    
}
