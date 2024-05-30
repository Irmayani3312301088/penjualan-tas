<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PropunController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\DaspenController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LaporanController;


Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama) {
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);

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

Route::resource('products', ProductController::class);
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/Home', [HomeController::class, 'home']);
Route::get('/list_product', [ListProductController::class, 'product']);
Route::get('dashboard', function(){
    return view('dashboard');
});

Route::get('login', function(){
    return view('login');
});

Route::get('register', function(){
    return view('register');
});

Route::get('propun', function(){
    return view('propun');
});

Route::get('payment', function(){
    return view('payment');
});

Route::get('cart', function(){
    return view('cart');
});

Route::get('detailproduct', function(){
    return view('detailproduct');
});

Route::get('/about', function(){
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/produk', function(){
    return view('produk');
});

Route::get('/daspen', function(){
    return view('daspen');
});

Route::get('/laporan', function(){
    return view('laporan');
});

