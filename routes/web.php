<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvi+er within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index','PageController@index')->name('users.index');
Route::get('/loai-san-pham/{type}','PageController@loaisanpham')->name('users.category');
Route::get('/chi-tiet-san-pham/{id}','PageController@chitiet')->name('users.detail');
Route::get('/lien-he','PageController@lienhe')->name('users.contact');
Route::get('/add-to-cart/{id}','PageController@AddtoCart')->name('users.add');
Route::get('/delete-cart/{id}','PageController@DelCart')->name('users.delcart');
Route::get('dat-hang',[
    'as' => 'dathang',
    'uses'=>'PageController@getCheckout']);
Route::post('dat-hang',[
    'as' => 'dathang',
    'uses'=>'PageController@postCheckout']);
Route::get('/dang-nhap','PageController@Login')->name('users.login');
Route::post('/dang-nhap', 'PageController@postLogin')->name('users.postlogin');
Route::get('/dang-ky','PageController@SignUp')->name('users.signup');
Route::post('/dang-ki', 'PageController@Store')->name('users.store');
Route::get('/dang-xuat','PageController@Logout')->name('users.logout');
Route::get('/search','PageController@Search')->name('users.search');
//users
Route::get('/admin', 'AdminController@index')->name('admins.index')->middleware(['can:admin-profile']);
Route::get('/admin/create','AdminController@create')->name('admins.create');
Route::get('/admin/{id}','AdminController@show')->name('admins.show');
Route::delete('/admin/{id}','AdminController@destroy')->name('admins.destroy');
Route::post('/admin', 'AdminController@store')->name('admins.store');
Route::get('/admin/{id}/edit','AdminController@edit')->name('admins.edit');
Route::put('admin/{id}/updated', 'AdminController@update')->name('admins.update');
//product
Route::get('/product', 'ProductController@index')->name('products.index')->middleware(['can:admin-profile']);
Route::get('/product/create','ProductController@create')->name('products.create');
Route::get('/product/{id}','ProductController@show')->name('products.show');
Route::delete('/product/{id}','ProductController@destroy')->name('products.destroy');
Route::post('/product', 'ProductController@store')->name('products.store');
Route::get('/product/{id}/edit','ProductController@edit')->name('products.edit');
Route::put('product/{id}/updated', 'ProductController@update')->name('products.update');
//bill
Route::get('/bill', 'BillController@index')->name('bills.index')->middleware(['can:admin-profile']);;
Route::get('/bill/{id}','BillController@show')->name('bills.show');
Route::get('/bill/{id}/edit','BillController@edit')->name('bills.edit');
Route::put('bill/{id}/updated', 'BillController@update')->name('bills.update');
Route::post('/bill', 'BillController@store')->name('bills.store');
Route::delete('/bill/{id}','BillController@destroy')->name('bills.destroy');
Route::get('/bill/create','BillController@create')->name('bills.create');
