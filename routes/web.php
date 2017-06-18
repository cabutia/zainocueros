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

/*---------------------------------------------
 * Development routes
 *--------------------------------------------*/
Route::get('/dev/testpage', function(){
  return view('store.developer.testpage')->with([
    "noFooter" => true
  ]);
});

/*---------------------------------------------
 * Auth & General routes
 *--------------------------------------------*/
Route::get('/', 'PagesController@home')->name('home');
Route::get('/store', 'PagesController@products')->name('products');
Route::get('/register', 'PagesController@register')->name('register');
Route::post('/register', 'RegisterController@register')->name('do.register');
Route::get('/login', 'PagesController@login')->name('login');
Route::post('/login', 'LoginController@login')->name('do.login');
Route::get('/logout', 'LoginController@logout')->name('logout');

/*---------------------------------------------
 * Product upload routes
 *--------------------------------------------*/
Route::get('/item-upload', 'PagesController@item_upload')->name('itemupload');
Route::post('/item-upload', 'ProductController@store')->name('do.itemupload');
Route::post('/item-upload/done', 'ProductController@post_upload')->name('post.itemupload.edit');

/*---------------------------------------------
 * Product routes
 *--------------------------------------------*/
Route::get('/products/{id}/{slug}', 'PagesController@product_show')->name('product.details');
Route::post('/product/delete', 'ProductController@delete')->name('product.delete');
Route::get('/product/{id}/edit', 'PagesController@product_edit')->name('product.edit');
Route::post('/product/update', 'ProductController@update')->name('do.product.edit');

/*---------------------------------------------
 * Category routes
 *--------------------------------------------*/
Route::get('/product/{category}/{subcat}', 'PagesController@cat_filtered_product_list')->name('product.list.categories');

/*---------------------------------------------
 * Shopping cart
 *--------------------------------------------*/

Route::get('/shopping-cart', 'PagesController@shopping_cart')->name('show.shopping_cart');
Route::post('/shopping-cart/add', 'ShoppingController@add_to_cart')->name('add_to_cart');
Route::post('/shopping-cart/delete', 'ShoppingController@delete')->name('delete_item_from_cart');
