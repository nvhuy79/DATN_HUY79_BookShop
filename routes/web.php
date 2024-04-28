<?php

use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/admin_login', [AdminController::class, 'admin_login'])->name('admin_login');
Route::post('/admin_login', [AdminController::class, 'post_admin_login']);
Route::get('/admin_logout', [AdminController::class, 'logout'])->name('admin_logout');
Route::get('/admin_home', [AdminController::class, 'admin_home'])->name('admin_home');
Route::get('/admin_add', [AdminController::class, 'admin_add'])->name('admin_add');
Route::post('/admin_add', [AdminController::class, 'post_admin_add']);

