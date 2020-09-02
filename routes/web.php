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
/* Client Routing */

Route::get('/', function () {
    return view('client.index');
});

Route::get('/menu', function () {
    return view('client.menu');
});

Route::get('/gallery', function () {
    return view('client.gallery');
});

Route::get('/story', function () {
    return view('client.story');
});

Route::get('/booking', function () {
    return view('client.booking');
});

/* Dashboard Routing */
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/booking', 'BookingController@index');

Route::get('/dashboard/menu', function () {
    return view('dashboard.menu');
});


/* Auth Routing */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
