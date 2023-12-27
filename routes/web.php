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
    return view('/homePage');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {return view('/homePage');});
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/we-do', function () {   return view('/we-do');});
    Route::get('/pricing', function () {return view('/pricing');});
    Route::get('/contact', function () {return view('/contact');});
    Route::get('/admin', function () {return view('/admin');});
    
});





