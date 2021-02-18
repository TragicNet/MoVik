<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return view('home');
    //return 123;
    //return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('submenu', function () {
    return view('submenu');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('account', function () {
    return view('account');
});

Route::get('customer_show', [CustomerController::class, 'show']);

Route::get('customer_delete/{id}', [CustomerController::class, 'destroy']);

Route::get('customer_create', [CustomerController::class, 'create']);

Route::post('customer_submit', [CustomerController::class, 'store']);

Route::get('customer_edit/{id}', [CustomerController::class, 'edit']);

Route::post('customer_update/{id}', [CustomerController::class, 'update'])->name('customer.update');
