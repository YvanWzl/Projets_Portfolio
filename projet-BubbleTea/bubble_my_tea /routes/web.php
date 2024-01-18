<?php

use App\http\Controllers\AuthController;
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

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signupPost'])->name('signupPost');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');

Route::get('/profil', function () {
    return view('user_profile');
});

Route::get('/order', function () {
    return view('user_order');
});
Route::get('/', function () {
    return view('products');
});

Route::get('/commande', function () {
    return view('commande');
});

Route::get('/panier', function () {
    return view('panier');
});
Route::get('/admin', function () {
    return view('admin');
});
