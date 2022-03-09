<?php

/*
|--------------------------------------------------------------------------
| Testimonial System Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin Panel

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::resource('testimonial', 'TestimonialController');
    Route::get('/testimonial/edit/{id}', 'TestimonialController@edit')->name('testimonial.edit');
    Route::get('/testimonial/destroy/{id}', 'TestimonialController@destroy')->name('testimonial.destroy');
    Route::post('/testimonial/status', 'TestimonialController@updateStatus')->name('testimonial.status');
});
