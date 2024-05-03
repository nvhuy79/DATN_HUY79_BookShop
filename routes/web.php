<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/', [LoginController::class, 'home'])->name('home');
Route::prefix('user')->group(function () {
    // Route::get('/home', [LoginController::class, 'home'])->name('home');
    Route::get('/category', [CategoryController::class, 'category'])->name('category');

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'post_login']);

    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'post_register']);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
    Route::post('/profile', [AccountController::class, 'post_profile']);

    Route::get('/change-inf', [AccountController::class, 'change_inf'])->name('change_inf');
    Route::post('/change-inf', [AccountController::class, 'post_change_inf']);

    Route::get('/forgot-pass', [AccountController::class, 'forgot_pass'])->name('forgot_pass');
    Route::post('/forgot-pass', [AccountController::class, 'post_forgot_pass']);

    Route::get('/reset-pass', [AccountController::class, 'reset_pass'])->name('reset_pass');
    Route::post('/reset-pass', [AccountController::class, 'post_reset_pass']);
});




// ========================== ADMIN ============================
Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'admin_home'])->name('admin_home');
    Route::get('/login', [AdminController::class, 'admin_login'])->name('admin_login');
    Route::post('/login', [AdminController::class, 'post_admin_login']);
    Route::get('/add', [AdminController::class, 'admin_add'])->name('admin_add');
    Route::post('/add', [AdminController::class, 'post_admin_add']);
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');
});
