<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//COMPANY RELATED
Route::get('/company', 'CompanyController@index');
Route::post('/companyInfo', 'CompanyController@redirect');

//VEHICLE RELATED
Route::get('/vehicles', 'VehicleController@index');
Route::get('/vehicle', 'VehicleController@addVehicle');
Route::post('/vehicleInfo', 'VehicleController@redirect');
Route::get('/vehicle/edit/{id}', 'VehicleController@edit');
Route::get('/vehicle/delete/{id}', 'VehicleController@delete');
Route::get('/vehicles/validate', 'VehicleController@validationCheck');


//DRIVER RELATED
Route::get('/drivers', 'DriverController@index');
Route::post('/driverInfo', 'DriverController@redirect');
Route::get('/driver', 'DriverController@addDriver');
Route::get('/driver/edit/{id}', 'DriverController@edit');
Route::get('/driver/delete/{id}', 'DriverController@delete');
Route::get('/drivers/validate', 'DriverController@validationCheck');


//CHECK INFO
Route::get('/checkInfo', 'CheckInfoController@index');

//QUOTE RELATED
Route::get('/quote', 'QuoteController@index');
Route::get('/detailsToDB', 'QuoteController@index');











Route::get('/arrays', function(){
    return view('array');
});
