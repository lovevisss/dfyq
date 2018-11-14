<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as' => 'index', 'uses' => 'MainController@index'] );

Route::get('celebrity', ['as' => 'get_celebrity', 'uses' => 'MainController@get_celebrity']);

Route::get('test', function(){
    return view('index');
});

Route::get('post', function()
{
   return 'post page';
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});