<?php
Route::get('/', [
    'uses'      =>  'NewShopController@index',
    'as'        =>  '/'
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

Route::get('/user', [
    'uses'      =>  'DashboardController@index',
    'as'        =>  'userProfile'
]);

Route::get('/category', [
    'uses'      =>  'CategoryControlle@index',
    'as'        =>  'addCategory'
]);
Route::get('/Categories', [
    'uses'      =>  'CategoryControlle@showCategory',
    'as'        =>  'showCategory'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');