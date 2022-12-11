<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KeywordManageController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RestaurantManageController;
use App\Http\Controllers\Admin\UserFeedbackController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Customer\NotificationController as CustomerNotificationController;
use App\Http\Controllers\Customer\ProfileController as CustomerProfileController;
use App\Http\Controllers\Customer\RestaurantManagementController;
use App\Http\Controllers\Frontend\AboutUsPageController;
use App\Http\Controllers\Frontend\ContactUsPageController;
use App\Http\Controllers\Frontend\FrontPageController;
use App\Http\Controllers\Frontend\RestaurantListeningPageController;
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
    return view('frontEnd.index');
})->name('welcome');

/**
 * Frontend Routes
 */
Route::prefix('frontend')->group(function () {

    Route::controller(FrontPageController::class)->group(function () {

        Route::get('/index', 'index')
        ->name('frontend.index.page');
    });

    Route::controller(AboutUsPageController::class)->group(function () {

        Route::get('/about', 'index')
        ->name('frontend.about.page');
    });

    Route::controller(ContactUsPageController::class)->group(function () {

        Route::get('/contact', 'index')
        ->name('frontend.contact.page');
    });

    Route::controller(RestaurantListeningPageController::class)->group(function () {

        Route::get('/restaurant-listening', 'index')
        ->name('frontend.restaurant-listening.page');
    });
});

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

    Route::controller(NotificationController::class)->group(function () {

        Route::get('/notifications', 'index')
        ->name('admin.notifications');

        Route::post('/notifications/mark', 'store')
        ->name('admin.notifications.mark');
    });

    Route::controller(AboutController::class)->group(function () {

        Route::get('/about', 'index')
        ->name('admin.about');

        Route::post('/about/add', 'store')
        ->name('admin.about.store');

        Route::post('/about/update', 'update')
        ->name('admin.about.update');

        Route::get('/about/destroy/{id}', 'destroy')
        ->name('admin.about.destroy');
    });

    Route::controller(ContactController::class)->group(function () {

        Route::get('/contact', 'index')
        ->name('admin.contact');

        Route::post('/contact/add', 'store')
        ->name('admin.contact.store');

        Route::put('/contact/update/{id}', 'update')
        ->name('admin.contact.update');

        Route::get('/contact/destroy/{id}', 'destroy')
        ->name('admin.contact.destroy');
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

    Route::controller(CustomerNotificationController::class)->group(function () {

        Route::get('/notifications', 'index')
        ->name('customer.notifications');
    });

});
require __DIR__.'/auth.php';
