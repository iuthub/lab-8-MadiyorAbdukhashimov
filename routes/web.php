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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index')->name('product.index');

Route::get('/add-to-cart/{id}', 'ProductController@addToCart')->name('product.addToCart');

Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('product.reduceByOne');

Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.remove');

Route::get('/checkout', 'ProductController@getCheckout')->name('checkout');

Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');
//////////////////////////////////

Route::resource('comments', 'CommentController');

