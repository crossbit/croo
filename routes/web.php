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
Route::get('/', ['uses' => 'HomeController@index']);
Route::resource('category', 'CategoryController');
Route::resource('photo', 'PhotoController');
Route::resource('recruitment', 'RecruitmentController');
Route::resource('portfolio', 'PortfolioController');
Route::get('/portfolio/category/{categoryId}', ['uses' => 'PortfolioController@getPortfoliosCategory']);
Route::get('/about', ['uses' => 'HomeController@about']);
Route::get('/contact', function() {
    return View::make('home.contact');
});

Route::group([
    'prefix' => 'auth'
], function() {

    Route::get('/login', [
        'as' => 'admin.getLogin',
        'uses' => 'Auth\LoginController@showLoginForm'
    ]);
    Route::post('/login', [
        'as' => 'admin.postLogin',
        'uses' => 'Auth\LoginController@login'
    ]);
    Route::get('/logout', [
        'as' => 'admin.getLogout',
        'uses' => 'Auth\LoginController@logout'
    ]);

});

Route::group([
    'prefix' => 'admin',
    'middleware' => ['role:admin']
], function() {

    Route::get('/', [
        'as' => 'admin.home',
        'uses' => 'Admin\IndexController@getIndex'
    ]);

});

