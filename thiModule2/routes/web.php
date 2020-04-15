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

Route::group(['prefix' => 'customer' ], function (){
    Route::get('/', 'CustomersController@index')->name('customers.index');
    Route::get('/create', 'CustomersController@create')->name('customers.create');
    Route::post('/create', 'CustomersController@store')->name('customers.store');
    Route::get('/keyword', 'CustomersController@search')->name('customers.search');
    Route::get('/destroy-news/{id}', 'CustomersController@destroy')->name('customers.destroy');
});
