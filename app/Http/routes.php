<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::post('/home/pregunta1', 'HomeController@store1');
Route::post('/home/pregunta2', 'HomeController@store2');
Route::post('/home/pregunta3', 'HomeController@store3');
Route::post('/home/pregunta4', 'HomeController@store4');
Route::post('/home/pregunta5', 'HomeController@store5');
Route::post('/home/pregunta6', 'HomeController@store6');
Route::post('/home/pregunta7', 'HomeController@store7');
Route::post('/home/pregunta8', 'HomeController@store8');
Route::post('/home/pregunta9', 'HomeController@store9');
