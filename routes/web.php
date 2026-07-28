<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/cookies', function () {
    return view('cookies');
})->name('cookies');

Route::get('/refund', function () {
    return view('refund');
})->name('refund');

Route::get('/disclaimer', function () {
    return view('disclaimer');
})->name('disclaimer');

Route::get('/services/foundational', function () {
    return view('services-foundational');
})->name('services.foundational');

Route::get('/services/launch', function () {
    return view('services-launch');
})->name('services.launch');

Route::get('/services/growth', function () {
    return view('services-growth');
})->name('services.growth');

Route::get('/services/enterprise', function () {
    return view('services-enterprise');
})->name('services.enterprise');

Route::get('/services/creator', function () {
    return view('services-creator');
})->name('services.creator');
