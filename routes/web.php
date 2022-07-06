<?php

use App\Http\Controllers\LogoutController;
use App\Http\Livewire\Admin\Auth\Login as AuthLogin;
use App\Http\Livewire\Admin\Dashboard as AdminDashboard;
use App\Http\Livewire\Admin\Product as AdminProduct;
use App\Http\Livewire\Admin\User;
use App\Http\Livewire\User\Auth\Login;
use App\Http\Livewire\User\Auth\Register;
use App\Http\Livewire\User\Dashboard;
use App\Http\Livewire\User\Product;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', Register::class)->name('users.registration');
    Route::get('/user/login', Login::class)->name('users.login');
});

Route::middleware(['auth', 'verify', 'status'])->group(function () {
    Route::get('/user/dashboard', Dashboard::class)->name('users.dashboard');
    Route::get('/user/product', Product::class)->name('users.product');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/logout', [LogoutController::class, 'index'])->name('users.logout');
});


Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin', AuthLogin::class)->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/product', AdminProduct::class)->name('admin.product');
    Route::get('/admin/user', User::class)->name('admin.user');
});
