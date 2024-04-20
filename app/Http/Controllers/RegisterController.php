<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register()
    {
        return view('user/pages/register');
    }

    public function post_register(Request $request)
    {
        // dd($request->all());
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];

        $message = [
            'name.required' => 'Tên chỉ được chứa các ký tự chữ cái và không quá 255 ký tự.!',
        ];
        $validator = Validator::make($request->all(), $rules,$message);

        // Kiểm tra xem validation có thành công hay không
        if ($validator->fails()) {
            // Nếu có lỗi, redirect trở lại form đăng ký với thông báo lỗi và dữ liệu đã nhập trước đó
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    }
}
