<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [

    ]);
});

Route::middleware(['web'])->group(function () {
    // Include all Fortify routes
    require base_path('vendor/laravel/fortify/routes/routes.php');

    // Override the /login route to return a 404 error
    Route::match(['get', 'post'], '/login', function () {
        abort(404);
    });
});
