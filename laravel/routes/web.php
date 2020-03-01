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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/catalogue', 'HomeController@index')->name('catalogue');
Route::get('/panier', 'PanierController@panier')->name('panier');
Route::post('/panier', 'PanierController@panier')->name('panier');
Route::get('/produit/{id}', 'ProduitController@produit')->name('produit');
Route::get('/produit/{id}/update', 'ProduitController@produit')->name('update');
Route::get('addtocart/{id}', 'PanierController@addToCart' );
Route::get('remove-from-cart/{id}', 'ProduitController@remove');
Route::get('/checkout', 'CheckoutpanierController@getcheckout')->name('checkout');
Route::post('/checkout', 'CheckoutpanierController@getcheckout')->name('checkout');
Route::get( 'updatecart/{id}', 'ProduitController@update' );

Route::get('/valideorder', 'PanierController@valideOrder')->name('valideorder');


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'AdminController@form')->name('admin');
    Route::get('/admin', 'AdminController@form')->name('admin');
    Route::post('/admin', 'AdminController@NewProduct')->name('admin_NewProduct');
    Route::post('/update/{id}', 'AdminController@update')->name('update');
    Route::get('/updateProduct/{id}', 'AdminController@updateproduct')->name('admin_updateProduct');
    Route::post('/modifyQTY', 'AdminController@ModifyQTY');
});