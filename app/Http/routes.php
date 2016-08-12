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
Route::get('/vehicle', 'VehicleController@index');
Route::post('/vehicleInfo', 'VehicleController@redirect');

//DRIVER RELATED
Route::get('/drivers', 'DriverController@index');
Route::post('/driverInfo', 'DriverController@redirect');
Route::get('/driver', 'DriverController@addDriver');
Route::get('/driver/edit/{id}', 'DriverController@edit');
Route::get('/driver/delete/{id}', 'DriverController@delete');



Route::get('/checkInfo', function () {
    return view('checkInfo');
});