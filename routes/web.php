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
   $night = \App\Nightenroll::find(1);
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

Route::get('class', function()
{
    $enrolls = \App\Uniclass::find(1);
    foreach ($enrolls->enrolls as $enroll)
        echo $enroll->name;
//    return $enrolls->
});

Route::get('onetone', function()
{
    $uniclass = \App\Uniclass::find(1);
    return $uniclass->department->name;
});

Route::get('onetomany', function()
{
    $department = \App\Department::find(1);
    foreach ($department->majors as $major)
        echo $major->name;
});

Route::get('manytomany', function(){
    $user = \App\User::find(1);
    foreach($user->products as $product)
        echo $product->name;
});


Route::get('attach', function (){
   $user = \App\User::find(1);
   $user->products()->attach(5);
   return 'attached';
});

Route::get('mophtest1', function(){
    $product = \App\Product::find(1);
    echo $product->comments;
});

Route::get('mophtest2', function(){
    $user = \App\User::find(2);
    foreach ($user->comments as $comment)
        echo $comment->body;
});

Route::get('morphmany', function(){
   $user = \App\User::find(1);
   foreach ($user->tags as $tag)
       echo $tag->name;
});

Route::get('morphmany2', function()
{
    $tag = \App\Tag::find(1);
    foreach ($tag->users as $user)
        echo $user->name;
});


Route::get('student/login', ['as' => 'student_login', 'uses' => 'StudentController@login']);
Route::post('student/login', ['as' => 'post_student_login', 'uses' => 'StudentController@post_login']);
Route::get('student/register', ['as' => 'student_register', 'uses' => 'StudentController@register']);
Route::post('student/register', ['as' => 'post_student_register', 'uses' => 'StudentController@post_register']);
Route::get('terms', ['as' => 'terms', 'uses' => 'StudentController@term']);
Route::get('message', ['as' => 'message', 'uses' => 'StudentController@message']);
Route::post('message', ['as' => 'post_student_message', 'uses' => 'StudentController@post_message']);
Route::get('post', function()
{
   return 'post page';
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});