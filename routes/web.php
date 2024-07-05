<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShippingFeeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// ========================== USER ============================

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::get('/search', [HomeController::class, 'search'])->name('home_search');
    // Route::get('/category', [CategoryController::class, 'showCategory'])->name('category_show');


    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'post_login']);

    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::get('/account/activation/{token}', [RegisterController::class, 'account_activication'])->name('account_activation');
    Route::post('/register', [RegisterController::class, 'post_register']);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth.custom');

    Route::get('/profile', [AccountController::class, 'profile'])->name('profile')->middleware('auth.custom');
    Route::post('/profile', [AccountController::class, 'post_profile'])->name('post_profile');
    // Route::get('/view_order', [OrderController::class, 'view_order'])->name('view_order');
    Route::match(['get', 'post'], '/view_order', [OrderController::class, 'view_order'])->name('view_order');
    Route::get('/view_order_detail/{order_code}', [OrderController::class, 'view_order_detail'])->name('view_order_detail');


    Route::get('/change-pass', [AccountController::class, 'change_pass'])->name('change_pass');
    Route::post('/change-pass', [AccountController::class, 'post_change_pass'])->name('post_change_pass');

    Route::get('forgot-password', [AccountController::class, 'showForgotPasswordForm'])->name('password_request');
    Route::post('forgot-password', [AccountController::class, 'sendResetPasswordEmail'])->name('password_email');
    Route::get('reset-password/{token}', [AccountController::class, 'showResetPasswordForm'])->name('password_reset');
    Route::post('/reset-password', [AccountController::class, 'resetPassword'])->name('password_update');

    Route::get('/products/{slug}', [HomeController::class, 'detail_product'])->name('detail_product');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/confirmOrder', [CheckoutController::class, 'confirmOrder'])->name('confirmOrder');


    Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay_payment');
    Route::get('/vnpay_return', [PaymentController::class, 'vnpay_return'])->name('vnpay_return');

    Route::post('/delivery_payment', [PaymentController::class, 'delivery_payment'])->name('delivery_payment');


    Route::get('/featured_product', [HomeController::class, 'featured_product'])->name('featured_product');
    Route::get('/view_category/{id}', [HomeController::class, 'view_category'])->name('view_category');

    Route::get('/tag/{product_tags}', [ProductController::class, 'tag'])->name('tag');
    Route::get('blogs_view', [BlogController::class, 'blogs_view'])->name('blogs_view');

    // Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    // Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
});

Route::prefix('/cart')->middleware('auth.custom')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::get('/success', [CartController::class, 'success'])->name('cart.success');
    Route::post('products/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/delete/{product}', [CartController::class, 'delete'])->name('cart.delete');
    Route::put('products/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/clear/{product}', [CartController::class, 'clear'])->name('cart.clear');
    Route::post('check_discount', [CartController::class, 'check_discount'])->name('check_discount');
});


// ========================== ADMIN ============================
Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'admin_home'])->name('admin_home')->middleware('admin.auth');
    Route::get('/login', [AdminController::class, 'admin_login'])->name('admin_login');
    Route::post('/login', [AdminController::class, 'post_admin_login']);
    Route::get('/add', [AdminController::class, 'admin_add'])->name('admin_add')->middleware('admin.auth');
    Route::post('/add', [AdminController::class, 'post_admin_add']);
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');

    Route::get('/list_acc_admin', [AdminController::class, 'list_acc_admin'])->name('list_acc_admin')->middleware('admin.auth');
    Route::get('/edit_acc_admin/{id}', [AdminController::class, 'edit_acc_admin'])->name('edit_acc_admin')->middleware('admin.auth');
    Route::get('/change_pass_admin/{id}', [AdminController::class, 'change_pass_admin'])->name('change_pass_admin')->middleware('admin.auth');
    Route::put('/change_pass_admin/{id}', [AdminController::class, 'post_change_pass_admin'])->name('post_change_pass_admin')->middleware('admin.auth');

    Route::put('/update_acc_admin/{id}', [AdminController::class, 'update_acc_admin'])->name('update_acc_admin')->middleware('admin.auth');
    Route::delete('/delete_acc_admin/{id}', [AdminController::class, 'delete_acc_admin'])->name('delete_acc_admin');
    Route::get('/list_acc_admin_search', [AdminController::class, 'list_acc_admin_search'])->name('list_acc_admin_search');

    Route::resource('user_acc', UserController::class)->middleware('admin.auth');
    Route::get('/user_search', [UserController::class, 'user_search'])->name('user_search');

    Route::resource('category', CategoryController::class)->middleware('admin.auth');
    Route::get('categories/search', [CategoryController::class, 'search'])->name('category.search');

    Route::resource('product', ProductController::class)->middleware('admin.auth');
    Route::get('products/search', [ProductController::class, 'search'])->name('product.search');
    // Thống kê
    Route::get('/inventory', [ProductController::class, 'inventory'])->name('inventory')->middleware('admin.auth');
    // Route::get('/revenue', [ProductController::class, 'revenue'])->name('revenue');
    // Route::post('/post_revenue', [ProductController::class, 'post_revenue'])->name('post_revenue');
    Route::match(['get', 'post'], '/admin/revenue', [ProductController::class, 'revenue'])->name('revenue');




    Route::resource('shippingfee', ShippingFeeController::class)->middleware('admin.auth');
    Route::get('shippingfee/search', [ShippingFeeController::class, 'search'])->name('shippingfee.search');
    // Route::post('/calculate-shippingfee', [ShippingFeeController::class, 'calculateShippingFee'])->name('calculate_shippingfee');

    Route::resource('discount', DiscountController::class);
    Route::get('discounts/search', [DiscountController::class, 'search'])->name('discount.search');

    Route::resource('slide', SlideController::class)->middleware('admin.auth');
    Route::get('slides/search', [SlideController::class, 'search'])->name('slide.search');


    Route::get('/manage_order', [OrderController::class, 'manage_order'])->name('manage_order');
    Route::get('/manage-order/search', [OrderController::class, 'search'])->name('manage_order_search');
    Route::get('/print_order/{order_code}', [OrderController::class, 'print_order'])->name('print_order');


    Route::get('/detail_order/{order_code}', [OrderController::class, 'detail_order'])->name('detail_order');
    Route::get('/delete/{detail_order}', [OrderController::class, 'delete_order'])->name('delete_order');

    Route::resource('blogs', BlogController::class);
});
