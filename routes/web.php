<?php

use App\Livewire\Admin\Customer;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\LoginAdmin;
use App\Livewire\Admin\Project\Team;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Employee\Account;
use App\Livewire\Admin\Project\Division;
use App\Livewire\Admin\Employee\Position;

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
    Route::get('employee/position',Position::class)->name('admin.employee.position');
    Route::get('employee/account',Account::class)->name('admin.employee.account');

    Route::get('project/division',Division::class)->name('admin.project.division');
    Route::get('project/team',Team::class)->name('admin.project.team');
});
