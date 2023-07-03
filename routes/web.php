<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KeywordManageController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\NewsLetterSubscribersController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RestaurantManageController as AdminRestaurantManageController;
use App\Http\Controllers\Admin\UserFeedbackController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Admin\UserQueryController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Customer\NotificationController as CustomerNotificationController;
use App\Http\Controllers\Customer\ProfileController as CustomerProfileController;
use App\Http\Controllers\Customer\RestaurantManagementController;
use App\Http\Controllers\Frontend\AboutUsPageController;
use App\Http\Controllers\Frontend\ContactUsPageController;
use App\Http\Controllers\Frontend\FrontPageController;
use App\Http\Controllers\Frontend\RestaurantFeedbackController;
use App\Http\Controllers\Frontend\RestaurantListeningPageController;
use App\Http\Controllers\Frontend\SingularRestaurantController;
use App\Http\Controllers\Restaurant\DashboardController as RestaurantDashboardController;
use App\Http\Controllers\Restaurant\ProfileController as RestaurantProfileController;
use App\Http\Controllers\Restaurant\RestaurantManageController;
use App\Http\Controllers\Restaurant\RestaurantNotificationController;
use App\Http\Controllers\Restaurant\UsersFeedbackController;
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
Route::prefix('MyReview')->group(function () {

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

        Route::post('/contact/send', 'store')->middleware(['auth', 'isUser'])
        ->name('frontend.contact.store');
    });

    Route::controller(RestaurantListeningPageController::class)->group(function () {

        Route::get('/restaurant-listening', 'index')
        ->name('frontend.restaurant-listening.page');

        Route::post('/restaurant-listening/search-restaurants-by-category', 'store')
        ->name('frontend.restaurant-listening.search');

        Route::post('/restaurant-listening/search-restaurants-by-name', 'searchByName')
        ->name('frontend.restaurant-listening.searchByName');

        Route::get('/restaurant-listening/search-restaurants-by-category/{category}', 'searchByCategory')
        ->name('frontend.restaurant-listening.search.by.category');

        Route::get('/restaurant-listening/search-restaurants-by-location/{location}', 'searchByLocation')
        ->name('frontend.restaurant-listening.search.by.location');
    });

    Route::controller(SingularRestaurantController::class)->group(function () {

        Route::get('/singular-restaurant-listening/{id}/{title}', 'index')
        ->name('frontend.singular.restaurant.listening.page');
    });

    /**
     * This route will only be accessed by Authenticated Customers.
     */
    Route::controller(RestaurantFeedbackController::class)->middleware(['auth', 'isCustomer'])
    ->group(function () {

        Route::post('/restaurant/feedback/{id}', 'feedback')
        ->name('frontend.restaurant.singular.feedback');
    });


    Route::controller(NewsLetterController::class)->group(function () {

        Route::post('restaurant/subscribe', 'store')
        ->name('frontend.restaurant.news.letter.subscribe');
    });
});

/**
 * Administrator Dashboard Routes
 */
Route::prefix('admin')->name('admin.')
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->group(function() {

    Route::controller(DashboardController::class)->group(function () {

        Route::get('/dashboard', 'index')
        ->name('dashboard');

    });

    Route::controller(ProfileController::class)->group(function () {

        Route::get('/profile', 'index')
        ->name('profile');

        Route::put('/profile/update', 'update')
        ->name('profile.update');

        Route::put('/password/reset', 'resetPassword')
        ->name('password.reset');
    });

    Route::controller(UserManageController::class)->group(function () {

        Route::get('/users/manage', 'index')
        ->name('users.manage');

        Route::get('/users/delete/{id}', 'destroy')
        ->name('users.destroy');

    });

    Route::controller(AdminRestaurantManageController::class)->group(function () {

        Route::get('/restaurants/manage', 'index')
        ->name('restaurants.manage');

        Route::get('/restaurants/delete/{id}', 'destroy')
        ->name('restaurants.destroy');

    });

    Route::controller(KeywordManageController::class)->group(function () {

        Route::get('/keywords/management', 'index')
        ->name('keyword.management');

        Route::post('/keywords/management/add', 'store')
        ->name('keyword.management.store');

        Route::get('/keywords/management/destroy/{id}', 'destroy')
        ->name('keyword.management.destroy');

    });

    Route::controller(UserFeedbackController::class)->group(function () {

        Route::get('/users/feedback', 'index')
        ->name('users.feedback');

        Route::get('/users/feedback/destroy/{id}', 'destroy')
        ->name('users.feedback.destroy');
    });

    Route::controller(NotificationController::class)->group(function () {

        Route::get('/notifications', 'index')
        ->name('notifications');

        Route::post('/notifications/mark', 'store')
        ->name('notifications.mark');
    });

    Route::controller(AboutController::class)->group(function () {

        Route::get('/about', 'index')
        ->name('about');

        Route::post('/about/add', 'store')
        ->name('about.store');

        Route::put('/about/update/{id}', 'update')
        ->name('about.update');

        Route::get('/about/destroy/{id}', 'destroy')
        ->name('about.destroy');
    });

    Route::controller(ContactController::class)->group(function () {

        Route::get('/contact', 'index')
        ->name('contact');

        Route::post('/contact/add', 'store')
        ->name('contact.store');

        Route::put('/contact/update/{id}', 'update')
        ->name('contact.update');

        Route::get('/contact/destroy/{id}', 'destroy')
        ->name('contact.destroy');
    });

    Route::controller(UserQueryController::class)->group(function () {

        Route::get('users/contact/queries', 'index')
        ->name('users.query');

        Route::get('users/contact/queries/destroy/{id}', 'destroy')
        ->name('users.query.destroy');
    });

    Route::controller(NewsLetterSubscribersController::class)->group(function () {

        Route::get('subscribers', 'index')
        ->name('subscribed.users');

        Route::get('subscribers/destroy/{id}', 'destroy')
        ->name('subscribed.users.destroy');
    });
});

/**
 * Restaurant Dashboard Routes
 */
Route::prefix('restaurant')->name('restaurant.')
    ->middleware(['auth', 'verified', 'isRestaurant'])
    ->group(function () {

        Route::controller(RestaurantDashboardController::class)->group(function () {
            Route::get('/dashboard', 'index')
            ->name('dashboard');
        });

        Route::controller(RestaurantProfileController::class)->group(function () {

            Route::get('/profile', 'index')
            ->name('profile');

            Route::put('/profile/update', 'update')
            ->name('profile.update');

            Route::put('/password/reset', 'resetPassword')
            ->name('password.reset');
        });

        Route::controller(RestaurantManageController::class)->group(function () {

            Route::get('/restaurant/management', 'index')
            ->name('management');

            Route::post('/restaurant/management/add', 'store')
            ->name('management.store');

            Route::put('/restaurant/management/edit/{id}', 'update')
            ->name('management.edit');

            Route::get('/restaurant/management/destroy/{id}', 'destroy')
            ->name('management.destroy');

        });

        Route::controller(UsersFeedbackController::class)->group(function () {

            Route::get('/users/feedback', 'index')
            ->name('users.feedback');

            Route::get('/users/feedback/destroy/{id}', 'destroy')
            ->name('users.feedback.destroy');
        });

        Route::controller(RestaurantNotificationController::class)->group(function () {

            Route::get('/notifications', 'index')
            ->name('notifications');

            Route::post('/notifications/mark', 'store')
            ->name('notifications.mark');
        });

});

/**
 * Customer Dashboard Routes
 */
Route::prefix('customer')->name('customer.')
    ->middleware(['auth', 'verified', 'isCustomer'])
    ->group(function() {

    Route::controller(CustomerDashboardController::class)->group(function () {

        Route::get('/dashboard', 'index')->name('dashboard');

    });

    Route::controller(CustomerProfileController::class)->group(function () {

        Route::get('/profile', 'index')
        ->name('profile');

        Route::put('/profile/update', 'update')
        ->name('profile.update');

        Route::put('/password/reset', 'resetPassword')
        ->name('password.reset');
    });

    Route::controller(RestaurantManagementController::class)->group(function () {

        Route::get('/restaurant/management/feedback', 'index')
        ->name('restaurant.management.feedback');

        Route::get('/restaurant/management/feedback/destroy/{id}', 'destroy')
        ->name('restaurant.management.feedback.destroy');

    });

    Route::controller(CustomerNotificationController::class)->group(function () {

        Route::get('/notifications', 'index')
        ->name('notifications');

        Route::post('/notifications/mark', 'store')
        ->name('notifications.mark');
    });

});

require __DIR__.'/auth.php';
