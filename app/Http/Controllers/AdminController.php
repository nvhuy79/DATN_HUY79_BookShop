<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminController extends Controller
{
    public function admin_login()
    {
        return view('admin/pages/login');
    }

    // public function adminlogout()
    // {
    //     Auth::logout();
    //     return redirect()->back();
    // }

    public function admin_home()
    {
        return view('admin/pages/home');
    }
    public function post_admin_login(Request $request)
    {
        // $email = $request->email;
        // $password = $request->password;
        // $hashedPassword = Hash::make($password);
        // if (Hash::check($password, $hashedPassword)) {
        //     return redirect()->route('admin_home');
        // } else {
        //      return redirect()->back()->with('error', 'Đăng nhập thất bại. Vui lòng kiểm tra lại email và mật khẩu.');
        // }

        $email = $request->email;
        $password = md5($request->password);

        $result = DB::table('admins')->where('email',$email)->where('password',$password)->first();
        if ($result== true) {
            return redirect()->route('admin_home');
        } else {
            return redirect()->back()->with('error', 'Đăng nhập thất bại. Vui lòng kiểm tra lại email và mật khẩu.');
        }
        
        }
}
