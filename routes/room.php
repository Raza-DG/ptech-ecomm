<?php

/*
|--------------------------------------------------------------------------
| Room Facility System Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin Panel

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::resource('rooms', 'RoomController');
    Route::get('/room/edit/{id}', 'RoomController@edit')->name('room.edit');
    Route::get('/room/destroy/{id}', 'RoomController@destroy')->name('room.destroy');
    Route::post('/room/status', 'RoomController@updatestatus')->name('room.status');

    Route::resource('roomfacilities', 'RoomFacilitiyController');
    Route::get('/roomfacility/{id}', 'RoomFacilitiyController@index')->name('roomfacility.index');
    Route::get('/roomfacility/edit/{id}', 'RoomFacilitiyController@edit')->name('roomfacility.edit');
    Route::get('/roomfacility/destroy/{id}', 'RoomFacilitiyController@destroy')->name('roomfacility.destroy');

});
