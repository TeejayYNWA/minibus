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

Route::get('/company', function () {
    return view('company');
});

Route::get('/vehicle', function () {
    return view('vehicle');
});

Route::get('/driver', function () {
    return view('driver');
});

Route::post('/companyInfo', function () {
    return view('companyInfo');
});

Route::post('/vehicleInfo', function () {
    return view('vehicleInfo');
});

Route::post('/driverInfo', function () {
    return view('driverInfo');
});