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
    'as'        =>  'addCategoryForm'
]);
Route::post('/Category/Save', [
    'uses'      =>  'CategoryControlle@SaveCategory',
    'as'        =>  'saveCategory'
]);

Route::get('/category/manage', [
    'uses'      =>  'CategoryControlle@manageCategories',
    'as'        =>  'manage-categories'
]);
Route::get('/category/unpublished/{id}', [
    'uses'      =>  'CategoryControlle@unpublishedCategory',
    'as'        =>  'unpublished-category'
]);
Route::get('/category/published/{id}', [
    'uses'      =>  'CategoryControlle@publishedCategory',
    'as'        =>  'published-category'
]);
Route::get('/category/delete/{id}', [
    'uses'      =>  'CategoryControlle@deleteCategory',
    'as'        =>  'delete-category'
]);
Route::get('/category/edit/{id}',[
    'uses'      => 'CategoryControlle@editCategory',
    'as'        => 'edit-category'
]);
Route::post('/category/update',[
    'uses'      => 'CategoryControlle@updateCategory',
    'as'        => 'updateCategory'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');