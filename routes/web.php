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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/create', 'ProductController@create');

Route::get('/products', 'ProductController@index')->name('products');

Route::post('/products', 'ProductController@store');

Route::get('/licenses', 'LicenseController@index')->name('licenses');

Route::post('/products/{product}/licenses', 'LicenseController@store');

Route::delete('/licenses/{license}', 'LicenseController@destroy');
