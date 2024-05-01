<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function change_profile()
    {
        return view('user/pages/home');
    }
}
