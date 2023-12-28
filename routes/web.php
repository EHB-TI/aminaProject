<?php

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

Route::get('/', function () {
    return view('/home-Page');
});

Route::middleware(['auth'])->group(function () {



});
Route::get('/', function () {
    return view('index');
})->name('home');

// About Page Route
Route::get('/about', function () {
    return view('about');
})->name('about');

// What We Do Page Route
Route::get('/we-do', function () {
    return view('we-do');
})->name('we-do');

// Pricing Page Route
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

// Contact Us Page Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Registratie
Route::get('/register', function () {
    return view('auth.register');
})->name('register');






