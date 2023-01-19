<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');
    Route::get('/admin', [AuthController::class, 'admin_showLogin'])->name('admin_showLogin');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('login/admin', [AuthController::class, 'admin_login'])->name('admin_login');
});

Route::middleware(['auth'])->group(function () {
    //ホーム画面
    Route::get('home', function () {
        return view('home');
    })->name('home');
    Route::get('home/admin', function () {
        return view('admin_home');
    })->name('admin_home');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
