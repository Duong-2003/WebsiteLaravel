<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('users')->group(function () {
    // Đăng ký người dùng
    Route::post('/register', [UserController::class, 'register'])->name('users.register');

    // Đăng nhập người dùng
    Route::post('/login', [UserController::class, 'login'])->name('users.login');

    // Đăng xuất người dùng
    Route::post('/logout', [UserController::class, 'logout'])->name('users.logout');

    // Xem thông tin người dùng đã đăng nhập
    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');

    // Cập nhật thông tin người dùng đã đăng nhập
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('users.update_profile');
});
