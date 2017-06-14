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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/store', 'PagesController@products')->name('products');
Route::get('/register', 'PagesController@register')->name('register');
Route::post('/register', 'RegisterController@register')->name('do.register');
Route::get('/login', 'PagesController@login')->name('login');
Route::post('/login', 'LoginController@login')->name('do.login');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/item-upload', 'PagesController@item_upload')->name('itemupload');
Route::post('/item-upload', 'ProductController@store')->name('do.itemupload');
Route::post('/item-upload/done', 'ProductController@post_upload')->name('post.itemupload.edit');
Route::get('/products/{id}/{slug}', 'ProductController@show')->name('product.details');
Route::post('/product/delete', 'ProductController@delete')->name('product.delete');
Route::get('/product/{id}/edit', 'PagesController@product_edit')->name('product.edit');
