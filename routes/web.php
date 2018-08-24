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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('test','LearnController@reqtest');

//Route::get('register',function (){
//    return view('register');
//});

Route::post('user/register',array('uses'=>'UserRegisterController@postRegister'));


//cookies
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

//stuinsert
Route::get('insert','StuInsertController@insertform');
Route::post('create','StuInsertController@insert');



//Route

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('signup','UserController@create')->name('signup');
//Route::resource('users','UserController');



//Users

Route::get('/users','UsersController@index')->name('user.index');
Route::get('/users/{user}','UsersController@show')->name('users.show');
Route::get('/users/create','UsersController@create')->name('users.create');
Route::post('/users','UsersController@store')->name('users.store');
Route::get('/users/{user}/edit'.'UsersController@edit')->name('users.edit');
Route::patch('/users/{user}','UsersController@update')->name('users.update');
Route::delete('/users/{user}','UsersController@destory')->name('users.delete');


//
//Route::get('/test','UsersController@test');

Route::get('getusers','UsersController@getUsers');