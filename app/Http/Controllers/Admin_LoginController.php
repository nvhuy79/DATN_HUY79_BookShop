<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_LoginController extends Controller
{
    public function admin_login(){
        return view('admin/pages/login');
    }
}
