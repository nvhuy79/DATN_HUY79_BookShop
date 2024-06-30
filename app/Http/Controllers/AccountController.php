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

class AccountController extends Controller
{
    public function profile()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::all();
        return view('user/pages/account/profile', compact('categories', 'carts'));
    }

    public function post_profile(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:17',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&_]/',
            ],
        ];

        $messages = [
            'name.required' => 'Hãy nhập họ và tên của bạn.',
            'name.min' => 'Họ và tên phải lớn hơn 3 ký tự.',
            'name.max' => 'Họ và tên  phải nhỏ hơn 17 ký tự.',
            'password.required' => 'Hãy nhập mật khẩu của bạn.',
            'password.min' => 'Mật khẩu tối thiểu 8 ký tự.',
            'password.regex' => 'Mật khẩu phải bao gồm ít nhất một chữ hoa, một chữ thường, một số và một ký tự đặc biệt.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = Auth::user();
            $user->name = $request->name;
            $user->save();

            return redirect()->route('home')->with('success', 'Đổi tên thành công!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Mật khẩu hiện tại không chính xác. Vui lòng thử lại.');
        }
    }

    public function change_pass()
    {

        if (Auth::check()) {
            return view('user/pages/account/change_pass');
        }
        return redirect()->route('login');
    }

    public function post_change_pass(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|max:255',
            'current_pwd' => 'required|string|min:8',
            'new_pwd' => [
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

        $messages = [
            'email.required' => 'Hãy nhập email của bạn.',
            'email.email' => 'Nhập đúng định dạng email bao gồm @ và phần tử phía sau.',
            'email.max' => 'Email phải nhỏ hơn 255 ký tự.',
            'email.min' => 'Email phải lớn hơn 8 ký tự.',
            'current_pwd.required' => 'Hãy nhập mật khẩu hiện tại của bạn.',
            'current_pwd.min' => 'Mật khẩu hiện tại tối thiểu 8 ký tự.',
            'new_pwd.required' => 'Hãy nhập mật khẩu của bạn.',
            'new_pwd.min' => 'Mật khẩu tối thiểu 8 ký tự.',
            'new_pwd.confirmed' => 'Xác nhận mật khẩu không khớp.',
            'new_pwd.regex' => 'Mật khẩu phải bao gồm ít nhất một chữ hoa, một chữ thường, một số và một ký tự đặc biệt.',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->current_pwd])) {

            $user = Auth::user();
            $user->password = Hash::make($request->new_pwd);
            $user->save();

            return redirect()->route('home')->with('success', 'Lưu thông tin thành công!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Mật khẩu hiện tại không chính xác. Vui lòng thử lại.');
        }
    }
    public function showForgotPasswordForm()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::all();
        return view('user/pages/account/forgot_password', compact('categories', 'carts'));
    }

    public function sendResetPasswordEmail(Request $request)

    {
        $rules = [
            'email' => 'required|string|email|min:9|max:255|exists:users,email',
        ];

        $message = [
            'email.required' => 'Hãy nhập email của bạn.',
            'email.email' => 'Nhập đúng định dạng email bao gồm @ và phần tử phía sau.',
            'email.max' => 'Email phải nhỏ hơn 255 ký tự.',
            'email.min' => 'Email phải lớn hơn 8 ký tự.',
            'email.exists' => 'Email chưa được kích hoạt để sử dụng tính năng.',

        ];
        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $token = strtoupper(Str::random(10));
        $user = User::where('email', $request->email)->first();
        $user->token = $token;
        $user->save();

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
                'ishtml' => 'false',
                'title' => 'Đặt lại mật khẩu',
                'body' => 'Vui lòng nhấp vào đường link sau để đặt lại mật khẩu của bạn: ' . route('password_reset', ['token' => $token]),
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

        return redirect()->route('login')->with('Success_Regis', 'Chúng tôi đã gửi liên kết đặt lại mật khẩu đến email của bạn!');
    }
    public function showResetPasswordForm($token)
    {
        $categories = Category::all();
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::all();
        return view('user.pages.account.reset_password', compact('token', 'categories', 'carts'));
    }

    public function resetPassword(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'email.required' => 'Hãy nhập email của bạn.',
            'email.email' => 'Email không hợp lệ.',
            'email.exists' => 'Email này không tồn tại trong hệ thống.',
            'password.required' => 'Hãy nhập mật khẩu mới của bạn.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.'
        ]);

        $token = $request->token;
        $email = $request->email;
        $hashedPassword = Hash::make($request->password);
        $user = User::where('email', $email)->where('token', $token)->first();
        if ($user) {
            $user->password = $hashedPassword;
            $user->token = null;
            $user->save();
        }

        return redirect()->route('login')->with('Success_Regis', 'Cập nhật mật khẩu thành công!');
    }
}
