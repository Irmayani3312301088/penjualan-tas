<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListProductSController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/Home', [HomeController::class, 'home']);