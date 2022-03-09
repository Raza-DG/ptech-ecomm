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
    Route::resource('pagecategory', 'PageCategoryController');
    Route::get('/pagecategory/edit/{id}', 'PageCategoryController@edit')->name('pagecategory.edit');
    Route::get('/pagecategory/destroy/{id}', 'PageCategoryController@destroy')->name('pagecategory.destroy');
});
