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

Route::get('/', function () {
    
     return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');
Route::get('/report', 'ReportController@index');
Route::get('/invoice', 'ReportController@invoice');

Route::get('/getGuzzleRequest', 'ReportController@getGuzzleRequest');


Route::resource('/roles', 'UserRoleController');
Route::resource('/users', 'UserController');
Route::resource('/orders', 'OrderController');
Route::resource('/locations', 'CityZoneController');
