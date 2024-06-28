<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        return view('user/pages/account/register', compact('categories', 'carts'));
    }



    public function post_register(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:15',
            'email' => 'required|string|email|min:9|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&_]/',
            ],
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
            'password.regex' => 'Mật khẩu phải bao gồm ít nhất một chữ hoa, một chữ thường, một số và một ký tự đặc biệt.',

        ];
        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // $password = $request->merge(['password' => Hash::make($request->password)]);
        $hashedPassword = Hash::make($request->password);
        $token = strtoupper(Str::random(10));
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $hashedPassword,
                'token' => $token,
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }


        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://mail-sender-api1.p.rapidapi.com/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'sendto' => $request->email,
                'name' => 'HavenBook',
                // 'replyTo' => 'no-reply@yourdomain.com',
                'ishtml' => 'false',
                'title' => 'Chào mừng bạn đến với HavenBook',
                'body' => 'Cảm ơn bạn đã đăng ký tài khoản tại HavenBook! Vui lòng nhấp vào đường link sau để hoàn tất quá trình đăng ký: ' . route('account_activation', ['token' => $token, 'name' => $request->name]),
            ]),
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "x-rapidapi-host: " . env('RAPIDAPI_HOST'),
                "x-rapidapi-key: " . env('RAPIDAPI_KEY')
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            Log::error("cURL Error #:" . $err);
        } else {
            Log::info("Email sent successfully: " . $response);
        }
        return redirect()->route('login')->with('Success_Regis', 'Đăng ký thành công! Hãy kiểm tra email để kích hoạt tài khoản.');
    }

    public function account_activication(Request $request)
    {
        $token = $request->token;
        $name = $request->name;
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::all();
        // Cập nhật status của user thành 1 (đã kích hoạt)
        $user = User::where('token', $token)->first();
        if ($user) {
            $user->status = 1;
            $user->save();
        }

        return view('user/pages/account/account_activation', compact('token', 'name', 'categories', 'carts'));
    }
}
