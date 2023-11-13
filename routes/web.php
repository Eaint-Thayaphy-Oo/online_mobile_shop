<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User\UserController;

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

Route::middleware('auth')->group(function () {
    //dashboard
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    //admin
    //category
    Route::group(['prefix' => 'category', 'middleware' => 'admin_auth'], function () {
        Route::get('list', [CategoryController::class, 'list'])->name('category#list');
    });

    //user
    //home
    // Route::group(['prefix' => 'user', 'middleware' => 'user_auth'], function () {
    //     Route::get('/homePage', [UserController::class, 'home'])->name('user#home');
    // });
    Route::group(['prefix' => 'user', 'middleware' => 'user_auth'], function () {
        Route::get('/homePage', [UserController::class, 'home'])->name('user#home');
    });
});

//login,register
Route::middleware(['admin_auth'])->group(function () {
    Route::redirect('/', 'loginPage');
    Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
    Route::get('registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');
});
