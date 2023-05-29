<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/','MainController@index')->name('adminHome');

    Route::resource('admins','AdminController');
    Route::post('/delete_admin','AdminController@delete')->name('delete_admin');
    Route::post('/admins_update','AdminController@update')->name('admins_update');

    #### Category ####
    Route::resource('/category', 'CategoryController');

    #### Service ####
    Route::resource('/service', 'ServiceController');

    #### Brands ####
    Route::resource('/brands', 'BrandController');
    Route::post('/delete_brands', 'BrandController@delete')->name('delete_brands');

    #### Partners ####
    Route::resource('/partners', 'PartnerController');
    Route::post('/delete_partners', 'PartnerController@delete')->name('delete_partners');

    #### About Us ####
    Route::resource('/about_us', 'AboutUsController')->except('create','store', 'edit', 'destroy');

    #### Questions ####
//    Route::resource('/question', 'QuestionController');

    #### Contact ####
    Route::resource('/contact', 'ContactController');

    #### Product ####
    Route::resource('/product', 'ProductController');
    Route::post('/product/changeStock', 'ProductController@changeStock')->name('changeStock');

    #### Project ####
    Route::resource('/project', 'ProjectController');

    #### Settings ####
    Route::resource('/settings', 'SettingController');

    #### Slider ####
    Route::resource('/slider', 'SliderController')->except('update');

    Route::post('/sliderUpdate', 'SliderController@sliderUpdate')->name('sliderUpdate');

    #### Quote ####
    Route::resource('/quote', 'QuoteController');
    Route::get('/getOneProduct/{id}', 'QuoteController@getOneProduct')->name('getOneProduct');;

    Route::post('/quoteDelete', 'QuoteController@quoteDelete')->name('quoteDelete');

    #### Menu ####



#### Auth ####
Route::get('logout', 'AuthController@logout')->name('admin.logout');



});

