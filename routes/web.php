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






// -----Admin------
Route::get('/adminLogin', '\App\Http\Controllers\AdminController@showLoginForm')->name('adminLogin');
Route::post('/adminLogin', '\App\Http\Controllers\AdminController@login')->name('adminLogin.post');

Route::get('/dashboard', '\App\Http\Controllers\AdminController@viewDashboard');

Route::get('/products', '\App\Http\Controllers\AdminController@viewProducts')->name('products');

Route::get('/addProduct', '\App\Http\Controllers\AdminController@viewAddProduct')->name('addProduct');
Route::post('/addProduct', '\App\Http\Controllers\AdminController@addProduct')->name('addProduct.post');

Route::get('/editProduct{id}', '\App\Http\Controllers\AdminController@viewEditProduct')->name('editProduct');
Route::post('/editProduct{id}', '\App\Http\Controllers\AdminController@editProduct')->name('editProduct.post');

// Route::post('/products/{id}', '\App\Http\Controllers\AdminController@addProduct')->name('deleteProduct');
Route::delete('/products/{id}', '\App\Http\Controllers\AdminController@deleteProduct')->name('deleteProduct');

// ========


Route::post('/login', '\App\Http\Controllers\VendorController@login');



Route::post('/signup', '\App\Http\Controllers\VendorController@store');

Route::get('/logout', '\App\Http\Controllers\VendorController@logout');

