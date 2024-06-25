<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShippingFeeController;

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

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'post_login']);

    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::get('/account/activation/{token}', [RegisterController::class, 'account_activication'])->name('account_activation');
    Route::post('/register', [RegisterController::class, 'post_register']);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth.custom');

    Route::get('/profile', [AccountController::class, 'profile'])->name('profile')->middleware('auth.custom');
    Route::post('/profile', [AccountController::class, 'post_profile'])->name('post_profile');

    Route::get('/change-pass', [AccountController::class, 'change_pass'])->name('change_pass');
    Route::post('/change-pass', [AccountController::class, 'post_change_pass'])->name('post_change_pass');

    Route::get('/forgot-pass', [AccountController::class, 'forgot_pass'])->name('forgot_pass');
    Route::post('/forgot-pass', [AccountController::class, 'post_forgot_pass']);

    Route::get('/reset-pass', [AccountController::class, 'reset_pass'])->name('reset_pass');
    Route::post('/reset-pass', [AccountController::class, 'post_reset_pass']);

    Route::get('/products/{slug}', [HomeController::class, 'detail_product'])->name('detail_product');

    // Route::resource('checkout', CheckoutController::class);
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/confirmOrder', [CheckoutController::class, 'confirmOrder'])->name('confirmOrder');


    // Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay_payment');
    Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay_payment');
    Route::get('/vnpay_return', [PaymentController::class, 'vnpay_return'])->name('vnpay_return');
});

Route::prefix('/cart')->middleware('auth.custom')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
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

    Route::get('/list_acc', [AdminController::class, 'list_acc'])->name('list_acc')->middleware('admin.auth');
    Route::get('/list_acc/search', [AdminController::class, 'list_acc_search'])->name('list_acc.search');

    Route::resource('category', CategoryController::class)->middleware('admin.auth');
    Route::get('categories/search', [CategoryController::class, 'search'])->name('category.search');

    Route::resource('product', ProductController::class)->middleware('admin.auth');
    Route::get('products/search', [ProductController::class, 'search'])->name('product.search');

    Route::resource('shippingfee', ShippingFeeController::class)->middleware('admin.auth');
    Route::get('shippingfee/search', [ShippingFeeController::class, 'search'])->name('shippingfee.search');
    // Route::post('/calculate-shippingfee', [ShippingFeeController::class, 'calculateShippingFee'])->name('calculate_shippingfee');

    Route::resource('discount', DiscountController::class);
    Route::get('discounts/search', [DiscountController::class, 'search'])->name('discount.search');

    Route::resource('slide', SlideController::class)->middleware('admin.auth');
    Route::get('slides/search', [SlideController::class, 'search'])->name('slide.search');
});
