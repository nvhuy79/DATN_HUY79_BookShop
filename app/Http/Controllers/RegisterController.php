<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('user/pages/register');
    }

    public function post_register(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:55',
            'email' => 'required|string|email|min:9|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];

        $message = [
            'name.required' => 'Hãy nhập tên của bạn.',
            'name.min' => 'Tên phải lớn hơn 3 ký tự.',
            'name.max' => 'Tên phải nhỏ hơn 55 ký tự.',
            'email.required' => 'Hãy nhập email của bạn.',
            'email.email' => 'Nhập đúng định dạng email bao gồm @ và phần tử phía sau.',
            'email.max' => 'Email phải nhỏ hơn 55 ký tự.',
            'email.min' => 'Email phải lớn hơn 8 ký tự.',
            'email.unique' => 'Email đã tổn tại.',
            'password.required' => 'Hãy nhập mật khẩu của bạn.',
            'password.min' => 'Mật khẩu tối thiểu 8 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',

        ];
        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $request->merge(['password' => Hash::make($request->password)]);
        // Hash::make($request->password);
        try {
            User::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect() -> route('login');
    }
}
