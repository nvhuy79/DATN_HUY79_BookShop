<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartControllerTest;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    Route::post('/register', [RegisterController::class, 'post_register']);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

    Route::get('/profile', [AccountController::class, 'profile'])->name('profile')->middleware('auth');
    Route::post('/profile', [AccountController::class, 'post_profile'])->name('post_profile');

    Route::get('/change-pass', [AccountController::class, 'change_pass'])->name('change_pass');
    Route::post('/change-pass', [AccountController::class, 'post_change_pass'])->name('post_change_pass');

    Route::get('/forgot-pass', [AccountController::class, 'forgot_pass'])->name('forgot_pass');
    Route::post('/forgot-pass', [AccountController::class, 'post_forgot_pass']);

    Route::get('/reset-pass', [AccountController::class, 'reset_pass'])->name('reset_pass');
    Route::post('/reset-pass', [AccountController::class, 'post_reset_pass']);

    Route::get('/{slug}', [HomeController::class, 'detail_product'])->name('detail_product');
    


});

Route::prefix('/cart')->middleware('auth')->group(function () {
    Route::get('/index', [CartController::class, 'index'])->name('cart.index');
    Route::post('products/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/delete/{product}', [CartController::class, 'delete'])->name('cart.delete');
    Route::put('products/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/clear/{product}', [CartController::class, 'clear'])->name('cart.clear');
});


// ========================== ADMIN ============================
Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'admin_home'])->name('admin_home');
    Route::get('/login', [AdminController::class, 'admin_login'])->name('admin_login');
    Route::post('/login', [AdminController::class, 'post_admin_login']);
    Route::get('/add', [AdminController::class, 'admin_add'])->name('admin_add');
    Route::post('/add', [AdminController::class, 'post_admin_add']);
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');

    Route::resource('category', CategoryController::class)->middleware('admin.auth');
    Route::resource('product', ProductController::class)->middleware('admin.auth');
});
