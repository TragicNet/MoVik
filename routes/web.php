<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('home');
    //return 123;
    //return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('menu', function () {
    return view('menu')->with('items', app(FoodItemController::class)->getFoodItems());
});

Route::get('submenu', function () {
    return view('submenu');
});

Route::get('detail', function () {
    return view('detail');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('account', [UserController::class, 'getOrders']);
});

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('food_index', [FoodItemController::class, 'index']);

    Route::get('food_delete/{id}', [FoodItemController::class, 'destroy']);

    Route::get('food_create', [FoodItemController::class, 'create']);

    Route::get('food_edit/{id}', [FoodItemController::class, 'edit']);

    Route::post('food_submit', [FoodItemController::class, 'store']);

    Route::post('food_update/{id}', [FoodItemController::class, 'update'])->name('food_update');
});

Route::get('food_order/{id}', [FoodItemController::class, 'order']);

// Add auth routes and disable default login, logout and register
Auth::routes(['login' => false, 'logout' => false, 'register' => false]);

// Create custom routes for login, logout and register
Route::post('login', [LoginController::class, 'authenticate']);

Route::post('logout', [LoginController::class, 'logout']);

Route::post('register', [RegisterController::class, 'store']);
