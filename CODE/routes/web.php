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

Route::get('/', 'IndexController@dataIndex');    // trang chủ




Route::get('/id={idsp}', 'ProductsController@getDataProductsDetail');  // chi tiết sản phẩm

Route::get('/loai={tl}', 'ProductsController@getDataProducts'); // xử ly sản phẩm



Route::get('/registers', 'RegisterController@getRegister');     // xử lý đăng kí

Route::post('/registers', 'RegisterController@postRegister');   // xử lý đăng kí

Route::get('/login-user', 'loginController@getLogin');     // xử lý đăng nhập

Route::post('/login-user', 'loginController@postLogin');   // xử lý đăng nhập

Route::get('logout','loginController@postLogout');         // xử lý đăng nhập


// giỏ hàng
//Route::get('add-to-cart/{id}','ProductsController@getAddToCart');
//
//Route::get('shopping-cart','ProductsController@getCart');



//end giỏ hàng

//shopping cart
//Route::post('/cart', 'CartController@cart');
Route::get('mua-hang/{id}',['as'=>'muahang','uses'=>'ProductsController@muahang']);
Route::post('mua-hang/{id}',['as'=>'muahang','uses'=>'ProductsController@muahang']);
Route::get('gio-hang',['as'=>'giohang','uses'=>'ProductsController@giohang']);
Route::get('xoa-san-pham/{id}', ['as'=>'xoasanpham','uses'=>'ProductsController@xoasanpham']);
Route::get('xoa-het','ProductsController@xoahet');
Route::get('cap-nhat/{id}/{qty}',['as'=>'capnhat','uses'=>'ProductsController@capnhat']);
Route::post('mua-chi-tiet/{id}','ProductsController@muahangtutrangchitiet');

Route::get('/san-pham', function () {
    return view('layouts/products');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
