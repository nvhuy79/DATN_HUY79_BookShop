<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::all();
        return view('user/pages/register',compact('categories','carts'));
    }

    public function post_register(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:15',
            'email' => 'required|string|email|min:9|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];

        $message = [
            'name.required' => 'Hãy nhập họ và tên của bạn.',
            'name.min' => 'Họ và tên phải lớn hơn 3 ký tự.',
            'name.max' => 'Họ và tên  phải nhỏ hơn 15 ký tự.',
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
        try {
            User::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect()->route('login')->with('Success_Regis', 'Đăng ký thành vông! Gờ bạn có thể đăng nhập.');
    }
}
