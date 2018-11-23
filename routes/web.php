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
Route::get('page/{id}', ['as' => 'page', 'uses' => 'PagesController@show']);
Route::get('post/{id}', ['as' => 'post', 'uses' => 'PostsController@show']);
Route::get('category/{id}', ['as' => 'category', 'uses' => 'MainController@get_category']);

Route::get('night', function ()
{
   $night = \App\NightEnroll::find(1);
   return $night->members;
});


Route::get('user', function()
{
    $user = \App\User::find(1);
    return $user->nightenrolls;
});
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