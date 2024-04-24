<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_RegisterController extends Controller
{
    public function admin_register(){
        return view('admin/pages/register');
    }

    public function post_admin_register(){
        return view('admin/pages/register');
    }
}
