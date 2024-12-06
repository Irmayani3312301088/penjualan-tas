<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


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

Route::post('/produk/update', [ProdukController::class, 'update'])->name('produk.update');
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');

// Route::get('/produk', [ProductController::class, 'index'])->name('product.index');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

Route::get('/', [ProdukController::class, 'index']);
Route::get('cart', [ProdukController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProdukController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProdukController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProdukController::class, 'remove'])->name('remove_from_cart');

Route::get('/home', [ProductController::class, 'index']);


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
    Route::get('dashboard/pembeli', function () {
        return view('home');
    })->name('dashboard.pembeli');

    Route::get('dashboard/penjual', [ProductController::class, 'index'])->name('dashboard.penjual');


});

Route::resource('products', ProductController::class);

Route::get('/about', function(){
    return view('about');
});
Route::get('/product', [ProdukController::class, 'produk']);

Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');



Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout.form');
Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/checkout/failure', [CheckoutController::class, 'checkoutFailure'])->name('checkout.failure');


