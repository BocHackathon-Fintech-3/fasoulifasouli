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

// Home view - Organization View
Route::get('/', function () {
    return view('fasoulifasouli');
});

// Client View
Route::get('/client','FasouliController@getFasouli');
Route::post('/client','FasouliController@postFasouli');

// Non-profit View
Route::get('/nonprofit','FasouliController@getNonProfit');
Route::post('/nonprofit','FasouliController@postNonProfit');

// Merchant View
Route::get('/store',function(){
	return view('store');
});

Route::post('/store','FasouliController@postStoreBuy');

Route::get('/merchant','FasouliController@getMerchant');