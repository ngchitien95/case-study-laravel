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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/',function(){
//     return view('trangchu');})->name('trang-chu');


Route::get('/lien-he',function(){
    return view('lienHe.lien-he');})->name('lien-he');



//tao group route
Route::group(['prefix' => '/'], function () {
    Route::get('/','PageController@getIndex')->name('trang-chu');
    // Route::get('/quan-cf-ngon','PageController@getQuanCfNgon')->name('quan-cf-ngon');
    Route::get('/cf','PageController@getCf')->name('cf');
    // Route::get('/bai-viet','PageController@getBaiViet')->name('bai-viet');
    // Route::get('/lien-he','PageController@getLienHe')->name('lien-he');
  });

// Route::group(['prefix' => 'products'], function () {
//     Route::get('/classic','ProductController@getClassic')->name('products');

//   });

// Route::group(['prefix' => 'quan-cf-ngon'], function () {
//     Route::get('/','QuanCfNgonController@index')->name('quan-cf-ngon');

//   });
//tao group route quán cf ngon
Route::group(['prefix' => 'quan-cf-ngon'], function () {
    Route::get('/','QuanCfNgonController@index')->name('quan-cf-ngon');
    // Route::get('/chitiet','QuanCfNgonController@getChiTiet')->name('quan-cf-ngon.chitiet');
    Route::get('/{id}/show','QuanCfNgonController@show')->name('quan-cf-ngon.show');

    Route::get('/create','QuanCfNgonController@create')->name('QuanCfNgon.create')->middleware('auth');
    Route::post('/create','QuanCfNgonController@store')->name('QuanCfNgon.store')->middleware('auth');
    Route::get('/{id}/edit','QuanCfNgonController@edit')->name('QuanCfNgon.edit')->middleware('auth');
    Route::post('/{id}/edit','QuanCfNgonController@update')->name('QuanCfNgon.update')->middleware('auth');
    Route::get('/{id}/destroy','QuanCfNgonController@destroy')->name('QuanCfNgon.destroy')->middleware('auth');
  });


//tao group route Bai` viet'
Route::group(['prefix' => 'bai-viet'], function () {
    Route::get('/','baiVietController@index')->name('bai-viet');
    Route::get('/{id}/show','baiVietController@show')->name('bai-viet.show');
    Route::get('/create','baiVietController@create')->name('bai-viet.create')->middleware('auth');
    Route::post('/create','baiVietController@store')->name('bai-viet.store')->middleware('auth');
    Route::get('/{id}/edit','baiVietController@edit')->name('bai-viet.edit')->middleware('auth');
    Route::post('/{id}/edit','baiVietController@update')->name('bai-viet.update')->middleware('auth');
    Route::get('/{id}/destroy','baiVietController@destroy')->name('bai-viet.destroy')->middleware('auth');
  });

  Route::group(['prefix' => 'cf'], function () {
    Route::get('/','CfController@index')->name('cf');
    Route::get('/{id}/show','CfController@show')->name('cf.show');
    Route::get('/create','CfController@create')->name('cf.create')->middleware('auth');
    Route::post('/create','CfController@store')->name('cf.store')->middleware('auth');
    Route::get('/{id}/edit','CfController@edit')->name('cf.edit')->middleware('auth');
    Route::post('/{id}/edit','CfController@update')->name('cf.update')->middleware('auth');
    Route::get('/{id}/destroy','CfController@destroy')->name('cf.destroy')->middleware('auth');
    Route::get('/keyword', 'CfController@search')->name('keyword.search');
    Route::get('/{id}/show-cf-type', 'CfController@show')->name('cf.showtype');
  });


Auth::routes();
Route::group(['prefix' => 'home'], function () {
    Route::get('/','HomeController@index')->name('home');
    // Route::get('/{id}/show','CfController@show')->name('cf.show');
    // Route::get('/create','CfController@create')->name('cf.create');
    // Route::post('/create','CfController@store')->name('cf.store');
    // Route::get('/{id}/edit','CfController@edit')->name('cf.edit');
    // Route::post('/{id}/edit','CfController@update')->name('cf.update');
    // Route::get('/{id}/destroy','CfController@destroy')->name('cf.destroy');
  });

// Route::get('/home', 'HomeController@index')->name('home');


//test admin
// Route::get('/admin',function(){
//     return view('admin.home');
// })->name('home.admin');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dasboard','AdminController@show_dashboard')->name('admin.show_dashboard');
    Route::get('/danh-muc-sp','AdminController@danhMucSp')->name('admin.danhMucSp');
    Route::get('/danh-muc-quan-cf','AdminController@danhMucQuanCf')->name('admin.danhMucQuanCf');
    Route::get('/danh-muc-bai-viet','AdminController@danhMucBaiviet')->name('admin.danhMucBaiviet');

  });

  Route::post('/save-cart','cartController@save_cart');
  Route::post('/update-cart-quantity','cartController@update_cart_quantity');

  Route::get('/show-cart','cartController@show_cart')->name('show-cart.cart');
  Route::get('/show-cart/destroy','cartController@destroy')->name('cart.destroy');
  Route::get('/delete-to-cart/{rowId}','cartController@delete_to_cart')->name('delete_to_cart.cart');

//   checkout
Route::get('/payment','CheckOutController@payment');
Route::post('/payment-create','CustomerController@store')->name('store-CheckOut');
