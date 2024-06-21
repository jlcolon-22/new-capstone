<?php

use App\Livewire\Admin\Customer;
use App\Livewire\Admin\Dashboard;

use App\Livewire\Auth\LoginAdmin;
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


Route::prefix('admin')->group(function() {
    // Routes within this group will have the 'admin' prefix
    Route::get('auth/login', LoginAdmin::class)->name('admin.login');
    Route::get('dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('customer', Customer::class)->name('admin.customer');
});
