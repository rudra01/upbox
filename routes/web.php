<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WebpageController@index')->name('homepage');
Route::post('/Track', 'WebpageController@Track')->name('Track');
Route::get('/Contact', 'WebpageController@Contact')->name('Contact');
Route::get('/Feature', 'WebpageController@Feature')->name('Feature');
Route::get('/Rate-Calculator', 'WebpageController@RateCalculator')->name('RateCalculator');
Route::post('/getdata', 'WebpageController@getdata')->name('getdata');
Route::resource('/shipmentc', 'ShipmentController');
Route::get('/fullslip/{id}', 'ShipmentController@fullslip')->name('fullslip');
Route::get('/fullslip2/{id}', 'ShipmentController@fullslip2')->name('fullslip2');
Route::get('/label/{id}', 'ShipmentController@label')->name('label');
Route::post('/shipment', 'ShipmentController@shipment')->name('shipment');
Route::post('/createshipment', 'ShipmentController@createshipment')->name('createshipment');

Auth::routes(['register' => false]);
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/viewshipments', 'HomeController@viewshipments')->name('viewshipments');
Route::get('/createshipment', 'HomeController@createshipment')->name('createshipment');
// Route::get('/tracking', 'ShipmentController@tracking')->name('tracking');
// Route::get('/tackeredit/{id}', 'ShipmentController@tackeredit')->name('tackeredit');
// Route::get('/tackercreate', 'ShipmentController@tackercreate')->name('tackercreate');
Route::resource('/tracking', 'Trackingcontroller');

