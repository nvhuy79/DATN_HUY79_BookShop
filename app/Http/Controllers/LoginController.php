<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function login()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::all();
        return view('user/pages/login', compact('categories', 'carts'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('logout_success', 'Bạn đã đăng xuất!.');
    }

    public function post_login(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ];

        $message = [
            'email.required' => 'Hãy nhập email của bạn.',
            'email.email' => 'Nhập đúng định dạng email bao gồm @ và phần tử phía sau.',
            'email.max' => 'Email phải nhỏ hơn 55 ký tự.',
            'email.min' => 'Email phải lớn hơn 8 ký tự.',
            'password.required' => 'Hãy nhập mật khẩu của bạn.',
            'password.min' => 'Mật khẩu tối thiểu 8 ký tự.',

        ];
        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->status == 0) {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Tài khoản của bạn chưa được kích hoạt!');
            }
            return redirect()->route('home')->with('success', 'Đăng nhập thành công! Hy vọng bạn sẽ có những trải nhiệm tuyệt vời.');
        }
        return redirect()->back()->withInput()->with('error', 'Đăng nhập thất bại! Vui lòng kiểm tra lại email, mật khẩu.');
    }
}
