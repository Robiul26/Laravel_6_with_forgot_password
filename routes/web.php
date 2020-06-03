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
Route::group(['middleware' => 'auth'], function () {
     Route::get('/dashboard', 'HomeController@index');
     Route::get('/report', 'ReportController@index');
     Route::get('/invoice-pdf-show', 'ReportController@invoice_pdf');
     Route::get('/invoice-pdf-download', 'ReportController@invoice_pdf_download');
     
     Route::get('/getGuzzleRequest', 'ReportController@getGuzzleRequest');
     Route::get('/postGuzzleRequest', 'ReportController@postGuzzleRequest');



     Route::resource('/roles', 'UserRoleController');
     Route::resource('/users', 'UserController');
     Route::resource('/orders', 'OrderController');
     Route::get('/search', 'OrderController@search');
     Route::get('/single_report/{id}', 'OrderController@single_report');
     Route::get('/getzone', 'OrderController@get_zone');
     Route::resource('/locations', 'CityZoneController');
});
