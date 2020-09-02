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

Route::prefix('/user')->group(function(){
    Route::post('/login','loginController@login');

});
// customerApi routes
Route::group(['prefix'=>'/customer'],function(){
    Route::group(['middleware'=>'auth:api'],function(){
    Route::get('/issues','apiCustomerController@index');
    Route::post('/create','apiCustomerController@create');
    Route::get('/issue/{id}','apiCustomerController@show');
    Route::delete('/issue/{id}','apiCustomerController@destroy');

    });
      
});


// admin api

Route::group(['prefix'=>'/admin'],function(){
    Route::group(['middleware'=>'auth:api'],function(){
    Route::get('/','apiAdminController@index');
    Route::put('/edit','apiAdminController@update');
    Route::get('/issue{id}','apiAdminController@show');
    Route::delete('/issue{id}','apiAdminController@destroy');

    });
      
});


