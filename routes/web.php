<?php





use App\Http\Controllers\AdminController\Products\ProductController;


use App\Http\Controllers\AdminController\Users\ForgotPasswordController;
use App\Http\Controllers\AdminController\Users\LoginController;
use App\Http\Controllers\AdminController\Users\ProfileController;
use App\Http\Controllers\AdminController\Users\RegisterController;
use App\Http\Controllers\AdminController\Users\ResetPasswordController;


use App\Http\Controllers\AdminController\MainController;
use App\Http\Controllers\WebsiteController\LoginwebController;
use App\Http\Controllers\WebsiteController\RegisterwebController;
use App\Http\Controllers\WebsiteController\WebsiteController;
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

// Route::get('/website', function () {
//     return view('AdminViews.index');
// });


// ____________________________________Route Admin_________________________________________________
Route::prefix('users')->group(function () {
    // Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::middleware(['auth'])->get('/register', function () {
        return view('AdminViews.register');
    })->name('register');
    Route::post('/register', [RegisterController::class, 'storeRegister'])->name('register.post');



    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'storeLogin'])->name('login.post');


    Route::middleware(['auth'])->get('/profile', function () {
        return view('AdminViews.profile');
    })->name('profile');
    // Route::get('/profile', [ProfileController::class, 'showProfileFrom'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'storeProfile'])->name('profile.post');

    // Route::get ('/admin',[MainController::class,'main']) ->name('admin');
    // Route::post ('/admin',[MainController::class,'main']) ->name('admin.post');


    Route::middleware(['auth'])->group(function () {


        Route::get('/admin', function () {
            $tittle = "Trang Quản Trị Admin";
            return view('AdminViews.home', compact('tittle'));
        })->name('admin');



        Route::post('/admin', [MainController::class, 'main'])->name('admin.post');
        Route::get('/admin/create', [MainController::class, 'createAdmin'])->name('admin.create');

        Route::get('/admin/create/{id}', [MainController::class, 'editAdmin'])->name('admin.edit');
        Route::post('/admin/update/{id}', [MainController::class, 'updateAdmin'])->name('admin.update');
        Route::post('/admin/destroy/{id}', [MainController::class, 'destroyAdmin'])->name('admin.destroy');
    });
    Route::middleware(['auth'])->get('/products', function () {
        return view('WebsiteViews.www.productweb');
    })->name('products');
    // Route::get('/products', [ProductController::class, 'index'])->name('products');
    // Route::post('/products', [ProductController::class, 'index'])->name('products.post');
});


// Route::middleware(['auth', 'role:admin'])->group(function () {
//     // Các route chỉ dành cho vai trò "admin"
//     // ...
// });

// Route::middleware(['auth', 'role:user'])->group(function () {
//     // Các route chỉ dành cho vai trò "user"
//     // ...
// });

// Route::get('/product', [ProductController::class, 'index'])->name('product1');


// ____________________________________Route Website_________________________________________________
Route::get('/website', [WebsiteController::class, 'index'])->name('website');

// Route::post('/login', [LoginController::class, 'storeLogin'])->name('login.post');


    Route::get('/registerweb', [RegisterwebController::class, 'showRegisterWebForm'])->name('registerweb');
    Route::post('/registerweb', [RegisterwebController::class, 'storeRegisterweb'])->name('registerweb.post');



    Route::get('/loginweb', [LoginwebController::class, 'showLoginWebForm'])->name('loginweb');
    Route::post('/loginweb', [LoginwebController::class, 'storeLoginWeb'])->name('loginweb.post');


// Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


