<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Customer\ProfileController as CustomerProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Administrator Routes
 */
Route::prefix('admin')->middleware(['auth', 'verified'])
    ->group(function() {

    Route::controller(DashboardController::class)->group(function () {

        Route::get('/dashboard', 'index')->name('admin.dashboard');

    });

    Route::controller(ProfileController::class)->group(function () {

        Route::get('/profile', 'index')->name('admin.profile');

    });

});

/**
 * Customer Routes
 */
Route::prefix('customer')->middleware(['auth', 'verified'])
    ->group(function() {

    Route::controller(CustomerDashboardController::class)->group(function () {

        Route::get('/dashboard', 'index')->name('customer.dashboard');

    });

    Route::controller(CustomerProfileController::class)->group(function () {

        Route::get('/profile', 'index')->name('customer.profile');

    });

});
require __DIR__.'/auth.php';
