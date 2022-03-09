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
    Route::resource('gallery', 'GalleryController');
    Route::get('/gallery/edit/{id}', 'GalleryController@edit')->name('gallery.edit');
    Route::get('/gallery/destroy/{id}', 'GalleryController@destroy')->name('gallery.destroy');
    Route::post('/gallery/status', 'GalleryController@updateStatus')->name('gallery.status');


    Route::get('/gallery/subcategory/index', 'GalleryController@indexSubcategory')->name('gallery.subcategory.index');
    Route::get('/gallery/subcategory/create', 'GalleryController@createSubcategory')->name('gallery.subcategory.create');
    Route::post('/gallery/subcategory/store', 'GalleryController@storeSubcategory')->name('gallery.subcategory.store');
    Route::get('/gallery/subcategory/edit/{id}', 'GalleryController@editSubcategory')->name('gallery.subcategory.edit');
    Route::post('/gallery/subcategory/{id}/update', 'GalleryController@updateSubcategory')->name('gallery.subcategory.update');


    Route::resource('galleryitem', 'GalleryItemController');
    Route::get('/galleryitem/edit/{id}', 'GalleryItemController@edit')->name('galleryitem.edit');
    Route::get('/galleryitem/destroy/{id}', 'GalleryItemController@destroy')->name('galleryitem.destroy');
});
