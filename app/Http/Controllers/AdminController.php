<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display list view pages.
     */


    public function admin_home()
    {
        $products = Product::with('category')->paginate(8);
        return view('admin/pages/product/index', compact('products'));
    }

    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('logout_success', 'Bạn đã đăng xuất!.');
    }

    public function admin_login()
    {
        return view('admin/pages/login');
    }
    public function post_admin_login(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|max:255',
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

        $message = [
            'email.required' => 'Hãy nhập email của bạn.',
            'email.email' => 'Nhập đúng định dạng email bao gồm @ và phần tử phía sau.',
            'email.max' => 'Email phải nhỏ hơn 55 ký tự.',
            'email.min' => 'Email phải lớn hơn 8 ký tự.',
            'password.required' => 'Hãy nhập mật khẩu của bạn.',
            'password.min' => 'Mật khẩu tối thiểu 8 ký tự.',
            'password.regex' => 'Mật khẩu phải bao gồm ít nhất một chữ hoa, một chữ thường, một số và một ký tự đặc biệt.',

        ];
        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin_home')->with('login_success', 'Đăng nhập thành công!');
        }
        return redirect()->back()->withInput()->with('error', 'Đăng nhập thất bại. Vui lòng kiểm tra lại email, mật khẩu.');
    }
    /**
     * Demo
     */

    public function admin_add()
    {
        return view('admin/pages/admin_add');
    }

    public function post_admin_add(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:25',
            'email' => 'required|string|email|min:9|max:255|unique:admins',
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
            'name.max' => 'Họ và tên  phải nhỏ hơn 25 ký tự.',
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

        $request->merge(['password' => Hash::make($request->password)]);
        try {
            Admin::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect()->route('list_acc')->with('success', 'Thêm quản trị viên thành công.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function list_acc()
    {
        $admins = Admin::paginate(8);
        return view('admin/pages/list_acc', compact('admins'));
    }

    /**
     * Display the specified resource.
     */
    public function list_acc_search(Request $request)
    {
        $query = $request->input('query');

        // Tìm kiếm sản phẩm theo tiêu đề hoặc mô tả
        $admins = Admin::where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->paginate(8);

        return view('admin.pages.list_acc', compact('admins'));
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
