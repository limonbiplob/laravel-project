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

Route::get('/','welcomeController@limon');
/*Menu page*/
Route::get('/prothom','ProthomController@index');
Route::get('/Antorjatik','ProthomController@index');
Route::get('/Kelarkhobor','ProthomController@index');
Route::get('/Binodon','ProthomController@index');
Route::get('/LifeStyle','ProthomController@index');
Route::get('/Motamot','ProthomController@index');
Route::get('/job','ProthomController@index');
Route::get('/Shahitto','ProthomController@index');
Route::get('/PhotoGallery','ProthomController@index');

/*Admin*/
Auth::routes();
Route::get('/dashboard', 'HomeController@index');


Route::get('/Catagory/add', 'categoryController@index');
Route::post('/Catagory/save', 'categoryController@storeCatagory');
Route::get('/Catagory/manageCatagory', 'categoryController@manageCatagory');
Route::get('/catagory/edit/{id}', 'categoryController@editCatagory');

/*Shironam*/
Route::get('/shironam/add', 'ShironamController@index');
Route::post('/Shironam/save', 'ShironamController@storeShironam');


/*menufacturar*/
Route::get('/Manufacture/add', 'ManufactureController@index');
Route::post('/Manufacture/save', 'ManufactureController@storeManufacture');
Route::get('/Manufacture/manage', 'ManufactureController@manageCatagory');


/*Product*/
Route::get('/Product/add', 'ProductController@index');
Route::post('/Product/save', 'ProductController@storeProduct');

/*Image*/
Route::get('/Image/add', 'ImageController@index');
Route::post('/Image/save', 'ImageController@storeImage');
