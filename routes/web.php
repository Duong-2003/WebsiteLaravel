<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UsersController\ProfileController;
use App\Http\Controllers\UsersController\LoginController;
use App\Http\Controllers\UsersController\RegisterController;
use App\Http\Controllers\UsersController\UserController;
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
    // Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::middleware(['auth'])->group(function () {


        Route::get('/register', function () {
            $tittle = "Trang Quản Trị Admin";
            return view('AdminViews.register', compact('tittle'));
        })->name('register');

        Route::post('/register', [RegisterController::class, 'storeRegister'])->name('register.post');



        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'storeLogin'])->name('login.post');

        // Route::middleware(['auth']) -> group(function() {
        //     Route::prefix('admin')->group(function(){
        //         Route::get('/',[MainController::class,'main']) -> name('admin');
        //         Route::get('main',[MainController::class,'main']) ;


        Route::get('/profile', [ProfileController::class, 'showProfileFrom'])->name('profile');

        Route::post('/profile', [ProfileController::class, 'storeProfile'])->name('profile.post');

        // Route::get ('/admin',[MainController::class,'main']) ->name('admin');
        // Route::post ('/admin',[MainController::class,'main']) ->name('admin.post');


        Route::middleware(['auth'])->group(function () {


            Route::get('/admin', function () {
                $tittle = "Trang Quản Trị Admin";
                return view('AdminViews.main', compact('tittle'));
            })->name('admin');

            Route::post('/admin', [MainController::class, 'main'])->name('admin.post');
        });
    });
});
