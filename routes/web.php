<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentReplyController;


Route::get('/', function () {
    return view('/home-Page');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

    // Deze route accepteert het POST-verzoek van het registratieformulier
    Route::post('/register', 'Auth\RegisterController@register');

    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    // Eigen POST route voor het verwerken van de login
    Route::post('/login', 'Auth\LoginController@login');
    // Eigen POST route voor het uitloggen
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

  
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

    Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');
    Route::resource('faqs', FaqController::class)->middleware('admin');


    Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');

    Route::post('/comments/{comment}/reply', 'CommentController@reply')->name('comment.reply');


});

Route::middleware(['admin'])->group(function () {


    // FAQ management
    Route::resource('/admin/faq-categories', 'FaqCategoryController');
    Route::resource('/admin/faqs', 'FaqController');

    // Comment management
    Route::post('/comments/{comment}/reply', 'CommentReplyController@store')->name('comments.reply');
    Route::delete('/comments/{comment}', 'CommentController@destroy')->name('comments.destroy');
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
Route::get('/profile', function () {
    return view('profile.show');
})->name('profile');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Registratie
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/comments', function () {
    return view('comments');
})->name('comments');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/Faq', function () {
    return view('faq');
})->name('faq');

Auth::routes();