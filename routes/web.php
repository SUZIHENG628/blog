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

Route::get('register',function (){
    return view('register');
});

Route::post('user/register',array('uses'=>'UserRegisterController@postRegister'));


//cookies
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

//stuinsert
Route::get('insert','StuInsertController@insertform');
Route::post('create','StuInsertController@insert');