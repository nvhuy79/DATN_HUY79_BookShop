<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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

    public function change_inf()
    {

        if (Auth::check()) {
            return view('user/pages/change_inf');
        }
        return redirect()->route('login');
    }

    public function post_change_inf(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|string|email|max:255',
            'current_pwd' => 'required|string|min:8',
            'new_pwd' => 'required|string|min:8',
        ];

        $messages = [
            'name.required' => 'Hãy nhập họ và tên của bạn.',
            'name.min' => 'Họ và tên phải lớn hơn 3 ký tự.',
            'name.max' => 'Họ và tên  phải nhỏ hơn 40 ký tự.',
            'email.required' => 'Hãy nhập email của bạn.',
            'email.email' => 'Nhập đúng định dạng email bao gồm @ và phần tử phía sau.',
            'email.max' => 'Email phải nhỏ hơn 255 ký tự.',
            'email.min' => 'Email phải lớn hơn 8 ký tự.',
            'current_pwd.required' => 'Hãy nhập mật khẩu hiện tại của bạn.',
            'current_pwd.min' => 'Mật khẩu hiện tại tối thiểu 8 ký tự.',
            'new_pwd.required' => 'Hãy nhập mật khẩu mới của bạn.',
            'new_pwd.min' => 'Mật khẩu mới tối thiểu 8 ký tự.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->current_pwd])){
            
            $user = Auth::user();
            $user->name = $request->name;
            $user->password = Hash::make($request->new_pwd);
            $user->save();

            return redirect()->route('home')->with('success', 'Lưu thông tin thành công!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Mật khẩu hiện tại không chính xác. Vui lòng thử lại.');
        }
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
