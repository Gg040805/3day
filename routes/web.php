<?php

use App\Models\User;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [userController::class, 'went']);
Route::post('/register', [userController::class, 'regis'])->name('register.post');

Route::get('/login', [userController::class, 'next']);
Route::post('/login', [userController::class, 'login_form'])->name('login.post');
