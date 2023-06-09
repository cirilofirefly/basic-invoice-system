<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('guest')->group(function() {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/register', 'auth.register')->name('register');
    Route::post('auth/login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('auth/register', [RegisterController::class, 'register'])->name('auth.register');
});

Route::middleware('auth')->group(function() {
    Route::get('auth/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::view('/', 'home')->name('home');
    Route::resource('invoices', InvoiceController::class);
});
