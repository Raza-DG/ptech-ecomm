<?php

/*
|--------------------------------------------------------------------------
| Contact From Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin Panel

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('contact/list', 'HomeController@contact_list')->name('contact_list');
    Route::post('contact/show/', 'HomeController@contact_show')->name('contact_show');
});
