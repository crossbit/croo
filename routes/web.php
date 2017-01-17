<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::resource('category', 'CategoryController');
Route::resource('photo', 'PhotoController');
Route::resource('portfolio', 'PortfolioController');
Route::get('/portfolio/category/{categoryId}', ['uses' => 'PortfolioController@getPortfoliosCategory']);
Route::get('/', ['uses' => 'HomeController@index']);
Route::get('/about', ['uses' => 'HomeController@about']);
Route::get('/contact', function() {
    return View::make('home.contact');
});



Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', ['as' => 'admin.getLogin', 'uses' => 'Admin\AuthController@getLogin']);
    Route::post('/login', ['as' => 'admin.postLogin', 'uses' => 'Admin\AuthController@postLogin']);
    Route::get('/logout', ['as' => 'admin.getLogout', 'uses' => 'Admin\AuthController@getLogout']);

    Route::group(['middleware' => ['auth.admin:admin']], function() {
        Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\IndexController@getIndex']);
    });
});

