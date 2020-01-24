<?php

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

Route::get('/', 'ComController@show')->name('/');

Route::get('/about', function () {
    return view('photowall.about');
})->name('about');

Route::get('/clients', function () {
    return view('photowall.clients');
})->name('clients');

Route::get('/contact', function () {
    return view('photowall.contact');
})->name('contact');

Route::get('pricing', function () {
    return view('photowall.pricing');
})->name('pricing');

Route::get('/team', function () {
    return view('photowall.team');
})->name('team');
