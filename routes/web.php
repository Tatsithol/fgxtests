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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::resource('account', 'AccountController');
Route::get('/home', 'HomeController@index');


Route::post('acc_update','Account@index');

Route::get('/', ['as' => 'welcome', 'uses' => 'ProductsController@index']);

Route::get('/welcome', function() {
    //
})->name('ProductsController@index');

Route::get('account', 'AccountController@index')->name('account');



Route::get('/userhome', 'UserController@index')->name('userhome');

Route::post('sale', 'SaleController@create'); 

Route::post('update', 'TopupController@update');

Route::get('top', 'TopupController@index')->name('top');

Route::post('purchase', 'PurchaseController@index');










// 