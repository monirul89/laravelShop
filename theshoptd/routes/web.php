<?php
/********products & user *********/

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
/******** End products*********/
/******** Category *********/
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
/******** End category*********/
/************ brand *********/
Route::get('/brand',[
    'uses'      => 'BrandController@index',
    'as'        => 'addBrandForm'
]);

Route::post('/brand/save',[
    'uses'      => 'BrandController@saveBrand',
    'as'        => 'saveBrand'
]);
Route::get('/brand/manage',[
    'uses'      => 'BrandController@manageBrand',
    'as'        => 'manage-brand'
]);
Route::get('/brand/unpublished/{id}',[
    'uses'      => 'BrandController@unpublishedBrand',
    'as'        => 'unpublished-brand'
]);
Route::get('/brand/published/{id}',[
    'uses'      => 'BrandController@publishedBrand',
    'as'        => 'published-brand'
]);
Route::get('/brand/delete/{id}', [
    'uses'      =>  'BrandController@deleteBrand',
    'as'        =>  'delete-brand'
]);
Route::get('/brand/edit/{id}', [
    'uses'      =>  'BrandController@editBrand',
    'as'        =>  'edit-brand'
]);
Route::post('/brand/update', [
    'uses'      =>  'BrandController@updateBrand',
    'as'        =>  'updateBrand'
]);

Route::get('post/add',[
    'uses'      =>'DashboardController@addPost',
    'as'        =>'add-post'
]);
/********End brand *********/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');