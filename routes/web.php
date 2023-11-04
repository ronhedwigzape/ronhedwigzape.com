<?php

use App\Http\Controllers\ProfileController;
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
    return Inertia::render('Home', [
    ]);
})->name('home');

Route::get('/blog', function () {
    return Inertia::render('Blog', [
    ]);
})->name('blog');

Route::get('/projects', function () {
    return Inertia::render('Projects', [
    ]);
})->name('projects');

Route::get('/experiences', function () {
    return Inertia::render('Experiences', [
    ]);
})->name('experiences');

Route::get('/contact', function () {
    return Inertia::render('Contact', [
    ]);
})->name('contact');


