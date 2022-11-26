<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KeywordManageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RestaurantManageController;
use App\Http\Controllers\Admin\UserFeedbackController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Customer\ProfileController as CustomerProfileController;
use App\Http\Controllers\Customer\RestaurantManagementController;
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
})->name('welcome');

/**
 * Administrator Routes
 */
Route::prefix('admin')->middleware(['auth', 'verified', 'isAdmin'])
    ->group(function() {

    Route::controller(DashboardController::class)->group(function () {

        Route::get('/dashboard', 'index')
        ->name('admin.dashboard');

    });

    Route::controller(ProfileController::class)->group(function () {

        Route::get('/profile', 'index')
        ->name('admin.profile');

        Route::put('/profile/update', 'update')
        ->name('admin.profile.update');

        Route::put('/password/reset', 'resetPassword')
        ->name('admin.password.reset');
    });

    Route::controller(UserManageController::class)->group(function () {

        Route::get('/users/manage', 'index')
        ->name('admin.users.manage');

        Route::get('/users/delete/{id}', 'destroy')
        ->name('admin.users.destroy');

    });

    Route::controller(KeywordManageController::class)->group(function () {

        Route::get('/keywords/management', 'index')
        ->name('admin.keyword.management');

        Route::post('/keywords/management/add', 'store')
        ->name('admin.keyword.management.store');

        Route::get('/keywords/management/destroy/{id}', 'destroy')
        ->name('admin.keyword.management.destroy');

    });

    Route::controller(RestaurantManageController::class)->group(function () {

        Route::get('/restaurant/management', 'index')
        ->name('admin.restaurant.management');

        Route::post('/restaurant/management/add', 'store')
        ->name('admin.restaurant.management.store');

        Route::get('/restaurant/management/destroy/{id}', 'destroy')
        ->name('admin.restaurant.management.destroy');

    });

    Route::controller(UserFeedbackController::class)->group(function () {

        Route::get('/users/feedback', 'index')
        ->name('admin.users.feedback');

        Route::get('/users/feedback/destroy/{id}', 'destroy')
        ->name('admin.users.feedback.destroy');
    });

});

/**
 * Customer Routes
 */
Route::prefix('customer')->middleware(['auth', 'verified', 'isCustomer'])
    ->group(function() {

    Route::controller(CustomerDashboardController::class)->group(function () {

        Route::get('/dashboard', 'index')->name('customer.dashboard');

    });

    Route::controller(CustomerProfileController::class)->group(function () {

        Route::get('/profile', 'index')
        ->name('customer.profile');

        Route::put('/profile/update', 'update')
        ->name('customer.profile.update');

        Route::put('/password/reset', 'resetPassword')
        ->name('customer.password.reset');
    });

    Route::controller(RestaurantManagementController::class)->group(function () {

        Route::get('/restaurant/management/feedback', 'index')
        ->name('customer.restaurant.management.feedback');

        Route::get('/restaurant/management/feedback/destroy/{id}', 'destroy')
        ->name('customer.restaurant.management.feedback.destroy');

    });

});
require __DIR__.'/auth.php';
