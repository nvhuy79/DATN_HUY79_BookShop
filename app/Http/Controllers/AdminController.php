<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display list view pages.
     */
    public function admin_login()
    {
        return view('admin/pages/login');
    }
    public function admin_add()
    {
        return view('admin/pages/admin_add');
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
        $email = $request->email;
        $password = md5($request->password);

        $result = DB::table('admins')->where('email', $email)->where('password', $password)->first();
        if ($result == true) {
            return redirect()->route('admin_home');
        } else {
            return redirect()->back()->with('error', 'Đăng nhập thất bại. Vui lòng kiểm tra lại email và mật khẩu.');
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
