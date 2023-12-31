<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Models\Cart;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/menus', [HomeController::class, 'showMenuList']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore']);

Route::get("/register", [AuthController::class, 'register'])->name('register');
Route::post("/register", [AuthController::class, 'registerStore']);
Route::post("/logout", [AuthController::class, 'logout']);

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('carts', [CartController::class, 'index']);
