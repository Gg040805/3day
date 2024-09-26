<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\productController;
use App\Models\product;
use App\Models\User;
use App\Http\Controllers\userController;
use App\Http\Controllers\cartid;
use App\Models\cart;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [userController::class, 'went']);
Route::post('/register', [userController::class, 'regis'])->name('register.post');

Route::get('/login', [userController::class, 'next']);
Route::post('/login', [userController::class, 'login_form'])->name('login.post');

Route::get('/home', [productController::class, 'homepage']) -> name('home');
Route::get('/product/{id}', [productController::class, 'showpd'])->name('product.show');

Route::get('/cartlist', [cartController::class, 'cart_list']);
Route::post('/add_to_cart/{id}', [cartController::class, 'add_to_cart'])->name('add_to_cart');
Route::put('/checkout', [cartController::class, 'checkout'])->name('checkout');

?>