<?php
Route::get('/', [
    'uses'      =>  'NewShopController@index',
    'as'        =>  '/'
]);

Route::get('/customerLogin', [
    'uses'      =>  'CustomerController@index',
    'as'        =>  'customerLogin'
]);

Route::get('/user', [
    'uses'      =>  'CustomerController@userLogin',
    'as'        =>  'userLogin'
]);

Route::get('/customerRegister', [
    'uses'      =>  'CustomerController@register',
    'as'        =>  'customerRegister'
]);

Route::get('/products', [
    'uses'      =>  'ProductController@index',
    'as'        =>  'allproducts'
]);

Route::get('/wproducts', [
    'uses'      =>  'ProductController@womanProduct',
    'as'        =>  'womanProduct'
]);

Route::get('/product', [
    'uses'      =>  'ProductController@singleProduct',
    'as'        =>  'singleProduct'
]);

Route::get('/admin', [
    'uses'      =>  'DashboardController@index',
    'as'        =>  'uadmin'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
