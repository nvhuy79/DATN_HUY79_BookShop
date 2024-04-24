<?php

use App\Http\Controllers\Admin_LoginController;
use App\Http\Controllers\Admin_RegisterController;
use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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
Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/category', [CategoryController::class, 'category'])->name('category');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'post_login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'post_register']);

// ========================== ADMIN ============================

Route::get('/admin_register', [Admin_RegisterController::class, 'admin_register'])->name('admin_register');
Route::post('/admin_register', [Admin_RegisterController::class, 'post_admin_register']);
Route::get('/admin_login', [Admin_LoginController::class, 'admin_login'])->name('admin_login');
Route::post('/admin_login', [Admin_LoginController::class, 'post_admin_login']);
