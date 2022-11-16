<?php

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
Route::prefix('admin')->group( function() {

    Route::get('/dashboard', function () {

        return view('dashboard.Admin.dashboard');

    })->middleware(['auth', 'isAdmin', 'verified'])
    ->name('admin.dashboard');

});

/**
 * User Routes
 */
Route::prefix('user')->group( function() {

    Route::get('/dashboard', function () {

        return view('dashboard.Customer.dashboard');

    })->middleware(['auth', 'isUser', 'verified'])
    ->name('user.dashboard');

});

require __DIR__.'/auth.php';
