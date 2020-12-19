<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'homeController@index')->middleware('sess')->name('home.index');
Route::get('/login', 'loginController@index');
Route::get('/logout', 'logoutController@index');
Route::post('/login', 'loginController@verify');
Route::get('/create', 'homeController@createuser');    
Route::post('/create', 'homeController@userstore'); 