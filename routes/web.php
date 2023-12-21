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

// GET METHODS

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/whyplants', function () {
    return view('whyplants');
});
Route::get('/buy', function () {
    return view('buy');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', '\App\Http\Controllers\VendorController@login');

Route::get('/dashboard', '\App\Http\Controllers\VendorController@dashboard');

Route::post('/signup', '\App\Http\Controllers\VendorController@store');

Route::get('/logout', '\App\Http\Controllers\VendorController@logout');

