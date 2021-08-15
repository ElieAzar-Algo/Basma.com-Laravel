<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix'=>'user'], function(){

Route::post('/login', 'UserAuthController@login');
Route::post('/logout', 'UserAuthController@logout');

});
Route::get('/auto-deploy-test', function(){
    dd('deployed automatically');
});

Route::post('/customer/register', 'CustomerController@store');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('/customer/items/{items}', 'CustomerController@index');
    Route::get('/customer/range/{range}', 'CustomerController@getAverage'); 
    
});


