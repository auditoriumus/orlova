<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\WebsiteControllers\WelcomeController::class)->name('welcome');

Route::get('/home', \App\Http\Controllers\WebsiteControllers\HomeController::class)->middleware(['auth'])->name('home');

require __DIR__ . '/auth.php';

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/public-offer', function () {
    return view('pages.public-offer');
})->name('public-offer');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::resource('courses', \App\Http\Controllers\CourseController::class)->names('courses');

Route::post('/subscribe', [\App\Http\Controllers\SubscribeController::class, 'subscribe'])->name('subscribe');

Route::post('/feedback', [\App\Http\Controllers\WebsiteControllers\FeedbackController::class, 'createFeedback'])->name('feedback');

Route::post('/order', [\App\Http\Controllers\OrderControllers\OrderController::class, 'paymentGenerate'])->name('order');

Route::group(['prefix' => 'pay'], function () {
    Route::get('/success', \App\Http\Controllers\OrderControllers\SuccessPayController::class);
    Route::get('/fail', \App\Http\Controllers\OrderControllers\FailPayController::class);
});
