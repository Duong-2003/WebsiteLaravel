<?php




use App\Http\Controllers\AdminController\LoginController;
use App\Http\Controllers\AdminController\Products\ProductController;
use App\Http\Controllers\AdminController\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
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
    Route::post('/profile', [\App\Http\Controllers\AdminController\ProfileController::class, 'storeProfile'])->name('profile.post');

    // Route::get ('/admin',[MainController::class,'main']) ->name('admin');
    // Route::post ('/admin',[MainController::class,'main']) ->name('admin.post');


    Route::middleware(['auth'])->group(function () {


        Route::get('/admin', function () {
            $tittle = "Trang Quản Trị Admin";
            return view('AdminViews.main', compact('tittle'));
        })->name('admin');

        Route::post('/admin', [MainController::class, 'main'])->name('admin.post');
    });

    Route::get('/products', [ProductController::class, 'index'])->name('products');

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
