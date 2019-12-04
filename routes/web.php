<?php
Route::get('/', [
    'uses'      =>  'NewShopController@index',
    'as'        =>  '/'
]);

Route::get('/login', [
    'uses'      =>  'CustomerController@index',
    'as'        =>  'customerLogin'
]);

Route::get('/register', [
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
