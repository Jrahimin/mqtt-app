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


Route::get('/', 'DeviceInfoController@dashboard');

Route::get('trx-type-data', 'ChartDataController@getTrxTypeData');
Route::get('backend-hit-track', 'ChartDataController@getBackendHitData');

Route::resource('device-info', 'DeviceInfoController');


Route::get('/smart-home', function () {
        return view('dashboard.switch-operation');
});