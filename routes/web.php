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

// Route::get('/home', 'UserController@index');
Route::get('/home', 'HomeController@index');


Route::post('acc_update','TopupController@update');

Route::get('/', ['as' => 'welcome', 'uses' => 'ProductsController@index']);

Route::get('/welcome', function() {
    //
})->name('ProductsController@index');

// Route::get('/userhome', ProductsController@index () {
//     // Retrieve a piece of data from the session...
//     $id = session('id');

//     })->name('userhome');



Route::get('/userhome', 'UserController@index')->name('userhome');

 // Route::get('purchase', 'PurchaseController@index');

Route::get('top', 'TopupController@index')->name('top');

Route::post('purchase', 'PurchaseController@index');










// 