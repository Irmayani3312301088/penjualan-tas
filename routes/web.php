<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StripeController;

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

Route::resource('products', ProductController::class);
// Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/produk', [ProductsController::class, 'showProducts']);
Route::get('/cart', [ProductsController::class, 'cart'])->name('cart');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('/cart/update', [CartController::class, 'update'])->name('update_cart');
Route::delete('/cart/remove', [CartController::class, 'remove'])->name('remove_from_cart');

Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/list_product', [ListProductController::class, 'product']);
Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::post('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});

Route::get('payment', function(){
    return view('payment');
});

Route::get('detailproduct', function(){
    return view('detailproduct');
});

Route::get('/about', function(){
    return view('about');
});

